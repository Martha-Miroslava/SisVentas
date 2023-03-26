<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nombre'=> 'required|max:100',
            'tipo_documento'=> 'required|max:20',
            'num_documento'=> 'required|max:15',
            'direccion'=> 'max:70',
            'telefono'=> 'nullable|max:15',
            'email'=> 'nullable|email|max:50'
        ];
    }
}
