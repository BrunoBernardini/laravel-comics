<?php

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
    $data = [
        "headerMenu" => config("headerMenu"),
        "footerMenu" => [
            "footerLinks" => config("footerLinks"),
            "socials" => config("socials")
        ],
        "cardsInfo" => config("comics"),
        "shopMenu" => config("shopMenu")
    ];
    return view('comics', $data);
})->name("comics");

Route::get("/characters", function(){
    $data = [
        "headerMenu" => config("headerMenu"),
        "footerMenu" => [
            "footerLinks" => config("footerLinks"),
            "socials" => config("socials")
        ]
    ];
    return view("characters", $data);
})->name("characters");

Route::get("/movies", function(){
    $data = [
        "headerMenu" => config("headerMenu"),
        "footerMenu" => [
            "footerLinks" => config("footerLinks"),
            "socials" => config("socials")
        ]
    ];
    return view("movies", $data);
})->name("movies");

Route::get("/tv", function(){
    $data = [
        "headerMenu" => config("headerMenu"),
        "footerMenu" => [
            "footerLinks" => config("footerLinks"),
            "socials" => config("socials")
        ]
    ];
    return view("tv", $data);
})->name("tv");

Route::get("/games", function(){
    $data = [
        "headerMenu" => config("headerMenu"),
        "footerMenu" => [
            "footerLinks" => config("footerLinks"),
            "socials" => config("socials")
        ]
    ];
    return view("games", $data);
})->name("games");

Route::get("/collectibles", function(){
    $data = [
        "headerMenu" => config("headerMenu"),
        "footerMenu" => [
            "footerLinks" => config("footerLinks"),
            "socials" => config("socials")
        ]
    ];
    return view("collectibles", $data);
})->name("collectibles");

Route::get("/videos", function(){
    $data = [
        "headerMenu" => config("headerMenu"),
        "footerMenu" => [
            "footerLinks" => config("footerLinks"),
            "socials" => config("socials")
        ]
    ];
    return view("videos", $data);
})->name("videos");

Route::get("/fans", function(){
    $data = [
        "headerMenu" => config("headerMenu"),
        "footerMenu" => [
            "footerLinks" => config("footerLinks"),
            "socials" => config("socials")
        ]
    ];
    return view("fans", $data);
})->name("fans");

Route::get("/news", function(){
    $data = [
        "headerMenu" => config("headerMenu"),
        "footerMenu" => [
            "footerLinks" => config("footerLinks"),
            "socials" => config("socials")
        ]
    ];
    return view("news", $data);
})->name("news");

Route::get("/shop", function(){
    $data = [
        "headerMenu" => config("headerMenu"),
        "footerMenu" => [
            "footerLinks" => config("footerLinks"),
            "socials" => config("socials")
        ]
    ];
    return view("shop", $data);
})->name("shop");

// $data = config("comics");
// ["comics"=>$data]
