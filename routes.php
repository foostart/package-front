<?php

use Illuminate\Session\TokenMismatchException;

Route::group(['middleware' => ['web']], function () {
    Route::group(['middleware' => [],
        'namespace' => 'Foostart\Front\Controllers',
            ], function () {
        //Install blocks
        Route::get('/install-blocks', [
            'as' => 'install-block',
            'uses' => 'HomeController@installBlocks'
        ]);
        Route::get('/convert', [
            'as' => 'convert',
            'uses' => 'HomeController@convertLESS2CSS'
        ]);
        //Demo
        Route::get('/demo', [
            'as' => 'demo',
            'uses' => 'FrontController@demo'
        ]);

    });
});


/*
|-----------------------------------------------------------------------
| MAIN PAGES
|-----------------------------------------------------------------------
| 01. Home
| 02. Checklist
| 03. Item
|
*/
Route::group(['middleware' => ['web']], function () {

    Route::group(['middleware' => [],
        'namespace' => 'Foostart\Front\Controllers',
            ], function () {

        $route_exceptions = [
            'login',
            'laravel-filemanager',
        ];
        $temp = implode('|', $route_exceptions);

        /**
         * Home
         */
        Route::get('/', [
            'as' => 'home',
            'uses' => 'HomeController@index'
        ]);

        /**
         * Item
         */
        Route::get('/item/{name}-{id}', [
            'as' => 'item',
            'uses' => 'ItemController@index'
        ])->where(['name' => '[a-zA-Z0-9-_]+','id' => '[0-9]+']);

        /**
         * Checklist
         */
        Route::get('/checklist/{name}-{id}', [
            'as' => 'checklist',
            'uses' => 'ChecklistController@index'
        ])->where(['name' => '[a-zA-Z0-9-_]+','id' => '[0-9]+']);

        /**
         * Search
         */
        Route::get('/search/{keyword?}', [
            'as' => 'search',
            'uses' => 'SearchController@index'
        ])->where(['keyword' => '[a-zA-Z0-9-_]+']);

    });
});