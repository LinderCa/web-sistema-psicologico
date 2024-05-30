<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Importamos la solicitud de respuesta
use App\Http\Requests\LoginRequest;
//Importamos el modelo
use App\Models\User;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        //Verificamos si un usuario ya esta autenticado, si ese es el caso muestre el home
        if(Auth::check()){
            return redirect()->route("postulante");
        }
        return view('login');
    }

    //inyectamos con un metodo de dependencia
    public function login(LoginRequest $request){
        //objeto request podemos acceder a los metodos
        $credentials=$request->getCredentials();

        if(!Auth::validate($credentials))
        {
            //retornamos una redireccion de con un mensajes de errores de sesiones
            return redirect()->route('login')->withErrors('Ocurrio un error al Iniciar Sesión');
        }
        //Si si se encuentra logeado generamos un usuario
        $user=Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);
        return $this->authenticated($request,$user);
    }

    public function authenticated(Request $request,$user){
        //Redirigimos a una pagina de home
        return redirect()->route('homePostulante');
    }
}
