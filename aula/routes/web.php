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
/*
Route::get('/', [AlumnoController::class, 'index']) -> name('alumnos.index');
Route::get('alumnos', [AlumnoController::class, 'index']) -> name('alumnos.index');

Route::get('alumnos/create', [AlumnoController::class, 'create']) -> name('alumnos.create');
Route::post('alumnos/store', [AlumnoController::class, 'store']) -> name('alumnos.store');

Route::get('alumnos/edit/{alumno}', [AlumnoController::class, 'edit']) -> name('alumnos.edit');
Route::put('alumnos/update/{alumno}', [AlumnoController::class, 'update']) -> name('alumnos.update');

Route::delete('alumnos/{alumno}', [AlumnoController::class, 'destroy']) -> name('alumnos.destroy');
Route::get('alumnos/delete/{alumno}', [AlumnoController::class, 'delete']) -> name('alumnos.delete');

Route::get('alumnos/{alumno}', [AlumnoController::class, 'show']) -> name('alumnos.show'); */

/* Route::controller(AlumnoController::class)->group(function (){


    Route::get('/',  'index') -> name('alumnos.index');
    Route::get('alumnos','index') -> name('alumnos.index');

    Route::get('alumnos/create', 'create') -> name('alumnos.create');
    Route::post('alumnos/store', 'store') -> name('alumnos.store');

    Route::get('alumnos/edit/{alumno}', 'edit') -> name('alumnos.edit');
    Route::put('alumnos/update/{alumno}','update') -> name('alumnos.update');

    Route::delete('alumnos/{alumno}', 'destroy') -> name('alumnos.destroy');
    Route::get('alumnos/delete/{alumno}', 'delete') -> name('alumnos.delete');

    Route::get('alumnos/{alumno}', 'show') -> name('alumnos.show');
});
 */
Route::get('alumnos/delete/{alumno}', [AlumnoController::class, 'delete']) -> name('alumnos.delete');

Route::resource('alumnos', AlumnoController::class);

?>
