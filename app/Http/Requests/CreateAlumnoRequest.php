<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAlumnoRequest extends FormRequest
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
            'nombre' => 'required',
            'curso' => 'required', 
            'nota1' => 'required', 
            'nota2' => 'required'
        ];
    }

    public function messages(){
        return [
            'nombre.required' => 'Se necesita el nombre del alumno',
            'curso.required' => 'Se necesita el curso', 
            'nota1.required' => 'Se requiere la nota 1', 
            'nota2.required' => 'Se requiere la nota 2'
        ];
    }
}
