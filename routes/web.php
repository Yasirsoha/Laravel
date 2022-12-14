<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;;
use App\Http\Controllers\userController;
use App\Http\Controllers\saveController;
use App\Http\Controllers\connect;
use App\Http\Controllers\tbControllerr;
use App\Http\Controllers\apiController;
use App\Http\Controllers\search;
use App\Http\Controllers\FetchData;
use App\Http\Controllers\postController;
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
Route::get('/abc', function () {
    return view('welcome');
});
Route::get("/users/{user}",[userController::class,'show']);
// Route::post("/savedata",[saveController::class,'save']);
// Route::get('/user', function () {
//     return view('user');
// });
Route::get('/save/{lang}', function ($lang) {
    // App::setlocale($lang);
    return view('save');
});
// Route::view("save","/save");
Route::get("/contact",[saveController::class,"save"]);
Route::post("postmethod",[postController::class,"postHandler"]);
Route::get("getmethod",[postController::class,"getHandler"]);
Route::delete("deletemethod/{id}",[postController::class,"deleteHandler"]);
Route::get("getonemethod/{id}",[postController::class,"getoneHandler"]);
Route::post("updatemethod",[postController::class,"updateHandler"]);
Route::get("/connection/{id?}",[connect::class,"dbConn"]);

Route::get("/search/{id?}",[search::class,"dbConn"]);
Route::post("/data",[saveController::class,"postHandler"]);
Route::get("/getdata",[tbControllerr::class,"getData"]);
Route::post("/postdata",[tbControllerr::class,"postData"]);
Route::delete("/deletedata/{id}",[tbControllerr::class,"deleteData"]);
Route::get("/get",[apiController::class,"get"]);
Route::post("send",[apiController::class,"post"]);
Route::get("fetch",[FetchData::class,"save"])->middleware("age");
Route::delete("del",[apiController::class,"delete"]);
Route::view("translate","translate");
Route::group(["middleware"=>["protected"]],function(){
Route::get("/contact",[saveController::class,"save"]);
});
Route::view("form","data");