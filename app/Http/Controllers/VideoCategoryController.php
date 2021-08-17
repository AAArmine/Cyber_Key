<?php

namespace App\Http\Controllers;

use App\Models\VideoCategory;
use App\Models\Video;


use Illuminate\Http\Request;

class VideoCategoryController extends Controller
{
    public function video_categories()
    {
        return view('video', [
            'VideoCategory' => VideoCategory::all(),
            'Video' => Video::all(),
        ]);
    }
}
