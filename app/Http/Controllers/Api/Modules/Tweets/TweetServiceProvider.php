<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Modules\Tweets;

use App\Http\Controllers\Api\Modules\Tweets\Interfaces\TweetInterface;
use App\Http\Controllers\Api\Modules\Tweets\Repositories\TweetRepository;
use Illuminate\Support\ServiceProvider;

class TweetServiceProvider extends ServiceProvider
{

    public function register()
    {
        //TODO::bind interface repositories
        $this->app->bind(TweetInterface::class, TweetRepository::class);
    }

    public function boot()
    {
        // TODO::boot any observers
    }
}
