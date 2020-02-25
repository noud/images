<?php

namespace App\Http\Controllers;

use App\DataTypes\ImageDataType;
use App\DataTypes\ListDataType;
use App\Events\MyEvent;
use App\Http\Requests\UploadRequest;
use App\Models\Extension;
use App\Models\Image;
use App\Services\ImageService;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    private $shortcut;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index()
    {
        // @todo ajax
        $images = $this->imageService->getImageByCategoryTypeShortcut('emoticon');

        return view('images.index', [
            'csrf' => csrf_token(),
            'selected' => 3 - 1,
            'data' => (new ListDataType('emoticon', $images)),
            "emoticonAutocompleteDisplay" => "block",
            "emoticonPreviewDisplay" => "hide",
            "faceboxDisplay" => "hide",
        ]);
    }

    public function reportAbuse()
    {
        return 'reported';
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

        $file = $request->file('image');
        $fileExtension = $file->getClientOriginalExtension();
        $fileName = str_replace('.' . $fileExtension ,'' , $file->getClientOriginalName());

        // dump($formData);
        // echo 'File Name: '.$fileName;
        // echo '<br>';
        // echo 'File Extension: '.$fileExtension;
        // echo '<br>';
        // echo 'File Real Path: '.$file->getRealPath();
        // echo '<br>';
        // echo 'File Size: '.$file->getSize();
        // echo '<br>';
        // echo 'File Mime Type: '.$file->getMimeType();
     
        // @todo Move Uploaded File
        $destinationPath = 'images' . '/' . now()->format('Y/m/d/');
        $file->move($destinationPath,$file->getClientOriginalName());

        $extension = Extension::where('extension', $fileExtension)->first();
        $image = Image::create([
            'shortcut' => $formData['slug'],
            // '_id' => $formData['category'],
            'filename_extension_id' => $extension->id,
            'filename' => $fileName,
        ]);

        return redirect()->route('images.upload_complete', [$image]);
    }

    public function uploadComplete(Image $image)
    {
        return view('images.upload_complete', [
            'data' => (new ImageDataType($image->shortcut, $image->src))
        ]);
    }

    public function autocomplete(Request $request)
    {
        $queryParam = $request->query('slug');
        return $this->imageService->autocomplete($queryParam);
    }
}
