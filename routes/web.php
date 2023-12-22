<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController ;
use App\Mail\welcomeToMyWebSiteMail ;
use App\Mail\Subscribe ;
use Illuminate\Support\Facades\Mail;


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


Route::get('/create_user' , [TestController::class , 'create']) ;

Route::get('/send_mail' , function(){


    Mail::to('louhab.abderazzak@gmail.com')->send(new Subscribe());


});

Route::get('/log' , [TestController::class , 'create']);

Route::get('/send_sms' , [TestController::class , 'send_sms']) ;
