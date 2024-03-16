<?php

namespace App\Http\Controllers\Api\Modules;

use App\Exceptions\CustomValidationException;
use App\Http\Controllers\Api\Traits\ApiDesignTrait;
use Illuminate\Auth\Events\Logout;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

abstract  class BaseRepository
{
    use ApiDesignTrait;
    protected abstract function model ():string|Model;

    /**
     * @throws CustomValidationException
     */
    protected function login(string $guard, array $data): Model
    {

        $user = $this->model()::whereEmail($data['email'])->first();

        if (!$user || !Hash::check($data['password'], $user->password))
            $this->throwValidationException(__('auth.failed'));
        return $user;
    }

    /**
     * @throws CustomValidationException
     */
    protected function logout(string $guard = null): void
    {
        try {
            $user = auth($guard)->user();
            $user->currentAccessToken()->delete();
            event(new Logout($guard, $user));
        } catch (\Exception $e) {
            logger("Exception Error: while trying to logout in:".PHP_EOL." File".__FILE__ . " (Line: " . __LINE__ . ") ".PHP_EOL." {$e->getMessage()}");
            throw new CustomValidationException(__('error.logout_error'));
        }
    }
    public function create(array $data):model|bool
    {
        try {
            return $this->model()::create($data);
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }


    public function getById(int $id): model|bool
    {
        try {
            return $this->model()::where('id', $id)->first()?:false;
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }

    public function update(int $id, array $data): Model|bool
    {
        try {
            $model = $this->model()::findOrFail($id);
            $model->update($data);
            return $model->refresh();
        }
        catch (\Exception $e) {
            report($e);
            return false;
        }
    }

    public function delete(int $id): int|bool
    {
        try {
            return $this->model()::where('id', $id)->delete();
        } catch (\Exception $e) {
            report($e);
            return false;
        }
    }
    public static function paginationLimit($perPage, $minPerPage = 5, $maxPerPage = 100)
    {
        $perPage ??= 15;
        return max($minPerPage, min($maxPerPage, $perPage));
    }
}
