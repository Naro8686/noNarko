<?php

namespace App\Http\Requests\Admin;

use App\Models\Page;
use Illuminate\Foundation\Http\FormRequest;

class PageRequest extends FormRequest
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
        $page = Page::find($this->input('page.id'));
        return [
            'page.id' => ["sometimes"],
            'page.desc' => ["sometimes", "nullable", "string", "max:255"],
            'page.title' => [(!is_null($page) && $page->name === 'home') ? "sometimes" : "required", "max:255"],
            'page.services' => ["sometimes", "array"],
            'page.advantages' => ["sometimes", "array"],
            'page.blog' => ["sometimes", "array"],
            'page.body' => ["nullable"],
            'page.file' => ['sometimes', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ];
    }
}
