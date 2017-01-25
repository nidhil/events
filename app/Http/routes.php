<?php


Route::get('/u', 'EventController@upcomingEvent');
Route::get('search', 'SearchController@index');
Route::group(['middleware' => ['web']], function () {
    Route::get('quantity', 'BookingController@getQuantity');
    Route::post('checkout', 'BookingController@checkout');

    //Routes for the user controller
    Route::group(['prefix' => 'user/{id}/'], function () {
        Route::get('myorder', 'UserController@getOrders');
        Route::get('myevents', 'UserController@getEvents');
    });

      //Route for event registrations

    //Route::get('register/checkout','BookingController@getCheckout');
    //routes for the event
    Route::post('eventup','EventController@newEvent');
    Route::get('event/category/{category}','EventController@getEventsCategory');
    Route::resource('event', 'EventController');
    });

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::get('register/confirm/{token}', 'Auth\AuthController@confirmEmail');
    Route::get('/', function () {
        return view('Events.home');
    });
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/', 'AdminController@index');
        Route::get('events', 'AdminController@myEvents');
        Route::get('event/{id}/edit','AdminController@getEditEvent');
        });


});


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::get('eventup', function(){
        return view('eventup');
    });

    Route::get('afterlogin', function(){
        if(Auth::user()->hasRole('admin')){
            return redirect('admin/events');
        }
        else{
            return redirect('event');
        }
    });
});
