<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorDiario extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //especificar como se trabajaran las 'reglas' de validaciones de los input 
            //'txtTitulo'=>'required|max:6',
            //'txtTitulo'=>'required|min:3',
            'txtTitulo'=>'required|max:6',
            'txtRecuerdo'=>'required'
        ];
    }
}
