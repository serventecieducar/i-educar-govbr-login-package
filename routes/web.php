<?php

use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function (): void {
    Route::get('/auth/govbr/redirect', static function () {
        abort(501, 'Fluxo gov.br ainda será implementado.');
    })->name('auth.govbr.redirect');

    Route::get('/auth/govbr/callback', static function () {
        abort(501, 'Callback gov.br ainda será implementado.');
    })->name('auth.govbr.callback');
});

