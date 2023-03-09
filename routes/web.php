<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\EmailController;

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

Route::get('/', [RouteController::class,'index'])->name('index');
Route::get('/quienes-somos', [RouteController::class,'about_us'])->name('about_us');
Route::get('/especialidades', [RouteController::class,'index'])->name('specialties');
Route::get('/contacto', [RouteController::class,'contact'])->name('contact');
Route::get('/especialidades', [RouteController::class,'specialties'])->name('specialties');


Route::get('/especialidad/terapia-ocupacional', [RouteController::class,'specialties_terapia_ocupacional'])->name('specialties.terapia-ocupacional');
Route::get('/especialidad/fonoaudiologia', [RouteController::class,'specialties_fonoaudiologia'])->name('specialties.fonoaudiologia');
Route::get('/especialidad/nutricion', [RouteController::class,'specialties_nutricion'])->name('specialties.nutricion');
Route::get('/especialidad/psicologia', [RouteController::class,'specialties_psicologia'])->name('specialties.psicologia');
Route::get('/especialidad/educacion-diferencial', [RouteController::class,'specialties_educacion_diferencial'])->name('specialties.educacion-diferencial');
Route::get('/especialidad/neuropsicologia', [RouteController::class,'specialties_neuropsicologia'])->name('specialties.neuropsicologia');
Route::get('/especialidad/psicopedagogia', [RouteController::class,'specialties_psicopedagogia'])->name('specialties.psicopedagogia');
Route::get('/especialidad/medicina-general', [RouteController::class,'specialties_medicina_general'])->name('specialties.medicina_general');

Route::post('/contact/send', [EmailController::class,'sendContact'])->name('contact.send');
