<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
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

    public function abc(){
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
    public function treatmentProgram(){
        return view('treatmentProgram');
    }
    public function writeToDoctor(){
        return view('writeToDoctor');
    }
}
