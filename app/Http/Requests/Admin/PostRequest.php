<?php

namespace App\Http\Requests\Admin;

use App\Models\Category;
use App\Models\Page;
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
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $categoryID = $this->input('page.category_id');

        $category = Category::find($categoryID);
        $rule = !is_null($category) && (in_array($category->name, [Page::ADVANTAGE,Page::WRITE_DOCTOR]) || $this->has('page.id') || ($category->parent && in_array($category->parent->name, [Page::FAQ, Page::ABC, Page::STEPS]))) ? 'sometimes' : 'required';
        return [
            'page.category_id' => ["required", "exists:categories,id"],
            'page.title' => ["required", "max:255"],
            'page.note' => ["sometimes", "max:255"],
            'page.price' => ["sometimes", "integer"],
            'page.desc' => ["sometimes", "max:255"],
            'page.services' => ["sometimes", "array"],
            'page.advantages' => ["sometimes", "array"],
            'page.blog' => ["sometimes", "array"],
            'page.body' => [!is_null($category) && !in_array($category->name, [Page::ADVANTAGE, Page::REQUESTS]) ? "required" : "sometimes"],
            'page.file' => [$rule, 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ];
    }
}
