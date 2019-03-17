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
| 02. About
| 03. Blog
| 04. Blog detail
| 05. Contact
| 06. Course
| 07. Course detail
| 08. Edit profile
| 09. Error
| 10. Event
| 11. Event detail
| 12. Faq
| 13. Gallery
| 14. Lessons
| 15. News
| 16. Teachers
| 17. Services
| 18. Signin
| 19. Student login
| 20. Student profile
| 21. Teacher profile
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
         * Detail
         */
        Route::get('/detail', [
            'as' => 'detail',
            'uses' => 'DetailController@index'
        ]);
        /**
         * Checklist
         */
        Route::get('/checklist', [
            'as' => 'checklist',
            'uses' => 'DetailController@index'
        ]);

    });
});