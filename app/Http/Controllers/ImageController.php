<?php

namespace App\Http\Controllers;

use App\DataTypes\ListDataType;
use App\Events\MyEvent;
use App\Http\Requests\UploadRequest;
use App\Models\Extension;
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
            'csrf' => csrf_token(),
            'data' => (new ListDataType('upload_graphic', $uploadables))
        ]);
    }

    public function emoticons(UploadRequest $request)
    {
        $formData = $request->validated();
        dump($formData);

        $file = $request->file('image');
        $fileExtension = $file->getClientOriginalExtension();
        $fileName = str_replace('.' . $fileExtension ,'' , $file->getClientOriginalName());

        //Display File Name
        echo 'File Name: '.$fileName;
        echo '<br>';
        //Display File Extension
        echo 'File Extension: '.$fileExtension;
        echo '<br>';
        //Display File Real Path
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';
        //Display File Size
        echo 'File Size: '.$file->getSize();
        echo '<br>';
        //Display File Mime Type
        echo 'File Mime Type: '.$file->getMimeType();
     
        //Move Uploaded File
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());

        $extension = Extension::where('extension', $fileExtension)->first();
        Image::create([
            'shortcut' => $formData['slug'],
            // '_id' => $formData['category'],
            'filename_extension_id' => $extension->id,
            'filename' => $fileName,
        ]);
    }
}
