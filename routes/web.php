 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\TuteurController;
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

Route::get('/delete-tuteur/{id}', [TuteurController::class, 'delete_tuteur']);
Route::get('/delete-utilisateur/{id}', [UtilisateurController::class, 'delete_utilisateur']);
Route::get('/update-utilisateur/{id}', [UtilisateurController::class, 'update_utilisateur']);
Route::get('/updat-tuteur/{id}', [TuteurController::class, 'updat_tuteur']);
Route::post('/updat/traitement', [TuteurController::class, 'updat_tuteur_traitement']);
Route::post('/update/traitement', [UtilisateurController::class, 'update_utilisateur_traitement']);
Route::get('/utilisateur', [UtilisateurController::class, 'liste_utilisateur']);
Route::get('/tuteur', [TuteurController::class, 'liste_tuteur']);
Route::get('/ajouter', [UtilisateurController::class, 'ajouter_utilisateur']);
Route::get('/ajout', [TuteurController::class, 'ajout_tuteur']);
Route::post('/ajout/traitement', [TuteurController::class, 'ajout_tuteur_traitement']);
Route::post('/ajouter/traitement', [UtilisateurController::class, 'ajouter_utilisateur_traitement']);
