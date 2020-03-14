<?php

namespace Edalzell\Rss\Tags;

use SimplePie;
use Statamic\Tags\Tags;
use willvincent\Feeds\Facades\FeedsFacade;

class Feed extends Tags
{
    public function index()
    {
        $feed = collect(FeedsFacade::make('https://thedalzells.org')->get_items())->map(function ($item, $ignored) {
            return [
                'title' => $item->get_title(),
                'summary' => $item->get_description(),
                'content' => $item->get_content()
            ];
        });
        return $feed;
    }
}
