<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        return Usuario::all();
    }

    public function store(Request $request)
  
    {
        $usuario= new Usuario();
        $usuario->nombre= $request->nombre;
        $usuario->apellido= $request->apellido;
        $usuario->correo_electronico= $request->correo_electronico;
        $usuario->fecha_registro= $request->fecha_registro;
        $usuario->save();
        return "guardado correctamente";
    }

    public function update(Request $request, $id)
    {
        $usuario= Usuario::find($id);
        $usuario->nombre= $request->nombre;
        $usuario->apellido= $request->apellido;
        $usuario->correo_electronico= $request->correo_electronico;
        $usuario->fecha_registro= $request->fecha_registro;
        $usuario->save();
        return 'actualizado correctamente';
        
    }

    public function destroy($id)
    {
        $usuario= Usuario::find($id);
        $usuario->delete();
        return "Usuario elimidado correctamente";

    }

    public function show($id){
        return Usuario::find($id);
    }
}
