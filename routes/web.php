<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage.index');
})->name('index');

Route::get('/apply',[PatientController::class,'apply'])->name('apply');
Route::post('/apply',[PatientController::class,'applyStore'])->name('applyStore');
Route::get('/myprofile',[PatientController::class,'myprofile'])->name('myprofile');
Route::get('/docProfile',[DoctorController::class,'docProfile'])->name('docProfile');

Route::get('/docreg',[DoctorController::class,'docreg'])->name('docreg');
Route::post('/docreg',[DoctorController::class,'docStore'])->name('docStore');
Route::get('/',[DoctorController::class,'doctor'])->name('doctor');


Route::prefix('admin')->group(function(){
    Route::get('/dashboard',[AdminController::class,"dashboard"])->name('admin.dashboard');
    Route::get('/patients',[AdminController::class,"patients"])->name('patients');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
