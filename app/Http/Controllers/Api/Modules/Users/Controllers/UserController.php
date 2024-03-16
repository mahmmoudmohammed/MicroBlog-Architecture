<?php

namespace App\Http\Controllers\Api\Modules\Users\Controllers;


use App\Http\Controllers\Api\BaseController;
use App\Http\Controllers\Api\Modules\Users\Interfaces\UserInterface;
use App\Http\Controllers\Api\Modules\Users\Models\User;
use App\Http\Controllers\Api\Modules\Users\Requests\CreateUserRequest;
use App\Http\Controllers\Api\Modules\Users\Resources\UserResource;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;


class UserController extends BaseController
{
    private $userService;

    public function __construct(UserInterface $user)
    {
        $this->userService = $user;
    }

    public function getById(User $model): JsonResponse
    {
        $user = $this->userService->getById($model->id);
        if (!$user)
            return $this->error(__('common.not_found'),404);

        return  $this->responseResource(
            UserResource::make($user->loadUserMedia()),
        );
    }
    public function delete(User $model): JsonResponse
    {
        $deleted =$this->userService->delete($model->id);
        if(1 > $deleted)
            return $this->error(__('common.not_found'),404);

        if(!$deleted)
            return $this->error(__('common.error'),500);

        return $this->success();
    }
    public function follow(User $user)
    {
        auth()->user()->following()->syncWithoutDetaching($user);
        return $this->success();
    }
}
