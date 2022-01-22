<?php

use Illuminate\Support\Facades\Route;


Route::group(
    [
        'prefix' => \App\Service\Localization\Localization::locale(),
        'middleware' => 'setLocale'
    ],
    function () {
        Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])
            ->name('index');

        Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])
            ->name('blog');

        Route::get('/feedback', [\App\Http\Controllers\FeedBackController::class, 'index'])
            ->name('feedback.index');

        Route::post('/feedback', [\App\Http\Controllers\FeedBackController::class, 'send'])
            ->name('feedback.send');

    }

);
