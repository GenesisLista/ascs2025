<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PscsController;
use App\Http\Controllers\IfsccController;
use App\Http\Controllers\AscsController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SponsorshipController;
use App\Http\Controllers\IfsccBenefactorController;
use App\Http\Controllers\AbstractSubmissionController;

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
Route::resource('registration', RegistrationController::class);

# Sponsorship
Route::resource('sponsorship', SponsorshipController::class);

# IFSCC Benefactors
Route::resource('ifscc_benefactors', IfsccBenefactorController::class);

# Abstract Form Submission and Guidelines
Route::resource('abstract_submission', AbstractSubmissionController::class);


