<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MetaRequest;
use App\Models\Page;
use Illuminate\Http\Request;

class MetaController extends Controller
{

    public function index()
    {
        //return view('admin.include.meta');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @param MetaRequest $request
     * @param int $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(MetaRequest $request, int $id)
    {
        $seo = $request->validated()['seo'];
        $page = Page::findOrFail($id);
        $page->update([
            'slug' => $seo['slug'],
            'seoTitle' => $seo['title'],
            'seoDescription' => $seo['description'],
            'seoKeywords' => $seo['keywords'],
            'seoText' => $seo['text'],
            'seoBody' => $seo['body']
        ]);
        return redirect()->route("admin.pages.$page->name")
            ->with('success', __('Action completed successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
