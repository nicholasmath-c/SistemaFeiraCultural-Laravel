<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisitorRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required|email',
            'cellphone'=>'numeric|max_digits:11',
            'friend_family'=>'required'
        ];
    }

    public function messages(){
        return [
            'name.required'=>'O nome é um campo obrigatório.',
            'email.required'=>'O e-mail é um campo obrigatório.',
            'cellphone.numeric'=>"O celular tem que ser preenchido por valores numéricos",
            'cellphone.max_digits'=>'O máximo de digitos do celular é: 11'
        ];
    }
}
