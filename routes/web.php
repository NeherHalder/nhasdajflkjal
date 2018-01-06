<?php

use App\Application;
Route::get('/',"PublicController@index");


Route::resource('applications', 'ApplicationController');

Route::get('/login', function () {
    return redirect('login');
});
Route::get('/project-management/test', function () {
    return view('test');
});
Route::get('/project-management/project', function () {
   return view('project');
});

/**
 * Authentication Routes
 */
Route::group(['namespace' => 'Auth'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('login', 'LoginController@showLoginForm')->name('login');
        Route::post('login', 'LoginController@login')->name('login');
    });
    Route::post('logout', 'LoginController@logout')->name('logout')->middleware('auth');
});

/**
 * Admin Routes
 */
Route::group(['namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');
    // Software Settings
    Route::group(['prefix' => 'settings', 'namespace' => 'Settings'], function () {
        Route::get('/users/toggle/{user}', 'UsersController@destroy')->name('settings.users.destroy');
        Route::resource('/users', 'UsersController', ['as' => 'settings', 'except' => 'destroy']);

        Route::resource('/roles', 'RolesController', ['as' => 'settings']);

        Route::resource('/projects', 'ProjectsController', ['as' => 'settings']);

        Route::resource('/sectors', 'SectorController' , ['as' => 'settings']);

        Route::resource('/year-of-finances', 'YearOfFinanceController' , ['as' => 'settings']);

        Route::resource('/office', 'OfficeController' , ['as' => 'settings']);
    });

    // Project Management
    Route::get('/project-management', 'ProjectManagementController@index')->name('projectmgt.index');
    Route::get('/project-management/{project}', 'ProjectManagementController@show')->name('projectmgt.show');
    Route::get('/project-management/{project}', 'ProjectManagementController@show')->name('projectmgt.show');
    Route::get('project-management/lottery/{project}/edit', 'LotteryManagementController@edit')->name('lottery.edit');
    Route::post('project-management/lottery/create', 'LotteryManagementController@create')->name('lottery.create');
    Route::get('project-management/lottery/winners/{project}', 'LotteryManagementController@index')->name('lottery.winners');

    //Accounts
     Route::get('/paymnt-statement', 'PaymentController@index');

    

    // Notifications
    Route::get('/notifications', 'NotificationsController@index')->name('notifications.index');
    Route::get('/test', function(){
        dd('Ok');
    });

    // Manage Lottery
   Route::post('project-management/lottery/create', 'LotteryManagementController@create')->name('lottery.create');
});

Route::get('/profile','ProfileController@index');
Route::get('/profile/edit','ProfileController@edit');
Route::post('/profile/edit','ProfileController@update');

