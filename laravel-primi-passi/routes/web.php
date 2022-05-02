<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $title = 'Hello Word';
    return view('hello', compact('title'));
});

Route::get('/contatti', function(){
    $title_contacts = 'Contattaci';
    return view('contatti', compact('title_contatti'));
})->name('contatti');

Route::get('/about', function(){
    $title_about = 'About';
    return view('about', compact('title_about'));
})->name('about');

Route::get('/gallery', function(){
    $title_gallery = 'MyGallery';
    return view('gallery', compact('title_gallery'));
})->name('gallery');

Route::get('/where', function(){
    $title_where = 'We are here';
    return view('where', compact('title_where'));
})->name('where');