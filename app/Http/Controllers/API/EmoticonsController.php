<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Services\ImageService;
use Illuminate\Http\Request;

class EmoticonsController extends Controller
{
    private $shortcut;

    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {
        $queryParam = $request->query('slug');
        $emoticons = $this->imageService->autocomplete($queryParam);

        return response()->json($emoticons, 200);
    }
}
