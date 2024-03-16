<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Traits\ApiDesignTrait;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    use ApiDesignTrait;
    //TODO:: use HasPermissionTrait;
}
