<?php

use Illuminate\Session\TokenMismatchException;

Route::group(['middleware' => ['web']], function () {
    Route::group(['middleware' => [],
        'namespace' => 'Foostart\Front\Controllers',
            ], function () {
        Route::get('/install-blocks', [
            'as' => 'install-block',
            'uses' => 'HomeController@installBlocks'
        ]);
    });
});


/**
 * List of pages
 */
Route::group(['middleware' => ['web']], function () {

    Route::group(['middleware' => [],
        'namespace' => 'Foostart\Front\Controllers',
            ], function () {

        /*
          |-----------------------------------------------------------------------
          | List of pages
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
         */

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
        Route::get('/about', [
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
        Route::get('/blog-detail', [
            'as' => 'blog-detail',
            'uses' => 'BlogDetailController@index'
        ]);

        /**
         * Contact
         */
        Route::get('/contact', [
            'as' => 'contact',
            'uses' => 'ContactController@index'
        ]);

        /**
         * Course
         */
        Route::get('/course', [
            'as' => 'course',
            'uses' => 'CourseController@index'
        ]);

        /**
         * Course detail
         */
        Route::get('/course-detail', [
            'as' => 'course-detail',
            'uses' => 'CourseDetailController@index'
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
        Route::get('/event', [
            'as' => 'event',
            'uses' => 'EventController@index'
        ]);

        /**
         * Event detail
         */
        Route::get('/event-detail', [
            'as' => 'event-detail',
            'uses' => 'EventDetailController@index'
        ]);

        /**
         * Faq
         */
        Route::get('/faq', [
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
        Route::get('/lesson', [
            'as' => 'lesson',
            'uses' => 'LessonController@index'
        ]);

        /**
         * News
         */
        Route::get('/news', [
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
        Route::get('/service', [
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

    });
});
