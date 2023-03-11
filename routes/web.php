<?php

use Illuminate\Support\Facades\Route;
use App\Models\Train;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Carbon;

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

Route::get('/', function (Request $request) {
    $trains = Train::all();
    return view('index', ['trains' => $trains]);
});

Route::get('/', [HomeController::class, 'index']);
