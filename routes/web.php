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
    return view('home');
});

Route::get('/contact', function () {
    $contacts = [
        [
            "nama" => "gebi",
            "no.hp" => "0928837"
        ],
        [
            "nama" => "samson",
            "no.hp" => "0238728"
        ],
        [
            "nama" => "alya",
            "no.hp" => "7387828"
        ],
        [
            "nama" => "jeje",
            "no.hp" => "73823837"
        ]
    ];
    return view('contact', [
        "judul" => $contacts
    ]);
});