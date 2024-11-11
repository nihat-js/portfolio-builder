<?php

use Illuminate\Foundation\Bootstrap\LoadConfiguration;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

// Route::get("/test",function(){
//     $x = config("appSettings");
// });



require __DIR__ . "/admin.php";




