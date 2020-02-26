<?php

namespace App\Services;

use App\Models\AbuseCategory;
use App\Models\AbusedImage;
use App\Models\Image;
use App\Models\ImageCategoryType;
use Illuminate\Database\Eloquent\Builder;

class ImageService
{
	private $shortcut;

	public static function getImageByShortcut(string $shortcut)
	{
        return Image::where('shortcut', $shortcut)->first();
	}       

	public function getImagesByCategoryTypeShortcut(string $shortcut)
	{
		$this->shortcut = $shortcut;

		// fetch
		$images = Image::whereHas('category.image_category_type', function (Builder $query) {
			return $query->where('image_category_types.shortcut', $this->shortcut);
		})->get();

		// sort
		$images->sortBy(function ($image) {
			return $image->category->image_category_type_order;
		});

		return $images;
	}       

	public function autocomplete(string $needle)
	{
		$images = Image::where('shortcut', 'LIKE', $needle . '%')->orderBy('shortcut')->get();
		$host = request()->getSchemeAndHttpHost();

		$data["slug"] = $needle;
		$data["emoticons"] = [];
		foreach($images as $image) {
			$data["emoticons"][] = [
				"slug" => $image->shortcut,
				"url" => $host . $image->src,
				"score" => 0,
			];
		}
	
		return $data;
	}

	// selects

	public function getUploadables()
	{
		return ImageCategoryType::where('uploadable', true)->orderBy('shortcut')->pluck('shortcut','id')->toArray();
	}

	public function getAbuseCategories()
	{
		return AbuseCategory::orderBy('id')->pluck('shortcut','shortcut')->toArray();
	}

	public function reportAbuse(string $shortcut, string $categoryShortcut)
	{
		$image = Image::where('shortcut', $shortcut)->first();
		$category = AbuseCategory::where('shortcut', $categoryShortcut)->first();

		$abusedImage = AbusedImage::where([
			'image_id' => $image->id,
			'abuse_category_id' => $category->id,
		])->first();
		
		if (!$abusedImage) {
			AbusedImage::create([
				'image_id' => $image->id,
				'abuse_category_id' => $category->id,
			]);
			return 'reported';
		} else {
			$abusedImage->delete();
			return 'undone';
		}
	}
}
