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

use App\Http\Controllers\PagesController;

Route::get('/', 'PagesController@index');

Route::get('/about-us', 'PagesController@about');

Route::get('/contact-us', 'PagesController@contact');

Route::get('/download', 'PagesController@downloads');

Route::get('/news-events', 'PagesController@news');

Route::get('/partners', 'PagesController@partners');

Route::get('/customers', 'PagesController@customers');

Route::get('/product', 'PagesController@product');

Route::get('/product-detail/{id}', 'PagesController@productDetail');

Route::post('/send-mail/query', 'PagesController@sendMail');

Route::post('/send-contact/contact', 'PagesController@sendContactMail');


Route::resource('admin/testimonials','TestimonialsController');

Route::get('admin/testimonials/{id}/delete','TestimonialsController@destroy');

Route::resource('admin/downloads','DownloadsController');

Route::get('admin/downloads/{id}/delete','DownloadsController@destroy');

Route::resource('admin/download-category','DownloadCategoriesController');

Route::get('admin/download-category/{id}/delete','DownloadCategoriesController@destroy');

Route::resource('admin/product','ProductsController');

Route::get('admin/product/{id}/delete','ProductsController@destroy');

Route::resource('admin/product-category','ProductCategoriesController');

Route::get('admin/product-category/{id}/delete','ProductCategoriesController@destroy');

Route::resource('admin/company','CompaniesController');

Route::get('admin/company/{id}/delete','CompaniesController@destroy');

Route::resource('admin/promotion','PromotionsController');

Route::get('admin/promotion/{id}/delete','PromotionsController@destroy');

Route::resource('admin/news','NewsController');

Route::get('admin/news/{id}/delete','NewsController@destroy');
