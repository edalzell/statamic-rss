<?php

namespace Edalzell\Rss;

use Edalzell\Rss\Tags\Feed;
use Statamic\Providers\AddonServiceProvider;
use willvincent\Feeds\FeedsServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $publishAfterInstall = false;

    protected $tags = [
       Feed::class,
    ];

    public function register()
    {
        $this->app->register(FeedsServiceProvider::class);
    }
}
