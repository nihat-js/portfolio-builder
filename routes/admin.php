<?php


Route::group(["prefix" => "admin"], function () {
    Route::get("/dashboard", function () {
        return view("pages.admin.dashboard");
    });

    Route::get("/buttons", function () {
        return view("pages.admin.buttons");
    });

    Route::get("/cards", function () {
        return view("pages.admin.cards");
    });
});




?>