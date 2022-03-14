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

Route::get('/', function () {

    $homepage = "Benvenuti nella HOMEPAGE";

    return view('home', compact('homepage'));
})->name('home');

Route::get('/products', function () {

    $products = "Benvenuti nella sezione PRODOTTI";
    $data = [
        'product_list' => ['lorem', 'ipsum', 'dolor', 'sit'],
    ];

    return view('products', compact('products'), $data);
})->name('products');

Route::get('/contacts', function () {

    $contacts = "Benvenuti nella sezione CONTATTI";
    $data = [
        'name' => 'Lorem',
        'surname' => 'Ipsum'
    ];

    return view('contacts', compact('contacts'), $data);
})->name('contacts');
