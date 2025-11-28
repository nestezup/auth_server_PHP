<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

Route::get('/', function () {
    try {
        DB::connection()->getPdo();
        $dbStatus = 'connected';
    } catch (\Exception $e) {
        $dbStatus = 'disconnected';
    }

    try {
        Redis::ping();
        $redisStatus = 'connected';
    } catch (\Exception $e) {
        $redisStatus = 'disconnected';
    }

    return response()->json([
        'status' => 'ok',
        'service' => 'Auth Server',
        'timestamp' => now()->toIso8601String(),
        'database' => $dbStatus,
        'redis' => $redisStatus,
    ]);
});
