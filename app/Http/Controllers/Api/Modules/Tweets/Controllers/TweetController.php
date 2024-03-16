<?php

namespace App\Http\Controllers\Api\Modules\Tweets\Controllers;

use App\Http\Controllers\Api\Modules\Tweets\Requests\CreateTweetRequest;
use App\Http\Controllers\Api\Modules\Tweets\Interfaces\TweetInterface;
use App\Http\Controllers\Api\Modules\Tweets\Resources\TweetResource;
use App\Http\Controllers\Api\Modules\Tweets\Models\Tweet;
use App\Http\Controllers\Api\BaseController;
use Illuminate\Http\JsonResponse;


class TweetController extends BaseController
{
    public function __construct(private TweetInterface $tweetService)
    {
    }
    public function timeline(): JsonResponse
    {
        $models = $this->tweetService->list();
        if (!$models)
            return $this->error(__('common.not_found'),404);

        return $this->responseResource(
            TweetResource::collection($models)
        );
    }

    public function create(CreateTweetRequest $request): JsonResponse
    {
        $tweet = $this->tweetService->create($request->validated());
        if (!$tweet)
            return $this->error(__('common.error'), 500);
        return $this->responseResource(
            TweetResource::make($tweet),
            status: 201
        );
    }

    public function getById(Tweet $model): JsonResponse
    {
        $tweet = $this->tweetService->getById($model->id);
        if (!$tweet)
            return $this->error(__('common.not_found'), 404);
        $tweet->load('user');

        return $this->responseResource(
            TweetResource::make($tweet),
        );
    }

    public function delete(Tweet $model): JsonResponse
    {
        $deleted = $this->tweetService->delete($model->id);
        if (1 > $deleted)
            return $this->error(__('common.not_found'), 404);

        if (!$deleted)
            return $this->error(__('common.error'), 500);

        return $this->success();
    }
}
