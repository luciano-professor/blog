<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'titulo' => 'required|min:3|max:255',
            'texto' => 'required',
        ];
    }

    /**
     * Customizando as mensagens
     *
     * @return void
     */
    public function messages()
    {
        return [
            'required'  => 'O campo :attribute é obrigatório',
            'min' => 'O campo :attribute deve ter no mínimo :min caracteres'
        ];
    }

    /**
     * Customizando o nome dos campos
     *
     * @return void
     */
    public function attributes()
    {
        return [
            'titulo' => 'título',
        ];
    }

}
