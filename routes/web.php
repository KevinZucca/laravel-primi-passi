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

    $introduction = "That's a new Laravel project";
    $toDo = [
        "Drink a coffee",
        "Take a breath",
        "Start coding"
    ];


    return view('home', compact('introduction', 'toDo'));
});
