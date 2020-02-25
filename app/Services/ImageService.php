<?php

namespace App\Services;

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

	public function getImageByCategoryTypeShortcut(string $shortcut)
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

	public function getUploadables()
	{
		return ImageCategoryType::where('uploadable', true)->orderBy('shortcut')->pluck('shortcut','id')->toArray();
	}

	public function autocomplete(string $needle)
	{
		$images = Image::where('shortcut', 'LIKE', $needle . '%')->orderBy('shortcut')->get();

		$data["slug"] = $needle;
		$data["emoticons"] = [];
		foreach($images as $image) {
			$data["emoticons"][] = [
				"slug" => $image->shortcut,
				"url" => $image->src,
				"score" => 0,
			];
		}
	
		return $data;
	}

}
