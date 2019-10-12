<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaterialUpdateRequest extends FormRequest
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

    public function messages()
{
    return [
        'nombre.required' => 'El nombre es obligatorio',
        'nombre.unique' => 'Ya existe una materia prima con este nombre',
        'body.required'  => 'A message is required',
    ];
}

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
    

        return [
            
            'nombre' => 'required|max:20|unique:materials,nombre,'. $this->nombre,
        
            'medida' => 'required',
            'stock_actual'  => 'required',
        ];
      
      
    }
   
}
