<?php

namespace App\Http\Controllers\Api\Modules\Users\Resources;

use App\Http\Controllers\Api\Modules\Users\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @mixin User
 */
class UserResource extends JsonResource
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
            'username' => $this->username,
            'email' => $this->email,
            'image' => $this->getImageUrls(),
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
    protected function getImageUrls(): ?string
    {
        $media = $this->getFirstMedia('images');
        return $media?->getUrl();
    }
}

