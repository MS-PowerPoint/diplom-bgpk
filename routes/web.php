<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolboyController;
use App\Http\Controllers\SchoolController;

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
    return view('index.index');
});
Route::get('/schools',[SchoolController::class, 'index']);

Route::get('/schoolboys',[SchoolboyController::class, 'index']);

Route::get('/schools/create',[SchoolController::class, 'create']);
Route::post('/schools',[SchoolController::class, 'store']);

Route::get('/schoolboys/create',[SchoolboyController::class, 'create']);
Route::post('/schoolboys',[SchoolboyController::class, 'store']);

Route::get('/schools/{school}', [SchoolController::class, 'show']);
Route::get('/schoolboys/{schoolboy}', [SchoolboyController::class, 'show']);


Route::get('/schools/{school}/update',[SchoolController::class, 'edit']);
Route::patch('/schools/{school}/update',[SchoolController::class, 'update']);

Route::get('/schoolboys/{schoolboy}/update',[SchoolboyController::class, 'edit']);
Route::patch('/schoolboys/{schoolboy}/update',[SchoolboyController::class, 'update']);

Route::delete('/schools/{school}', [SchoolController::class, 'destroy'])->name('schools.delete');
Route::delete('/schoolboys/{schoolboy}', [SchoolboyController::class, 'destroy'])->name('schoolboy.delete');