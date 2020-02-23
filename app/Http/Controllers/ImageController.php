<?php

namespace App\Http\Controllers;

use App\DataTypes\ImagesListDataType;
use App\Events\MyEvent;
use App\Models\Image;

class ImageController extends Controller
{
    public function popup()
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

        if ($images) {
            return view('images.popup', [
                'data' => (new ImagesListDataType('emoticon', $images))
            ]);
        }
        return 'not found';
    }
}
