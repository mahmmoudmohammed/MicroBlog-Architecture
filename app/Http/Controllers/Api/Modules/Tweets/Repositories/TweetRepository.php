<?php

namespace App\Http\Controllers\Api\Modules\Tweets\Repositories;

use App\Http\Controllers\Api\Modules\Tweets\Interfaces\TweetInterface;
use App\Http\Controllers\Api\Modules\Tweets\Models\Tweet;
use App\Http\Controllers\Api\Modules\BaseRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Throwable;
use Illuminate\Database\Eloquent\Model;

class TweetRepository extends BaseRepository implements TweetInterface
{
    protected function model(): string
    {
        return Tweet::class;
    }

    /**
     * @return false|LengthAwarePaginator
     */
    public function list(): LengthAwarePaginator|false
    {
        try {
            $followedUsers = auth()->user()->following()->pluck('users.id');
            return Tweet::with('user')->whereIn('user_id', $followedUsers)
                ->latest()
                ->paginate($this::paginationLimit(request('per_page', config('app.pagination'))));
        } catch (Throwable $e) {
            report($e);
            return false;
        }
    }

    public function create($data): bool|Model
    {
        $data['user_id'] = auth()->user()->id ?: $data['user_id'];
        $tweet = parent::create($data);
        return !$tweet ? false : $tweet->load('user');
    }

}
