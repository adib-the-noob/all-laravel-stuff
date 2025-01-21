<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

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

// Route::get('/hello', function () {
//     return "Hello World";
// });

Route::get('/user/{u_id}', function ($u_id) {
    return "User ID: " . $u_id;
});

Route::get('/post/{post_id}/comment/{comment_id}', function ($post_id, $comment_id) {
    return "Post ID: " . $post_id . " Comment ID: " . $comment_id;
});

Route::get("/hello/{name?}", function ($name = "Mr. User") {
    return "Hello, " . $name;
});

Route::get("/product/{p_name}", function ($p_name) {
    return "Product Name: " . $p_name;
})->where("p_name", "[a-zA-Z]+");

Route::get("/manager/{id}/{name}", function ($id, $name){
    return "Manager id {$id} and Managers name is {$name}";
})->where([
    "id"=> "[0-9]",
    "name"=> "[a-zA-Z]+"
]);

Route::get("/employee/{id}/{name}", function ($id, $name){
    return "Employee id {$id} and Employee name is {$name}";
})->whereNumber("id")->whereAlpha("name");

Route::get("/lol", function (){
    return "Redirected to LOL";
})->name("lol");

Route::redirect("/lmao", "/lol");
Route::fallback(function (){
    return "<h1>Default Route</h1>";
});