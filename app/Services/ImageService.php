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

		// @todo relations
		$images = $images->slice(0, -3);
		// foreach ($images as $image) {
		//     $imageCategoryType = $image->categoryType;
		//     if ($imageCategoryType) {
		//         dd($imageCategoryType->imageCategoryType);
		//         dd('g');
		//     }
		// }
		// dd($images);

		return $images;
	}        
}
