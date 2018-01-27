<?php

use Illuminate\Session\TokenMismatchException;



/**
 * list of pages
 */
Route::group(['middleware' => ['web']], function () {

    Route::group(['middleware' => ['admin_logged', 'can_see', 'in_context'],
                  'namespace' => 'Foostart\Front\Controllers\Admin',
        ], function () {

        /*
          |-----------------------------------------------------------------------
          | Manage front
          |-----------------------------------------------------------------------
          | 1. List of fronts
          | 2. Edit front
          | 3. Delete front
          | 4. Add new front
          | 5. Manage configurations
          | 6. Manage languages
          |
        */

        /**
         * list
         */
        Route::get('admin/fronts/list', [
            'as' => 'fronts.list',
            'uses' => 'FrontAdminController@index'
        ]);

        

    });
});
