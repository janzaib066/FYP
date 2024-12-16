<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' =>'App\Http\Controllers' ], function() {

    Route::get('/', [

        'uses' => 'WebsiteController@index',
        'as' => 'index'

    ]);

    Route::get('/about', [

        'uses' => 'WebsiteController@about',
        'as' => 'about'

    ]);

    Route::get('/contact', [

        'uses' => 'WebsiteController@contact',
        'as' => 'contact'

    ]);

    Route::post('/contact/submitquery', [

        'uses' => 'WebsiteController@submitquery',
        'as' => 'submitquery'

    ]);

    Route::get('/faqs', [

        'uses' => 'WebsiteController@faqs',
        'as' => 'faqs'

    ]);

    Route::get('/login', [

        'uses' => 'WebsiteController@login',
        'as' => 'login'

    ]);

    Route::post('/check-login', [

        'uses' => 'WebsiteController@checklogin',
        'as' => 'checklogin'

    ]);

    Route::get('/register', [

        'uses' => 'WebsiteController@register',
        'as' => 'register'

    ]);

    Route::post('/create-account', [

        'uses' => 'WebsiteController@createaccount',
        'as' => 'createaccount'

    ]);

    Route::get('/trips', [

        'uses' => 'WebsiteController@trips',
        'as' => 'trips'

    ]);

    Route::get('/tripe/{id}', [

        'uses' => 'WebsiteController@tripsingle',
        'as' => 'tripsingle'

    ]);

    Route::get('/trip/favorite/{trip_id}/{driver_id}', [

        'uses' => 'WebsiteController@addtofavorite',
        'as' => 'addtofavorite'

    ]);

    Route::post('/make-booking', [

        'uses' => 'BookingController@makebooking',
        'as' => 'makebooking'

    ]);

    Route::get('/driver-dashboard', [

        'uses' => 'DashboardController@index',
        'as' => 'driverdashboard'

    ]);

    Route::get('/driver-dashboard/bookings', [

        'uses' => 'DashboardController@driverbookings',
        'as' => 'driverbookings'

    ]);

    Route::get('/driver-dashboard/bookings/change-status/{booking_id}/{status}', [

        'uses' => 'DashboardController@changetripstatus',
        'as' => 'changetripstatus'

    ]);

    Route::get('/dashboard/logout', [

        'uses' => 'DashboardController@logout',
        'as' => 'logout'

    ]);

    Route::get('/driver-dashboard/my-cars', [

        'uses' => 'CarController@index',
        'as' => 'mycars'

    ]);

    Route::get('/driver-dashboard/my-cars/create', [

        'uses' => 'CarController@create',
        'as' => 'createcars'

    ]);

    Route::post('/driver-dashboard/my-cars/create/save', [

        'uses' => 'CarController@save',
        'as' => 'savecar'

    ]);

    Route::get('/driver-dashboard/my-cars/edit/{id}', [

        'uses' => 'CarController@edit',
        'as' => 'editcar'

    ]);

    Route::get('/driver-dashboard/my-cars/edit/remove-gallery/{id}', [

        'uses' => 'CarController@removegallery',
        'as' => 'removegallery'

    ]);

    Route::post('/driver-dashboard/my-cars/update', [

        'uses' => 'CarController@update',
        'as' => 'updatecar'

    ]);

    Route::get('/driver-dashboard/my-cars/remove/{id}', [

        'uses' => 'CarController@destroy',
        'as' => 'removecar'

    ]);

    Route::get('/driver-dashboard/my-trips', [

        'uses' => 'TripController@index',
        'as' => 'mytrips'

    ]);

    Route::get('/driver-dashboard/my-trips/create', [

        'uses' => 'TripController@create',
        'as' => 'createtrip'

    ]);

    Route::post('/driver-dashboard/my-trips/save', [

        'uses' => 'TripController@save',
        'as' => 'savetrip'

    ]);

    Route::get('/driver-dashboard/my-trips/edit/{id}', [

        'uses' => 'TripController@edit',
        'as' => 'edittrip'

    ]);

    Route::post('/driver-dashboard/my-trips/update', [

        'uses' => 'TripController@update',
        'as' => 'updatetrip'

    ]);

    Route::get('/driver-dashboard/my-trips/remove/{id}', [

        'uses' => 'TripController@destroy',
        'as' => 'removetripe'

    ]);

    Route::get('/driver-dashboard/messages', [

        'uses' => 'MessageController@drivermessages',
        'as' => 'drivermessages'

    ]);

    Route::get('/driver-dashboard/messages/{id}', [

        'uses' => 'MessageController@messagepassenger',
        'as' => 'messagepassenger'

    ]);

    Route::post('/driver-dashboard/messages/senddrivermessage', [

        'uses' => 'MessageController@senddrivermessage',
        'as' => 'senddrivermessage'

    ]);

    // Passenger Routes

    Route::get('/dashboard', [

        'uses' => 'DashboardController@passengerdashboard',
        'as' => 'passengerdashboard'

    ]);

    Route::get('/dashboard/bookings', [

        'uses' => 'DashboardController@bookings',
        'as' => 'bookings'

    ]);





    Route::get('/dashboard/messages', [

        'uses' => 'MessageController@messages',
        'as' => 'messages'

    ]);

    Route::get('/dashboard/messages/{id}', [

        'uses' => 'MessageController@messageseller',
        'as' => 'messageseller'

    ]);

    Route::post('/dashboard/messages/sendcustomermessage', [

        'uses' => 'MessageController@sendcustomermessage',
        'as' => 'sendcustomermessage'

    ]);







    Route::get('/dashboard/favorites', [

        'uses' => 'DashboardController@favorites',
        'as' => 'favorites'

    ]);

    Route::get('/dashboard/favorites/remove/{id}', [

        'uses' => 'DashboardController@removetripfromfavorite',
        'as' => 'removetripfromfavorite'

    ]);

    Route::get('/dashboard/profile', [

        'uses' => 'DashboardController@profile',
        'as' => 'profile'

    ]);

    Route::post('/dashboard/profile/update', [

        'uses' => 'DashboardController@updateprofile',
        'as' => 'updateprofile'

    ]);

    // Admin Routes

    Route::get('/admin/login', [

        'uses' => 'Admin\AdminController@login',
        'as' => 'adminlogin'

    ]);

    Route::post('/admin/login/check', [

        'uses' => 'Admin\AdminController@checkadminlogin',
        'as' => 'checkadminlogin'

    ]);

    Route::get('/admin/logout', [

        'uses' => 'Admin\AdminController@adminlogout',
        'as' => 'adminlogout'

    ]);

    Route::get('/admin/index', [

        'uses' => 'Admin\AdminController@index',
        'as' => 'adminindex'

    ]);

    Route::get('/admin/cars', [

        'uses' => 'Admin\CarsController@index',
        'as' => 'admincarsindex'

    ]);

    Route::get('/admin/trips', [

        'uses' => 'Admin\TripController@index',
        'as' => 'admintripindex'

    ]);

    Route::get('/admin/bookings', [

        'uses' => 'Admin\BookingController@index',
        'as' => 'adminbookingindex'

    ]);

    Route::get('/admin/bookings/detail/{id}', [

        'uses' => 'Admin\BookingController@detail',
        'as' => 'bookingdetail'

    ]);

    Route::get('/admin/users', [

        'uses' => 'Admin\UsersController@index',
        'as' => 'adminusersindex'

    ]);

    Route::get('/admin/faqs', [

        'uses' => 'Admin\FaqController@index',
        'as' => 'adminfaqindex'

    ]);

    Route::get('/admin/faqs/create', [

        'uses' => 'Admin\FaqController@create',
        'as' => 'adminaddfaq'

    ]);

    Route::post('/admin/faqs/save', [

        'uses' => 'Admin\FaqController@save',
        'as' => 'admincreatefaq'

    ]);

    Route::get('/admin/faqs/edit/{id}', [

        'uses' => 'Admin\FaqController@edit',
        'as' => 'admineditfaq'

    ]);

    Route::post('/admin/faqs/update', [

        'uses' => 'Admin\FaqController@update',
        'as' => 'adminupdatefaq'

    ]);

    Route::get('/admin/faqs/delete/{id}', [

        'uses' => 'Admin\FaqController@destroy',
        'as' => 'admindeletefaq'

    ]);

    Route::get('/admin/contact-queries', [

        'uses' => 'Admin\ContactQueryController@index',
        'as' => 'admincontactqueriesindex'

    ]);

    Route::get('/admin/contact-queries/remove/{id}', [

        'uses' => 'Admin\ContactQueryController@destroy',
        'as' => 'adminremovequery'

    ]);

    Route::get('/admin/my-profile', [

        'uses' => 'Admin\AdminController@profile',
        'as' => 'adminprofileindex'

    ]);

    Route::post('/admin/my-profile/update', [

        'uses' => 'Admin\AdminController@adminupdateprofile',
        'as' => 'adminupdateprofile'

    ]);

});