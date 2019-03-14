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
         * About
         */
        Route::get('/gioi-thieu', [
            'as' => 'about',
            'uses' => 'AboutController@index'
        ]);

        /**
         * Blog
         */
        Route::get('/blog', [
            'as' => 'blog',
            'uses' => 'BlogController@index'
        ]);

        /**
         * Blog detail
         */
        Route::get('/blog/{blog-detail}', [
            'as' => 'blog-detail',
            'uses' => 'BlogDetailController@index'
        ])->where(['blog-detail' => '[a-zA-Z0-9-_]+']);

        /**
         * Contact
         */
        Route::get('/lien-he', [
            'as' => 'contact',
            'uses' => 'ContactController@index'
        ]);

        /**
         * Edit profile
         */
        Route::get('/edit-profile', [
            'as' => 'edit-profile',
            'uses' => 'EditProfileController@index'
        ]);

        /**
         * Error
         */
        Route::get('/error', [
            'as' => 'error',
            'uses' => 'ErrorController@index'
        ]);

        /**
         * Event
         */
        Route::get('/su-kien', [
            'as' => 'event',
            'uses' => 'EventController@index'
        ]);

        /**
         * Event detail
         */
        Route::get('/su-kien/{event}', [
            'as' => 'event-detail',
            'uses' => 'EventDetailController@index'
        ])->where(['event' => '[a-zA-Z0-9-_]+']);

        /**
         * Faq
         */
        Route::get('/hoi-dap', [
            'as' => 'faq',
            'uses' => 'FaqController@index'
        ]);

        /**
         * Gallery
         */
        Route::get('/gallery', [
            'as' => 'gallery',
            'uses' => 'GalleryController@index'
        ]);

        /**
         * Lesson
         */
        Route::get('/khoa-hoc', [
            'as' => 'lesson',
            'uses' => 'LessonController@index'
        ]);

        /**
         * News
         */
        Route::get('/tin-tuc', [
            'as' => 'news',
            'uses' => 'NewsController@index'
        ]);

        /**
         * Teacher
         */
        Route::get('/teacher', [
            'as' => 'teacher',
            'uses' => 'TeacherController@index'
        ]);

        /**
         * Service
         */
        Route::get('/dich-vu', [
            'as' => 'service',
            'uses' => 'ServiceController@index'
        ]);

        /**
         * Signin
         */
        Route::get('/signin', [
            'as' => 'signin',
            'uses' => 'SigninController@index'
        ]);

        /**
         * Student login
         */
        Route::get('/student-login', [
            'as' => 'student-login',
            'uses' => 'StudentLoginController@index'
        ]);

        /**
         * Student profile
         */
        Route::get('/student-profile', [
            'as' => 'student-profile',
            'uses' => 'StudentProfileController@index'
        ]);


        /**
         * Teacher profile
         */
        Route::get('/teacher-profile', [
            'as' => 'teacher-profile',
            'uses' => 'TeacherProfileController@index'
        ]);

        /**
         * Our teacher
         */
        Route::get('/our-teacher', [
            'as' => 'our-teacher',
            'uses' => 'OurTeacherController@index'
        ]);

        /**
         * Course
         */
        Route::get('/{category}', [
            'as' => 'course',
            'uses' => 'CourseController@index'
        ])->where(['category' => '(?![^"]*('.$temp.')[^"]*)[a-zA-Z0-9-_]+']);

        /**
         * Course detail
         */
        Route::get('{category}/{post}-{id}', [
            'as' => 'course-detail',
            'uses' => 'CourseDetailController@index'
        ])->where(['category' => '[a-zA-Z0-9-_]+', 'post' => '[a-zA-Z0-9-_]+', 'id' => '[0-9]+']);

    });
});
