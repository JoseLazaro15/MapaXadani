<?php

namespace App\Http\Controllers;

use App\Models\Lotes;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use App\Models\Usuario;


class LotesController extends Controller
{
    public function ShowRegisters()
    {
        $registros= Lotes::all(); // Reemplaza 'usuarios' con el nombre de tu tabla

        return view('index', ['registros' => $registros]);
    }
    public function mostrarFormulario()
    {
        return view('index');
    }

    public function obtenerInformacion(Request $request)
    {
        $id = $request->input('id');
        $informacion = Lotes::find($id);

        return view('index', ['informacion' => $informacion]);
    }

}
