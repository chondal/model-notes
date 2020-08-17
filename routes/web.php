<?php

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::group(['namespace' => 'Chondal\ModelNotes\Http\Controllers'], function () {
        Route::post('/notes/add/{model}/{id}', 'NoteController@store')
            ->name('modelNotes.store');

        Route::post('/notes/destroy/{note}', 'NoteController@destroy')
            ->name('modelNotes.destroy');
    });
});
