<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'parent_id' => ['required', 'nullable', 'exists:categories,id'],
            'name' => ['required', 'string', 'max:191', function ($key, $value, $fail) use ($request) {
                if (Category::whereParentId($request['parent_id'])->where('name', $value)->exists()) $fail("Такое значение уже существует ");
            }]
        ]);

        Category::create($request->only(['name', 'parent_id']));
        return redirect()->back()
            ->with('success', __('Action completed successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(int $id)
    {
        $parent = Category::findOrFail($id);
        $array_of_ids = $this->getChildren($parent);
        array_push($array_of_ids, $id);
        Category::destroy($array_of_ids);
        return redirect()->back()
            ->with('success', __('Action completed successfully'));
    }

    private function getChildren($category): array
    {
        $ids = [];
        foreach ($category->children as $cat) {
            $ids[] = $cat->id;
            $ids = array_merge($ids, $this->getChildren($cat));
        }
        return $ids;
    }
}
