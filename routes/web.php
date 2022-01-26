<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BotManController;
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
    return view('welcome');
});


Route::get('/about', function(){
    return view('about');
});

Route::get('/applynow', function(){
    return view('applynow');
});
Route::get('/botman', [App\Http\Controllers\BotManController::class,  'handle'])->name('handle');
Route::post('/botman', [App\Http\Controllers\BotManController::class,  'handle'])->name('handle');
// Route::match(['get', 'post'], '/botman', [App\Http\Controllers\BotManController::class, 'handle', 'askName'])->name('handle', 'askName');

Route::get('/courseregisterform', function(){
    return view('courseregisterform');
});

Route::get('/scholarship', function() {
    return view('scholarship');
});

Route::get('/faculty', function() {
    return view('faculty');
});

Route::get('/FBM', function(){
    return view('FBM');
});

Route::get('/BA', function(){
    return view('BA');
});
Route::get('/FEIT', function(){
    return view('FEIT');
});
 Route::get('/programmes', function(){
    return view('programmes');
});

Route::get('/FHSS', function(){
    return view('FHSS');
});

Route::get('/FAD', function(){
    return view('FAD');
});

Route::get('/FCM', function(){
    return view('FCM');
});

Route::get('/FEP', function(){
    return view('FEP');
});

Route::get('SITE', function(){
    return view('SITE');
});

Route::get('SFSTUDIES', function(){
    return view('SFSTUDIES');
});

Route::get('SPROFESSIONALEDUCATION', function(){
    return view('SPROFESSIONALEDUCATION');
});

 Route::get('/hostel', function(){
     return view('hostel');
 });

 Route::get('/career&experttalks', function(){
    return view('career&experttalks');
});

Route::get('/registerEvent', function() {
    return view('registerEvent');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/virtualcampustour', function(){
  return view('virtualcampustour');
});

Route::get('/events', function(){
    return view('events');
});

Route::get('/campusfacilities', function(){
    return view('campusfacilities');
});




Route::match(['get', 'post'], 'botman', [BotManController::class, 'handle']);
Auth::routes();

Route::post('/registerEvent/store',[App\Http\Controllers\StudentController::class, 'add'])->name('registerEvent');
Route::get('/viewEvent',[App\Http\Controllers\StudentController::class, 'view'])->name('viewEvent');

Route::post('/courseRegisterForm/store',[App\Http\Controllers\CourseController::class, 'add'])->name('registerForm');
Route::get('/viewForm',[App\Http\Controllers\CourseController::class, 'view'])->name('viewForm');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
