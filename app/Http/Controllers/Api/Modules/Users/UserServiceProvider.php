<?php

declare(strict_types=1);

namespace App\Http\Controllers\Api\Modules\Users;

use App\Http\Controllers\Api\Modules\Users\Interfaces\UserInterface;
use App\Http\Controllers\Api\Modules\Users\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{

    public function register()
    {
        //TODO::bind interface repositories
        $this->app->bind( UserInterface::class, UserRepository::class);
    }

    public function boot()
    {
        // TODO::boot any observers
    }
}
