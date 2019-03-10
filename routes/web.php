<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use Illuminate\Support\Facades\Route;

//User Route
Route::get('/', 'Frontend\HomeController@index')->name('homeIndex');
Route::get('track', 'Frontend\HomeController@track')->name('hometrack');
Route::get('confirm', 'Frontend\HomeController@confirm')->name('homeconfirm');
Route::get('company', 'Frontend\HomeController@company')->name('homecompany');
Route::get('faq', 'Frontend\HomeController@faq')->name('homefaq');
Route::get('contact-us', 'Frontend\HomeController@contactUs')->name('homeContactUs');
Route::get('progress', 'Frontend\HomeController@progress')->name('homeprogress');
Route::get('invalid-tracking-number', 'Frontend\HomeController@invalid')->name('homeInvalid');
Route::get('send-parcel', 'Frontend\HomeController@delivery')->name('homeDelivery');
Route::post('send', 'Frontend\HomeController@store')->name('homeStore');
Route::get('details', 'Frontend\HomeController@details')->name('homeDetails');



//Shipment Route
Route::get('/cpanel', 'DashboardController@index')->name('cpanel');
Route::get('shipment', 'ShippingController@index')->name('shipment');
Route::post('add-shipment', 'ShippingController@store')->name('store.shipment');
Route::get('shipment/{id}/edit', 'ShippingController@updateShipment')->name('updateShipment');
Route::PUT('shipment/{id}', 'ShippingController@update')->name('update');
Route::delete('destroyshipment/{id}', 'ShippingController@destroyShipment')->name('destroyShipment');

//Tracking Route
Route::get('tracking', 'TrackingController@tracking')->name('view.tracking');
Route::get('tracking/{id}', 'TrackingController@index')->name('tracking');
Route::post('add-tracking', 'TrackingController@create')->name('create_tracking');

//Shipping Type
Route::get('add-shipping-type', 'DashboardController@shippingType')->name('shippingType');
Route::post('create-shipping-type', 'DashboardController@createShipping')->name('createShipping');
Route::get('shipping-type/{id}/edit', 'DashboardController@editShipping')->name('editShipping');
Route::put('update-shipping-type/{id}', 'DashboardController@updateShipping')->name('updateShipping');
Route::get('list-shipping-type', 'DashboardController@shippinglist')->name('shippinglist');
Route::delete('destroyType/{id}', 'DashboardController@destroyType')->name('destroyType');


//Transport Mode
Route::get('add-transport-mode', 'DashboardController@addTransport')->name('addTransport');
Route::post('create-transport-mode', 'DashboardController@createTransport')->name('createTransport');
Route::get('transport-mode/{id}/edit', 'DashboardController@editTransport')->name('editTransport');
Route::put('update-transport-mode/{id}', 'DashboardController@updateTransport')->name('updateTransport');
Route::get('list-transport-mode', 'DashboardController@listTransport')->name('listTransport');
Route::delete('destroyTransport/{id}', 'DashboardController@destroyTransport')->name('destroyTransport');

//Mailable Route
Route::get('client-list', 'SendQuoteController@client')->name('client');
Route::get('mail-form/{id}/view', 'SendQuoteController@mailForm')->name('mailForm');
Route::post('send-mail', 'SendQuoteController@sendMail')->name('sendMail');

//Admin Route
Route::get('admin-login', 'adminAuth\Auth\LoginController@showLoginForm')->name('adminView');
Route::post('admin-login', 'adminAuth\Auth\LoginController@login')->name('adminLogin');
Route::post('admin-logout', 'adminAuth\Auth\LoginController@logout')->name('adminLogout');
Route::get('admin-register', 'adminAuth\Auth\RegisterController@showRegistrationForm')->name('adminViewReg');
Route::post('admin-register', 'adminAuth\Auth\RegisterController@register')->name('adminRegister');

//Manage Admin
Route::get('add-new-admin', 'AdminController@viewAdmin')->name('viewAdmin');
Route::post('store-new-admin', 'AdminController@storeAdmin')->name('storeAdmin');
Route::get('admin/{id}/edit', 'AdminController@editAdmin')->name('editAdmin');
Route::put('update-admin/{id}', 'AdminController@updateAdmin')->name('updateAdmin');
Route::get('admin-list', 'AdminController@adminList')->name('adminList');
Route::delete('destroy/{id}', 'AdminController@destroy')->name('adminDestroy');

// Countries, States, Cities Dropdown
Route::get('dropdownlist','DropdownController@index');
Route::get('get-state-list','DropdownController@getStateList');
Route::get('get-city-list','DropdownController@getCityList');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



