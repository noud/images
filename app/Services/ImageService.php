<?php

namespace App\Services;

use App\Models\Image;

class ImageService
{
	public static function getImageByShortcut(string $shortcut)
	{
        return Image::where('shortcut', $shortcut)->first();
	}
}
