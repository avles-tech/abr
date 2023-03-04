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

Route::get('/', 'PagesController@index');
Route::get('/About', 'PagesController@About');
Route::get('/Services', 'PagesController@Services');

Route::group(['prefix' => 'Services'], function () {
        Route::get('/New_Builds', [
            'uses' => 'PagesController@New_Builds',
            'as' => 'pages.services.New_Builds'
        ]);
        Route::get('/Loft_Conversions', [
            'uses' => 'PagesController@Loft_Conversions',
            'as' => 'pages.services.Loft_Conversions'
        ]);
        Route::get('/House_Extensions', [
            'uses' => 'PagesController@House_Extensions',
            'as' => 'pages.services.House_Extensions'
        ]);
        Route::get('/Full_House_Renovations', [
            'uses' => 'PagesController@Full_House_Renovations',
            'as' => 'pages.services.Full_House_Renovations'
        ]);
        Route::get('/Kitchen', [
            'uses' => 'PagesController@Kitchen',
            'as' => 'pages.services.Kitchen'
        ]);
        Route::get('/Bathroom', [
            'uses' => 'PagesController@Bathroom',
            'as' => 'pages.services.Bathroom'
        ]);
        Route::get('/Roofing', [
            'uses' => 'PagesController@Roofing',
            'as' => 'pages.services.Roofing'
        ]);
        Route::get('/Painting', [
            'uses' => 'PagesController@Painting',
            'as' => 'pages.services.Painting'
        ]);
        Route::get('/Plumbing', [
            'uses' => 'PagesController@Plumbing',
            'as' => 'pages.services.Plumbing'
        ]);
        Route::get('/Electrical_Work', [
            'uses' => 'PagesController@Electrical_Work',
            'as' => 'pages.services.Electrical_Work'
        ]);
});
Route::group(['prefix' => 'Portfolio'], function () {
        Route::get('/New_Builds', [
            'uses' => 'PagesController@P_New_Builds',
            'as' => 'pages.portfoilo.New_Builds'
        ]);
        Route::get('/Loft_Conversions', [
            'uses' => 'PagesController@P_Loft_Conversions',
            'as' => 'pages.portfoilo.Loft_Conversions'
        ]);
        Route::get('/House_Extensions', [
            'uses' => 'PagesController@P_House_Extensions',
            'as' => 'pages.portfoilo.House_Extensions'
        ]);
        Route::get('/Full_House_Renovations', [
            'uses' => 'PagesController@P_Full_House_Renovations',
            'as' => 'pages.portfoilo.Full_House_Renovations'
        ]);
        Route::get('/Kitchen', [
            'uses' => 'PagesController@P_Kitchen',
            'as' => 'pages.portfoilo.Kitchen'
        ]);
        Route::get('/Bathroom', [
            'uses' => 'PagesController@P_Bathroom',
            'as' => 'pages.portfoilo.Bathroom'
        ]);
        Route::get('/Roofing', [
            'uses' => 'PagesController@P_Roofing',
            'as' => 'pages.portfoilo.Roofing'
        ]);
        Route::get('/Painting', [
            'uses' => 'PagesController@P_Painting',
            'as' => 'pages.portfoilo.Painting'
        ]);
        Route::get('/Plumbing', [
            'uses' => 'PagesController@P_Plumbing',
            'as' => 'pages.portfoilo.Plumbing'
        ]);
        Route::get('/Electrical_Work', [
            'uses' => 'PagesController@P_Electrical_Work',
            'as' => 'pages.portfoilo.Electrical_Work'
        ]);
});
Route::get('/Contact', 'PagesController@Contact');
Route::post('/Contact', 'PagesController@postContact');
Route::get('/Quote', 'PagesController@Quote');
Route::get('/Portfolio', 'PagesController@Portfolio');

