<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

//renombramos la importacion
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
{
    /**
     * Autorizamos la solicitud para el usuario
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Establecemos las reglas de validacion para el inicio de sesion del usuario
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //Solicitamos el username y el password
            'username'=>'required',
            'password'=>'required'
        ];
    }

    //Credenciales de inicio de sesion
    public function getCredentials(){
        $username= $this->get('username'); //obtenemos el valor del campo username enviado
        //Validamos el username, si es un correo electronico
        if($this->isEmail($username)){
            return [
                'email' => $username,
                'password'=>$this->get('password')
            ];
        }
        return $this->only('username','password');
    }

    public function isEmail($value){
        //Devuelve si es un correo electronico
        $factory= $this->container->make(ValidationFactory::class);
        return !$factory->make(['username'=>$value],['username'=>'email'])->fails();
        //El objeto make me devuelve un objeto de tipo validation
        //Validation tiene un metodo llamado fails(), devuelve si falla
    }
}
