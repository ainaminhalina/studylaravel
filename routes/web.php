<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
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


// Route::get('user', function () {
//     echo "Hello";
// });

// Route::get('user/{id}', function ($id) {
//     echo "Hello " . $id;
// });

// Route::get('user/admin/{id}/{id2?}', function ($id, $id2 = "") {
//     echo "Hello " . $id . '</br>';
//     echo "Hello " . $id2 . '</br>';
// });

// Route::prefix('teachers')->group(function () {
//     Route::get('/users', function () {
//         echo "HELLO USERS";
//     });

//     Route::get('/admins', function () {
//         echo "HELLO ADMINS";
//     });
// });

// Route::get('/user', [UserController::class, 'index']);

// Route::get('/admin', [UserController::class, 'display']);

// Route::get('/admin/{id}', [UserController::class, 'id']);

// Route::get('/customer/{id}/{id2?}', [UserController::class, 'optional']);

// Route::get('/displayuser', [UserController::class, 'displayuser']);

Route::prefix('customers')->group(function () {
        Route::get('/', [CustomerController::class, 'index']);
        Route::get('display/{id}', [CustomerController::class, 'display']);
        Route::get('create', [CustomerController::class, 'create']);
        Route::get('edit/{id}', [CustomerController::class, 'edit']);
    });