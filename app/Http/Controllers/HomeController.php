<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Page;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $page = null;

    public function __construct()
    {
        try {
            $this->page = page(\request()->route()->getName());
            if (!$this->page->exists) abort(404);
        } catch (\Throwable $exception) {
            $this->page = new Page();
        }
        view()->share([
            'sliders' => Slider::get(),
            'contacts' => Contact::firstOrNew(),
            'seo' => $this->page->seo,
            'page' => $this->page
        ]);
    }

    public function home()
    {
        $services = Category::services()->get();
        $requests = Category::requests()->get();
        $cases = Category::cases()->get();
        $lastBlog = Category::blog()->latest()->first();
        $lastNews = Category::news()->latest()->first();
        $stepsCategory = Category::whereName(Page::STEPS)
            ->whereNull('parent_id')->firstOrFail();

        return view('home', [
            'services' => $services,
            'requests' => $requests,
            'cases' => $cases,
            'lastBlog' => $lastBlog,
            'lastNews' => $lastNews,
            'stepsCategory' => $stepsCategory->children,
        ]);
    }

    public function about()
    {
        $requests = Category::requests()->get();
        $cases = Category::cases()->get();
        $lastBlog = Category::blog()->latest()->first();
        $lastNews = Category::news()->latest()->first();
        return view('about', compact('cases', 'requests', 'lastNews', 'lastBlog'));
    }

    public function faq()
    {
        $category = Category::whereName(Page::FAQ)
            ->whereNull('parent_id')->firstOrFail();
        return view('faq', compact('category'));
    }

    public function blog(Request $request)
    {
        $posts = Category::blog()->get();
        if ($request->ajax()) {
            if ($request->has('ids')) {
                $posts = Category::blog()->whereIn('category_id', $request->get('ids'))->get();
            }
            $returnHTML = view('include.components.blog')->with(['posts' => $posts])->render();
            return response()->json(['success' => true, 'html' => $returnHTML]);
        }
        $category = Category::whereName(Page::BLOG)
            ->whereNull('parent_id')->firstOrFail();
        return view('blog', compact('posts', 'category'));
    }

    public function news(Request $request)
    {
        $posts = Category::news()->get();
        if ($request->ajax()) {
            if ($request->has('ids')) {
                $posts = Category::news()->whereIn('category_id', $request->get('ids'))->get();
            }
            $returnHTML = view('include.components.news')->with(['posts' => $posts])->render();
            return response()->json(['success' => true, 'html' => $returnHTML]);
        }
        $category = Category::whereName(Page::NEWS)
            ->whereNull('parent_id')->firstOrFail();

        return view('news', compact('posts', 'category'));
    }

    public function cases(Request $request)
    {
        $posts = Category::cases()->get();
        if ($request->ajax()) {
            if ($request->has('ids')) {
                $posts = Category::cases()->whereIn('category_id', $request->get('ids'))->get();
            }
            $returnHTML = view('include.components.cases')->with(['posts' => $posts])->render();
            return response()->json(['success' => true, 'html' => $returnHTML]);
        }
        $category = Category::whereName(Page::CASES)
            ->whereNull('parent_id')->firstOrFail();

        return view('cases', compact('posts', 'category'));
    }

    public function requests()
    {
        $requests = Category::requests()->get();
        return view('requests', compact('requests'));
    }

    public function services()
    {
        $parentCategory = Category::whereName(Page::SERVICES)
            ->whereNull('parent_id')->firstOrFail();
        $service = Category::services()->first();
        return view('services', ['parentCategory' => $parentCategory, 'service' => $service]);
    }

    public function abc()
    {
        $parentCategory = Category::whereName(Page::ABC)
            ->whereNull('parent_id')->firstOrFail();
        $abc = Category::abc()->first();
        return view('abc', ['parentCategory' => $parentCategory, 'abc' => $abc]);
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function prices()
    {
        $category = Category::whereName(Page::SERVICES)
            ->whereNull('parent_id')->firstOrFail();
        return view('prices', ['categories' => $category->children]);
    }

    public function treatmentProgram()
    {
        $stepsCategory = Category::whereName(Page::STEPS)
            ->whereNull('parent_id')->firstOrFail();
        $stepsCategory = $stepsCategory->children;
        return view('treatmentProgram', compact('stepsCategory'));
    }

    public function writeToDoctor()
    {
        $posts = Category::writeDoctor()->get();
        return view('writeToDoctor', compact('posts'));
    }
}
