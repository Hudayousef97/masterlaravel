<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
    return view('user.home');
});
Route::get('/about', function () {
    return view('front.about');
});
Route::get('/contact', function () {
    return view('front.contact');
});
Route::get('/feature', function () {
    return view('front.feature');
});
Route::get('/quote', function () {
    return view('front.quote');
});
Route::get('/service', function () {
    return view('front.service');
});
// Route::get('/team', function () {
//     return view('front.team');
// });
Route::get('/testimonial', function () {
    return view('front.testimonial');
});

Route::get('/team', function () {
    return view('front.team');
});
Route::get('/admin', function () {
    return view('admin.admin');
});



Route::get('/home',[HomeController::class,'redirect'])->middleware('auth','verified');

Route::get('/',[HomeController::class,'index']);
Route::get('/team',[HomeController::class,'getTeam'])->name('getTeam');
Route::get('/service',[HomeController::class,'getService'])->name('getService');

Route::get('/quote',[HomeController::class,'getQuote'])->name('getQuote');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::post('/upload_doctor',[AdminController::class,'upload']);

Route::post('/quote',[HomeController::class,'appointment']);

Route::get('/myappointment',[HomeController::class,'myappointment']);

Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

Route::get('/showappointment',[AdminController::class,'showappointment']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/canceled/{id}',[AdminController::class,'canceled']);

Route::get('/showdoctor',[AdminController::class,'showdoctor']);

Route::get('/deletedoctor/{id}',[AdminController::class,'deletedoctor']);

Route::get('/updatedoctor/{id}',[AdminController::class,'updatedoctor']);

Route::post('/editdoctor/{id}',[AdminController::class,'editdoctor']);

Route::get('/emailview/{id}',[AdminController::class,'emailview']);

Route::post('/sendemail/{id}',[AdminController::class,'sendemail']);

Route::get('/add_service_view',[AdminController::class,'addservice']);

Route::post('/upload_service',[AdminController::class,'uploadservice']);

Route::get('/showservice',[AdminController::class,'showservice']);

Route::get('/deleteservice/{id}',[AdminController::class,'deleteservice']);

Route::get('/updateservice/{id}',[AdminController::class,'updateservice']);

Route::post('/editservice/{id}',[AdminController::class,'editservice']);
