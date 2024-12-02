<?php


use App\Http\Controllers\LecturerController;
use Illuminate\Support\Facades\Route;

// Redirect root URL to lecturers index
Route::get('/', function () {
    return redirect()->route('lecturers.index');
});

// Resource routes for lecturers
Route::resource('lecturers', LecturerController::class);
