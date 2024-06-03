<?php

use Illuminate\Support\Facades\Route;
use Spatie\Image\Enums\CropPosition;
use Spatie\Image\Image;

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
    Image::load('storage/test.png')->crop(614, 853,CropPosition::Center)->save('storage/cropped.png');
    return view('welcome');
});
