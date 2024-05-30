<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determinar si el usuario esta autorizado para realizar la solicitud
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Validamos que los campos cumplen con ciertos requisitos
     * Si es valido entonces continua con la ejecucion del codigo en register del Controlador
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //Campos requeridos y unico
            'names' => 'required',
            'surnames' => 'required',
            'email'=> 'required|unique:users,email',
            //indicamos que el usuario sea requerido y unico en todos los usuarios
            'username'=> 'required|unique:users,username',
            //la contraseña sea minimo de 5 caracteres
            "password" => 'required|min:5',
            //Inidicamos que la confirmacion del password sea igual al campo passwotd
            "password_confirmation" => 'required|same:password'
        ];
    }
}
