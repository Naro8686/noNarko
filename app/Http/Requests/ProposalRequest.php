<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProposalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !(auth()->check() && !$this->routeIs('proposal.store'));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tel' => ['required', 'ru_phone_number'],
            'name' => ['sometimes', 'required', 'string', 'max:100'],
            'agree' => ['sometimes', 'required'],
        ];
    }

    public function messages()
    {
        return [
            'ru_phone_number' => 'Поле для номера телефона заполнен не правильно'
        ];
    }
}
