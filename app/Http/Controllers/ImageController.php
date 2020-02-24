<?php

namespace App\Http\Controllers;

use App\DataTypes\ListDataType;
use App\Events\MyEvent;
use App\Models\Image;
use App\Services\ImageService;

class ImageController extends Controller
{
    private $shortcut;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function popup()
    {
        $images = $this->imageService->getImageByCategoryTypeShortcut('emoticon');

        if ($images) {
            return view('images.popup', [
                'data' => (new ListDataType('emoticon', $images))
            ]);
        }

        return 'not found';
    }

    public function upload()
    {
        $uploadables = $this->imageService->getUploadables();

        return view('images.upload', [
            'data' => (new ListDataType('upload_graphic', $uploadables))
        ]);
    }

    public function emoticons()
    {
        return 'found';
    }
}
