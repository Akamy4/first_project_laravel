<?php
use App\Http\Controllers\MyUniversityController;
use App\Http\Controllers\MyContactController;
use App\Http\Controllers\MyPlaceController;
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
    return view('welcome');
});
Route::get('/my_page', [MyPlaceController::class, 'index']);
Route::get('/name', [MyContactController::class, 'name']);
Route::get('/surname', [MyContactController::class, 'surname']);
Route::get('/number', [MyContactController::class, 'number']);
Route::get('/university', [MyUniversityController::class, 'univer']);
Route::get('/speciality', [MyUniversityController::class, 'speciality']);


// Route::get('/name', function () {
//     return 'Abdrakhman';
// });

// Route::get('/surname', function () {
//     return 'Aznabakiev';
// });

// Route::get('/number', function () {
//     return '8-747-32-32-110';
// });

// Route::get('/city', function () {
//     return 'Almaty';
// });

// Route::get('/university', function () {
//     return 'UIB';
// });

// Route::get('/hobby', function () {
//     return 'meditation';
// });

// Route::get('/games', function () {
//     return 'League of Legends and Valorant';
// });
