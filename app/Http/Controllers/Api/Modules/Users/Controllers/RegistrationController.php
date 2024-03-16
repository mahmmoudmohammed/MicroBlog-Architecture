<?php

namespace App\Http\Controllers\Api\Modules\Users\Controllers;


use App\Http\Controllers\Api\BaseController;
use App\Http\Controllers\Api\Modules\Users\Interfaces\UserInterface;
use App\Http\Controllers\Api\Modules\Users\Requests\UserRegistrationRequest;
use App\Http\Controllers\Api\Modules\Users\Resources\UserResource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Throwable;


class RegistrationController extends BaseController
{
    private $userService;

    public function __construct(UserInterface $user)
    {
        $this->userService = $user;
    }

    /**
     * store new User in db and create Auth token
     *
     * @param mixed $request
     *
     * @return JsonResponse
     */
    public function register(UserRegistrationRequest $request): JsonResponse
    {
        try {
            $user = $this->userService->register($request->validated());

            if ($user && $request->hasFile('image') && $request->file('image')->isValid())
                $this->associateMedia($user);

            return $this->responseResource(UserResource::make($user->loadUserMedia()), [
                'token' => $user->createToken($request->ip())->plainTextToken,
            ]);
        } catch (Throwable $exception) {
            report($exception);
            return $this->error(__('common.error'));
        }
    }
    private function associateMedia(Model|bool $user): void
    {
        $user->addMediaFromRequest('image')->toMediaCollection('images');
    }
    public function verifyEmail(Request $request)
    {
        //TODO:: Verify User Email
    }
}
