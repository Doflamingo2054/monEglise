<?php

namespace App\Http\Controllers;

use App\Services\YouTubeService;

class MultimediaController extends Controller
{
    public function index(YouTubeService $yt)
    {
        $videos = $yt->fetchChannelVideos(12);
        return view('multimedia.index', compact('videos'));
    }


}
