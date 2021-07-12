<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Page;
use App\Models\Seo;
use App\Models\Slider;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function search(Request $request)
    {
        $search = "";
        if ($request->has('q') && !is_null($request['q'])) {
            $search = $request->get('q');
        }
        $links = Page::whereHas('seo', function ($query) {
            $query->where('slug', '<>', null);
        })->where("title", "LIKE", "%$search%");
        $returnHTML = view('include.search')->with(['links' => $links->get()])->render();
        return response()->json(['success' => $links->count(), 'html' => $returnHTML]);
    }

    /**
     * Display the specified resource.
     *
     * @param Seo $seo
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Seo $seo)
    {
        $page = $seo->page;
        if ($parentCategory = $page->category) {
            if (!is_null($page->category->parent)) {
                $parentCategory = $page->category->parent;
                if (!is_null($parentCategory->parent)) {
                    $parentCategory = $parentCategory->parent;
                }
            }
        } else abort(404);
        return view("posts.$parentCategory->name")->with([
            'sliders' => Slider::get(),
            'contacts' => Contact::firstOrNew(),
            'seo' => $seo,
            'page' => $page,
            'parentCategory' => $parentCategory,
        ]);
    }
}
