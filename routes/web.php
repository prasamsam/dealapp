<?php
Route::group(['namespace' => 'back'], function () {
    Route::get('/admin_login', 'DashboardController@logIn')->name('admin_login');
    Route::post('/admin_login', 'DashboardController@logInAction');

    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', 'DashboardController@adminPanelHome')->name('admin_dashboard');
        Route::get('product', 'DashboardController@addVendor')->name('add_vendor');

        Route::group(['prefix' => 'user'], function () {
            Route::get('users', 'UserController@usersDetails')->name('users_info');
        });

    });

    Route::group(['prefix' => 'vendor'], function () {
        Route::get('/', 'VendorController@myProducts')->name('vendor_products');
        Route::get('add', 'VendorController@addProduct')->name('add_vendor_products');
        Route::post('add', 'VendorController@addProductsAction')->name('add_vendor_products');

    });

});






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
