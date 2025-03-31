<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFabricadoRequest extends FormRequest
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
                'denominacion' => 'required|string|max:255',
                'precio' => 'required|numeric|between:0,999999.99',
                'alto' => 'required|numeric|between:0,999999.99',
                'ancho' => 'required|numeric|between:0,999999.99',
        ];
    }

    public function messages(): array
    {
        return [
                'denominacion.required' => 'El denominacion es obligatorio.',
                'denominacion.max' => 'El denominacion no puede tener más de 255 caracteres.',
                'precio.required' => 'El precio es obligatorio.',
                'precio.numeric' => 'El precio debe ser un número válido.',
                'precio.between' => 'El precio debe estar entre 0 y 999999.99.',
                'alto.required' => 'La medida de alto es obligatoria',
                'alto.numeric' => 'La medida de alto es incorrecta',
                'ancho.required' => 'La medida de ancho es obligatoria',
                'ancho.numeric' => 'La medida de ancho es incorrecta',

        ];
    }
}
