<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlumno extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
                'nombre_apellido' => 'required|min:5|max:75',
                'edad' => 'required',
                'telefono' => 'required',
                'direccion' => 'required',
                'foto' => 'image'

        ];
    }
    public function messages() : array
    {
        return [
            'nombre_apellido.required' => 'El nombre es requerido EUSKARA',
            'nombre_apellido.min' => 'El nombre debe tener al menos 5 caracteres EUSKARA',
            'nombre_apellido.max' => 'El nombre debe tener como máximo 75 caracteres EUSKARA',
            'edad.required' => 'La edad es requerida EUSKARA',
            'telefono.required' => 'El teléfono es requerido EUSKARA',
            'direccion.required' => 'La dirección es requerida EUSKARA  '
        ];
    }
}
