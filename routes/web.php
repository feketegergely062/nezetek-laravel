<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NezetController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get( "/nezet", [ NezetController::class, "getView" ]);
Route::get( "/parameter/{name}",function($name){
    return view("para",["name" => $name]);
});

Route::get("/param/{name}/{age}", function($name,$age){

    $datas=[
        "name" => $name,
        "age" => $age
    ];

    return view("para",$datas);
});