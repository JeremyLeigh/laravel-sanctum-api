<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FamiliarController;
use App\Http\Controllers\FamiliarMaster;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::resource('products', ProductController::class);

//Public Routes

    //Familiar Routes
        //Post
        Route::post('/familiar', [FamiliarMaster::class, 'store']);
        //Delete
        Route::delete('/familiar/{id}', [FamiliarMaster::class, 'destroy']);
        //Get
        Route::get('/familiar', [FamiliarMaster::class, 'index']);
        Route::get('/familiar/{id}', [FamiliarMaster::class, 'show']);
        Route::get('/familiar/speed/{id}', [FamiliarMaster::class, 'speed']);
        Route::get('/familiar/skills/{id}', [FamiliarMaster::class, 'skills']);
        Route::get('/familiar/senses/{id}', [FamiliarMaster::class, 'senses']);
        Route::get('/familiar/traits/{id}', [FamiliarMaster::class, 'traits']);
        Route::get('/familiar/actions/{id}', [FamiliarMaster::class, 'actions']);


        Route::get('/token', function (Request $request) {
            $token = $request->session()->token();
         
            $token = csrf_token();
        });


    //Ref
        Route::get('/products/search/{name}', [ProductController::class, 'search']);
        Route::get('/products', [ProductController::class, 'index']);
        Route::get('/products/{id}', [ProductController::class, 'show']);
        Route::post('/register', [AuthController::class, 'register']);
        Route::post('/login', [AuthController::class, 'login']);


//Protected Routes
    Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);

});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
