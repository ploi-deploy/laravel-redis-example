<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    try {
        $redis = \Illuminate\Support\Facades\Redis::connect(config('database.redis.default.host'), config('database.redis.default.port'));

        return 'Redis is available';
    } catch (\Exception $e) {
        return 'Redis is not available';
    }
});
