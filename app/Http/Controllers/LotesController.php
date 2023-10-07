<?php

namespace App\Http\Controllers;

use App\Models\Lotes;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Mail\ContactFormMail;

//use Illuminate\Support\Facades\DB;
use App\Models\Usuario;

use Illuminate\Support\Facades\Mail;


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
    
    public function obtenerValoresPorID(Request $request)
    {
        $id = $request->input('id');
        $informacion = Lotes::find($id);

        return response()->json($informacion);
    }
    public function enviarFormularioContacto(Request $request)
    {
        // Obtén el ID del lote desde el formulario
        $id = $request->input('id'); // Asegúrate de que esto sea el nombre correcto del campo
    
        // Busca el lote por su ID
        $informacionLote = Lotes::find($id);
    
        // Verifica si se encontró un lote con ese ID
        if (!$informacionLote) {
            // Maneja el caso en el que no se encontró el lote
            return response()->json(['error' => 'Lote no encontrado'], 404);
        }
        $nombre = $request->input('nombre');
        $telefono = $request->input('telefono');
        $correo = $request->input('correo');
    
        // Crea una instancia de ContactFormMail con los datos del formulario y la información del lote
        $email = new ContactFormMail($nombre, $telefono, $correo, $informacionLote);
    
        // Envía el correo electrónico utilizando el controlador de correo
        Mail::to('jl.lazaro15@gmail.com')->send($email);
    
        // Devuelve una respuesta de éxito
        return response()->json(['message' => 'Formulario enviado con éxito'], 200);
    }
    

}
