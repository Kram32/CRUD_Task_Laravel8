<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
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






Route::get("/", [HomeController::class, "index"])->name("home.index");

Route::get("/contact", [HomeController::class, "contact"])->name("home.contact");

// Single action for controller
Route::get("/single", AboutController::class);



// Route::get('/', function () {
//     return view("home.index");
// })->name("home.index");

// Short Version
// Route::view("/", "home.index")->name("home.index");


// Route::get("/contact", function() {
//     return view("home.contact");
// })->name("home.contact");
    
// Short Version
// Route::view("/contact", "home.contact")->name("home.contact");



Route::resource("posts", PostsController::class);
// Route::get("/home");


// If we use the Request as parameter in callback function
// make sure that you imported the "use Illuminate\Http\Request;"

// Route::get("/posts", function(Request $request) use($posts) {
    
//     // We use the request()->all() to get the query value from url
//     // And we use the dd() to dump and die what inside of the parenthesis
//     // and ii will break the execution of code
//     // dd(request()->all());

//     // It will make default value from query name page
//     // input() and query() are the same
//     dd((int)request()->input("page", 1));
//     dd((int)request()->query("page", 1));
    
//     // compact("posts") === ["posts", $posts];
//     return view("posts.index", ["posts" => $posts]);
// })->name("posts.index");



// The id inside of where method is came from the route posts/{id}

// Route::get("posts/{id}", function ($id) use($posts) {
    
 

//     abort_if(!isset($posts[$id]), 404);

//     return view("posts.show", ["post" => $posts[$id]]);
// })
// // ->where(["id" => "[0-9]+"])
// ->name("posts.show"); 



// Route::get("/recent-posts/{days_ago?}", function($daysAgo) {
//     echo "Posts from $daysAgo days ago";
// })->name("posts.recent.index");





// Route::prefix("/fun")->name("fun.")->group(function() use($posts) {
    
//     // Example of making responses
//     Route::get("/responses", function() use($posts) {
//         return response($posts, 201)->header("Content-Type", "application/json")
//         ->cookie("MY_COOKIE", "Mark Anthony", 3600);
//     })->name("responses");


//     // Example of redirecting 
//     Route::get("/redirect", function() {
//         return redirect("contact");
//     })->name("redirect");


//     // To back the previous page 
//     Route::get("/back", function() {
//         return back();
//     })->name("back");

//     // To make routing 
//     Route::get("/named-route", function() {
//         return redirect()->route("posts.recent.index", ["days_ago" => 10]);
//     })->name("named-route");

//     // To redirect a specific website 
//     Route::get("/away", function() {
//         return redirect()->away("https://facebook.com");
//     })->name("away");

//     // To make a json data 
//     Route::get("/json", function() use($posts) {
//         return response()->json($posts);
//     })->name("json");

//     // To download a file 
//     Route::get("/download", function() {
//         return response()->download(public_path("/daniel.jpg"));
//     })->name("download");


// });



