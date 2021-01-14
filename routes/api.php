<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ProfesseurController;
use App\Http\Controllers\CoursController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('cours/cour',[CoursController::class, 'create']);
Route::get('cours',[CoursController::class, 'index']);
Route::post('getcours',[CoursController::class, 'getCours']);
Route::post('delcours',[CoursController::class, 'delCours']);
Route::post('sakecours',[CoursController::class, 'sakeCours']);
Route::post('getcours',[CoursController::class, 'getCours']);

Route::post('creationetudiant',[Etudiantcontroller::class, 'create']);
Route::post('getetudiant',[Etudiantcontroller::class, 'getEtudiant']);
Route::post('creationprof',[Professeurcontroller::class, 'create']);
Route::post('getprof',[Professeurcontroller::class, 'getProfesseur']);
// Route::post('cours/cour',[CoursController::class, 'create']);
// Route::get('cours',[CoursController::class, 'index']);
// Route::post('getcours',[CoursController::class, 'getCours']);
// Route::post('delcours',[CoursController::class, 'delCours']);
// Route::post('sakecours',[CoursController::class, 'sakeCours']);
// Route::post('Etudiant',[Etudiantcontroller::class, 'create']);
// Route::post('getcours',[CoursController::class, 'getCours']);