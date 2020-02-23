<?php

namespace App\Services;

use App\Models\Image;

class ImageService
{
	public static function getImageByShortcut(string $shortcut)
	{
        return Image::where('shortcut', $shortcut)->first();
	}        

	public function getImageByCategoryTypeShortcut(string $shortcut)
	{
        $images = Image::all();

		// @todo relation

		// forget non matching
		foreach ($images as $key => $image) {
		    if ($category = $image->category) {
		        if($category->imageCategoryType->shortcut != $shortcut) {
					$images->forget($key);
				}
		    } else {
				$images->forget($key);
			}
		}

		// sort
		$images->sortBy(function ($image) {
			return $image->category->image_category_type_order;
		});

		return $images;
	}        
}
