<?php

namespace App\Http\Controllers\Api\Modules\Users\Models;

use App\Http\Controllers\Api\Modules\Tweets\Models\Tweet;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class User extends Authenticatable implements HasMedia
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes, HasRoles,InteractsWithMedia;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'password',
    ];

    protected $hidden = [
        'id', 'password'
    ];

    public function following(): BelongsToMany
    {
        return $this->belongsToMany(static::class, 'followers', 'user_id', 'follower_id');
    }
    public function tweets(): HasMany
    {
        return $this->hasMany(Tweet::class);
    }
    public function loadUserMedia(): User
    {
        return $this->load('media');
    }
}
