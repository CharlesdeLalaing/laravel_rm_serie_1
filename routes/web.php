<?php

use Hamcrest\Type\IsInteger;
use Hamcrest\Type\IsNumeric;
use Illuminate\Support\Facades\Route;

use function PHPSTORM_META\type;

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

Route::get('/charles', function () {
    return view('charles');
});


Route::get('/{var}', function ($text) {
    if (is_numeric($text)) {
        $muliply = 4 * $text;
        return '4 * ' . $text . ' = ' . $muliply;
    } else {
        return 'impossible equation';
    }
});
