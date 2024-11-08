<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/test",function(){
    $letter = "n";
    $result = match ($letter){
        "n" => "nihat",
        "f" => "ferid",
        default => "unkown"
    };

    return $result;
});



require __DIR__ . "/admin.php";




