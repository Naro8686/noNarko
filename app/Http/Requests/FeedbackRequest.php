<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !(auth()->check() && !$this->routeIs('feedback.store'));
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            'text' => ['required', 'string', 'max:2000'],
            'question' => ['sometimes','required', 'string', 'regex:/^(yes|no)$/u'],
            'agree' => ['sometimes', 'required'],
        ];
    }
}
