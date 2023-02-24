<?php

use App\Http\Controllers\ContactForm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
//use Mail;


// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [ProjectController::class, 'index']);
Route::get('/contactform', [ContactForm::class, 'index']);
//Route::get('/contactform',function (){
//
////    $data = [];
//
//});
