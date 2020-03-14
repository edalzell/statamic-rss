<?php

namespace Edalzell\Rss;

use Edalzell\Rss\Tags\Feed;
use willvincent\Feeds\FeedsServiceProvider;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $tags = [
       Feed::class
    ];

    public function register()
    {
        $this->app->register(FeedsServiceProvider::class);
    }
}
