<?php
use App\Http\Controllers\AlumnoController;
use Illuminate\Support\Facades\Route;

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
/*     return view('welcome');
 */


});

Route::get('/', [AlumnoController::class, 'index']) -> name('alumnos.index');
Route::get('alumnos', [AlumnoController::class, 'index']) -> name('alumnos.index');

Route::get('alumnos/create', [AlumnoController::class, 'create']) -> name('alumnos.create');
Route::post('alumnos/store', [AlumnoController::class, 'store']) -> name('alumnos.store');

Route::get('alumnos/edit/{alumno}', [AlumnoController::class, 'edit']) -> name('alumnos.edit');
Route::put('alumnos/update/{alumno}', [AlumnoController::class, 'update']) -> name('alumnos.update');

Route::get('alumnos/{alumno}', [AlumnoController::class, 'show']) -> name('alumnos.show');

?>
