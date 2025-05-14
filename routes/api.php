<?php

use Illuminate\Support\Facades\Route;

Route::middleware([])->group(function () {
    $noAuthRoutes = glob(__DIR__ . "/free-route/*.php");
    foreach ($noAuthRoutes as $noAuthRoute) {
        Route::group([], $noAuthRoute);
    }
});

Route::middleware(['auth:sanctum'])->group(function () {
    $authRoutes = glob(__DIR__ . "/authenticated/*.php");
    foreach ($authRoutes as $authRoute) {
        Route::group([], $authRoute);
    }
});
