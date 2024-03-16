<?php

namespace App\Http\Controllers\Api\Modules\Users\Controllers;


use App\Http\Controllers\Api\BaseController;
use App\Http\Controllers\Api\Modules\Users\Interfaces\UserInterface;
use App\Http\Controllers\Api\Modules\Users\Requests\UserLoginRequest;
use App\Http\Controllers\Api\Modules\Users\Resources\UserResource;


class LoginController extends BaseController
{

    public function __construct(private UserInterface $userService)
    {
    }
    /**
     * Login for admin.
     *
     * @param UserLoginRequest $request Incoming request.
     *
     * @return UserResource
     */
    public function login(UserLoginRequest $request): UserResource
    {
        $user = $this->userService->UserLogin($request->validated());

        return (new UserResource($user->loadUserMedia()))->additional([
            'token' => $user->createToken($request->ip())->plainTextToken,
        ]);
    }
    public function logout(): void
    {
        $this->userService->UserLogout();
    }

}
