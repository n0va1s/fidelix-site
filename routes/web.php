<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', ['uses' => 'SiteController@home'])->name('site.home');
Route::get('/cliente', ['uses' => 'SiteController@client'])->name('site.client');
Route::get('/contato', ['uses' => 'SiteController@contact'])->name('site.contact');
Route::get('/produto', ['uses' => 'SiteController@product'])->name('site.product');
Route::post('/obrigado', ['uses' => 'SiteController@lead'])->name('site.lead');
Route::post('/enviada', ['uses' => 'SiteController@message'])->name('site.message');
