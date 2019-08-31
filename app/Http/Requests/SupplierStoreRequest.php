<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SupplierStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'          => 'required|max:20',
            'rif'          => 'required|integer|max:11|unique:suppliers,rif',
            'telefono'        => 'required|integer|max:11',
            'direccion'        => 'required|string|max:80',    
            'correo'          => 'required|email|max:40', 
        ];
    }
}
