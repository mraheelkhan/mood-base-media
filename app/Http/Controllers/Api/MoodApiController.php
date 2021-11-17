<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\MediaResource;
use App\Models\Media;
use Illuminate\Http\Request;

class MoodApiController extends Controller
{
    public function index()
    {
        $media = Media::active()->with('mood')->get();
        return MediaResource::collection($media);
    }
}
