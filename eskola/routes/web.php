<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
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

Route::get('cursos', [CursoController::class, 'index']);
Route::get('cursos/create', [CursoController::class, 'create']);
Route::get('cursos/{curso}', [CursoController::class, 'show']);

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('cursos', function () {
    return "Ongi etorri a mis cursos";
});


Route::get('cursos/create', function () {
    return "Hemen ikastaro berri bat sortuko dugu";
});

Route::get('cursos/{curso}', function ($curso) {
    return "Hau da nire ikastaroa " . $curso. "--------";
});
 */
Route::get('cursos/{curso}/{categoria}', function ($curso, $categoria) {
    return "Hau da nire ikastaroa " . $curso. "-------- eta kategoria " . $categoria;
});



