<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class SeoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id = (int)$this->input('seo.id');
        return [
            "seo.slug" => ["required","regex:/^([a-z0-9\/\-\+\.\?&\*_#]+)$/i", "unique:seo,slug,$id", "max:255"],
            "seo.title" => ["required", "max:255"],
            "seo.description" => ["nullable"],
            "seo.keywords" => ["nullable"],
            "seo.text" => ["nullable", "max:255"],
            "seo.body" => ["nullable"]
        ];
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {
        if ($this->has('seo.slug')) {
            $slug = trim($this->input('seo.slug'),'/');
            $request = $this->except('seo.slug');
            $request['seo']['slug'] = $slug;
            $this->merge([
                "seo" => $request['seo'],
            ]);
        }
    }
}
