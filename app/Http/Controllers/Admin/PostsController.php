<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostRequest;
use App\Models\Category;
use App\Models\Page;
use App\Models\Seo;
use Str;

class PostsController extends Controller
{
    public $parent = null;

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
        try {
            list(, $name) = explode('/', request()->path());
            $this->parent = Category::whereName($name)
                ->whereNull('parent_id')->firstOrFail();
        }catch (\Throwable $exception){

        }
    }


    public function index()
    {
        $ids = [];
        if (in_array($this->parent->name, [Page::BLOG, Page::NEWS, Page::CASES])) {
            foreach ($this->parent->children as $parent) {
                foreach ($parent->children as $child) {
                    $ids[] = $child->id;
                }
            }
        } elseif (in_array($this->parent->name, [Page::ADVANTAGE, Page::REQUESTS,Page::WRITE_DOCTOR])) {
            $ids[] = $this->parent->id;
        } else foreach ($this->parent->children as $child) {
            $ids[] = $child->id;
        }
        $posts = Page::whereIn('category_id', $ids)->get();
        return view('admin.posts.index', ['parent' => $this->parent, 'posts' => $posts]);
    }

    public function create()
    {
        $blogCategories = Category::whereName(Page::BLOG)
            ->whereNull('parent_id')
            ->whereHas('children.children')
            ->firstOrNew();

        $advantages = Category::whereName(Page::ADVANTAGE)
            ->whereNull('parent_id')
            ->whereHas('pages')
            ->firstOrNew();
        return view('admin.posts.create', [
            'parent' => $this->parent,
            'page' => new Page(),
            'blogCategories' => $blogCategories->children,
            'advantages' => $advantages,
        ]);
    }

    public function store(PostRequest $request)
    {
        $validated = $request->validated()['page'];

        if (!in_array($this->parent->name, [Page::FAQ, Page::ADVANTAGE, Page::REQUESTS, Page::STEPS,Page::WRITE_DOCTOR])) {
            $pageSlug = Seo::whereHas('page', function ($query) {
                $query->where('name', '=', $this->parent->name);
            })->firstOrFail('slug');
            $slug = Str::slug(trim($validated['title'], '/'));
            $request->merge(['generate' => ['slug' => "$pageSlug->slug/$slug"]]);
            $request->validate([
                "generate.slug" => ["required", "regex:/^([a-z0-9\/\-\+\.\?&\*_#]+)$/i", "unique:seo,slug", "max:255"],
            ]);
        }
        if ($request->hasFile('page.file')) {
            $path = "img/{$this->parent->name}";
            if (!is_dir($path)) mkdir($path);

            $img = $request->file('page.file');
            $name = time() . '.' . $img->extension();
            $validated['image'] = "$path/$name";
            $img->move(public_path($path), $name);
        }

        $page = Page::create($validated);
        if ($request->has('generate.slug')) {
            $page->seo()->create([
                'slug' => $request->input('generate.slug'),
                'title' => $validated['title'],
            ]);
        }
        if (!is_null($page->seo)) {
            $blog = $page->blog();
            $advantages = $page->advantages();
            if ($request->has('page.blog')) {
                $blog->attach($validated['blog']);
            }
            if ($request->has('page.advantages')) {
                $advantages->attach($validated['advantages']);
            }
        }
        return redirect()->route("admin.{$this->parent->name}.index")
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


    public function edit($id)
    {
        $page = Page::findOrFail($id);

        $blogCategories = Category::whereName(Page::BLOG)
            ->whereNull('parent_id')
            ->whereHas('children.children')
            ->firstOrNew();

        $advantages = Category::whereName(Page::ADVANTAGE)
            ->whereNull('parent_id')
            ->whereHas('pages')
            ->firstOrNew();
        return view('admin.posts.edit', [
            'parent' => $this->parent,
            'page' => $page,
            'blogCategories' => $blogCategories->children,
            'advantages' => $advantages
        ]);
    }

    public function update(PostRequest $request, int $id)
    {
        $page = Page::findOrFail($id);
        $validated = $request->validated()['page'];
        $validated['image'] = $page->image;
        if ($request->hasFile('page.file')) {
            $path = "img/{$this->parent->name}";
            if (!is_dir($path)) mkdir($path);
            $page->deleteImg();
            $img = $request->file('page.file');
            $name = time() . '.' . $img->extension();
            $validated['image'] = "$path/$name";
            $img->move(public_path($path), $name);
        }
        $page->update($validated);
        if (!is_null($page->seo)) {
            $blog = $page->blog();
            $advantages = $page->advantages();
            $blog->detach();
            $advantages->detach();
            if ($request->has('page.blog')) {
                $blog->attach($validated['blog']);
            }
            if ($request->has('page.advantages')) {
                $advantages->attach($validated['advantages']);
            }
        }
        return redirect()->route("admin.{$this->parent->name}.index")
            ->with('success', __('Action completed successfully'));
    }

    public function destroy($id)
    {
        $post = Page::findOrFail($id);
        $post->deleteImg();
        $post->delete();
        return redirect()->back()
            ->with('success', __('Action completed successfully'));
    }
}
