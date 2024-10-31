<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/JamierSeda', [ProfileController::class, 'showResume'])->name('jamier.resume');
