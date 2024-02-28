<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VolunteerRegistration;

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
    // return redirect()->route('index');
})->name('/');


Route::get('/dashboard', function(){
    return 'dashboard';
});

Route::view('index', 'index')->name('index');


Route::view('health-programs', 'health-programs')->name('health-programs');
Route::view('healthprograms/annual-medical-mission', 'healthprograms/annual-medical-mission')->name('healthprograms/annual-medical-mission');
Route::view('healthprograms/dental-mission', 'healthprograms/dental-mission')->name('healthprograms/dental-mission');
Route::view('healthprograms/free-check-up', 'healthprograms/free-check-up')->name('healthprograms/free-check-up');
Route::view('healthprograms/vaccination-and-immunization', 'healthprograms/vaccination-and-immunization')->name('healthprograms/vaccination-and-immunization');





Route::view('community-programs', 'community-programs')->name('community-programs');
Route::view('communityprograms/job-fair', 'communityprograms/job-fair')->name('communityprograms/job-fair');
Route::view('communityprograms/cash-aid-assistance', 'communityprograms/cash-aid-assistance')->name('communityprograms/cash-aid-assistance');
Route::view('communityprograms/tupad', 'communityprograms/tupad')->name('communityprograms/tupad');
Route::view('communityprograms/feeding-program', 'communityprograms/feeding-program')->name('communityprograms/feeding-program');



Route::get('volunteer-form', [App\Http\Controllers\VolunteerRegistration::class, 'volunteerform']);
Route::post('volunteerform', [App\Http\Controllers\VolunteerRegistration::class, 'store'])->name('store');
Route::post('volunteer-form', [App\Http\Controllers\VolunteerRegistration::class, 'volunteerform'])->name('volunteerform');


Route::get('set-an-appointment', [App\Http\Controllers\AppointmentController::class, 'appointment']);
