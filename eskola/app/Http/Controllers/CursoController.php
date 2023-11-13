<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        // return "Ongi etorri a mis CURSOS desde el controlador";
        return view('cursos.index');
    }

    public function create(){
        // return "Hemen ikastaro berri bat sortuko dugu desde el controlador";
        return view('cursos.create');
    }

    public function show($curso){
        // return "Hau da nire ikastaroa " . $curso. " -------- desde el controlador";
        return view('cursos.show', compact('curso')); // compact('curso') = ['curso' => $curso]
    }



}
