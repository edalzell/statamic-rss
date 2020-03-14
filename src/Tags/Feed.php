<?php

namespace Edalzell\Rss\Tags;

use SimplePie;
use Statamic\Tags\Tags;
use willvincent\Feeds\Facades\FeedsFacade;

class Feed extends Tags
{
    public function index()
    {
        $url = $this->params->get('url');
        $feed = collect(FeedsFacade::make($url)->get_items())->map(function ($item, $ignored) {
            return [
                'title' => $item->get_title(),
                'summary' => $item->get_description(),
                'content' => $item->get_content()
            ];
        });
        return $feed;
    }
}
