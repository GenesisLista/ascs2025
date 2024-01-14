<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PscsController;
use App\Http\Controllers\IfsccController;
use App\Http\Controllers\AscsController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SponsorshipController;
use App\Http\Controllers\IfsccBenefactorController;
use App\Http\Controllers\AbstractSubmissionController;
use App\Http\Controllers\ProgramAtAGlanceController;
use App\Http\Controllers\TourPackageController;
use App\Http\Controllers\HotelReservationController;

use App\Http\Controllers\AbstractMailController;
use App\Http\Controllers\RegistrationMailController;
use App\Http\Controllers\SponsorshipMailController;

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

# About us
Route::resource('pscs', PscsController::class);
Route::resource('ifscc', IfsccController::class);
Route::resource('ascs', AscsController::class);

# Registration
Route::get('/registration/list', [RegistrationController::class, 'list'])->name('registration.list');
Route::resource('registration', RegistrationController::class);

# Sponsorship
Route::get('/sponsorship/list', [SponsorshipController::class, 'list'])->name('sponsorship.list');
Route::resource('sponsorship', SponsorshipController::class);

# IFSCC Benefactors
Route::resource('ifscc_benefactors', IfsccBenefactorController::class);

# Program at a glance
Route::resource('program_at_a_glance', ProgramAtAGlanceController::class);

# Tour Package
Route::resource('tour_package', TourPackageController::class);

# Hotel Reservation
Route::resource('hotel_reservation', HotelReservationController::class);

# Abstract Form Submission and Guidelines
Route::resource('abstract_submission', AbstractSubmissionController::class);

# This is for the abstract email
Route::get('abstract-mail', [AbstractMailController::class, 'index']);

# This is for the conference registration email
Route::get('registration-mail', [RegistrationMailController::class, 'index']);

# This is for the sponsorship / exhibition email
Route::get('sponsorship-mail', [SponsorshipMailController::class, 'index']);