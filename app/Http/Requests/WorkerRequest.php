<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                        
            'correo'          => 'required|email|max:80',
            'password'        => 'required|confirmed',
            'nombre'          => 'required|string|max:50',
            'apellido'        => 'required|string|max:50',
            'cedula'          => 'required|integer|unique:users,identification',
            'fecha_nacimento' => 'date',
            'telefono'        => 'required|integer',
            'telefono'        => 'direccion',
        ];
    }
}
