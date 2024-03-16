<?php

namespace App\Http\Controllers\Api\Modules\Users\Repositories;

use App\Exceptions\CustomValidationException;
use App\Http\Controllers\Api\Modules\BaseRepository;
use App\Http\Controllers\Api\Modules\Users\Interfaces\UserInterface;
use App\Http\Controllers\Api\Modules\Users\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Database\Eloquent\Model;

class UserRepository extends BaseRepository implements UserInterface
{
    protected function model(): string
    {
        return User::class;
    }

    public function register($data): Model|bool
    {
        $model = $this->create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
        return $model;
    }

    /**
     * @throws CustomValidationException
     */
    public function UserLogin(array $data): Model
    {
        return parent::login('user', $data);
    }

    /**
     * @throws CustomValidationException
     */
    public function UserLogout(): void
    {
        parent::logout();
    }
}
