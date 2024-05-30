<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
//Importamos el modelo
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //funcion para mostrar
    public function show(){
        if(Auth::check()){
            return redirect()->route('postulante');
        }
        return view('auth.register');
    }

    //Funcion que permite registrar los datos del formulario
    //manejamos el parametro de la solicitud
    public function register(RegisterRequest $request){
        //Creamos un nuevo usuario, siempre y cuando obedesca las reglas del request
        $user=User::create($request->validated());
        //nos redirigimos a otra ruta
        return redirect()->route('login')->with('Exito','Su cuenta se creo exitosamente');
    }
}
