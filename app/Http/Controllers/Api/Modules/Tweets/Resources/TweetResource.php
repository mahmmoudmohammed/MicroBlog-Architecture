<?php

namespace App\Http\Controllers\Api\Modules\Tweets\Resources;

use App\Http\Controllers\Api\Modules\Users\Models\User;
use App\Http\Controllers\Api\Modules\Users\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin User
 */
class TweetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     *
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'tweet' => $this->tweet,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'user' => UserResource::make($this->whenLoaded('user')),
        ];
    }
}

