<?php

namespace App\Http\Controllers\Api\Modules\Users\Interfaces;

use App\Http\Controllers\Api\Modules\Users\Models\User;
use Illuminate\Database\Eloquent\Model;

interface UserInterface
{
    public function register($data): Model|bool;

    public function UserLogin(array $data): Model;

    public function UserLogout(): void;

}
