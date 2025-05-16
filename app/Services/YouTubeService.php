<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class YouTubeService
{
    protected string $key;
    protected string $channel;

    public function __construct()
    {
        $this->key     = config('services.youtube.key');
        $this->channel = config('services.youtube.channel');
    }

    public function fetchChannelVideos(int $maxResults = 10): array
    {
        $response = Http::withOptions(['verify' => false])
            ->get('https://www.googleapis.com/youtube/v3/search', [
                'key'        => $this->key,
                'channelId'  => $this->channel,
                'order'      => 'date',
                'part'       => 'snippet',
                'type'       => 'video',
                'maxResults' => $maxResults,
            ]);

        if ($response->failed()) {
            return [];
        }

        return $response->json('items', []);
    }
}