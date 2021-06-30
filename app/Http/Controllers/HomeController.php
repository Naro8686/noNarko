<?php

namespace App\Http\Controllers;

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
        }catch (\Throwable $exception){
            $this->page = new Page();
        }
        view()->share([
            'sliders' => Slider::get(),
            'contacts' => Contact::firstOrNew(),
            'seo' => $this->page->seo(),
            'page' => $this->page
        ]);
    }

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function faq()
    {
        return view('faq');
    }

    public function blog()
    {
        return view('blog');
    }

    public function abc()
    {
        return view('abc');
    }

    public function news()
    {
        return view('news');
    }

    public function services()
    {
        return view('services');
    }

    public function requests()
    {
        return view('requests');
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function cases()
    {
        return view('cases');
    }

    public function prices()
    {
        return view('prices');
    }

    public function treatmentProgram()
    {
        return view('treatmentProgram');
    }

    public function writeToDoctor()
    {
        return view('writeToDoctor');
    }
}
