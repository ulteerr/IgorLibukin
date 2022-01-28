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

        Route::get('/contacts', [\App\Http\Controllers\FeedBackController::class, 'index'])
            ->name('contacts.index');

        Route::post('/contacts', [\App\Http\Controllers\FeedBackController::class, 'send'])
            ->name('contacts.send');

        Route::get('/order', [\App\Http\Controllers\OrderController::class, 'index'])
            ->name('order.index');
        Route::get('/order/multi-page', [\App\Http\Controllers\OrderController::class, 'multiPage'])
            ->name('order.multi-page');
    }

);
