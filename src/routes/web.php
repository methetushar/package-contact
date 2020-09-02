<?php


use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/contact',function(){
   return view('contact::contact-form');
});

Route::post('/contact',function(Request $request){
        return $request->all();
})->name('contact');
