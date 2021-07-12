@extends('layouts.app')

@section('content')
    <div class="container abc">
        @include('include.pageHistory')
        <h1 class="title mt-4">{{$page->title}}</h1>
        <div class="desc">{!! $page->body !!}</div>
        <div class="flexbox mt-5">
            <div class="box flex-column">
                <label class="abc-search">
                    <img alt="search" src="{{asset('img/icon/search.svg')}}">
                    <input class="w-100" type="text" name="search">
                </label>
                <div class="abc-navigation text-uppercase">
                    <a href="#">А</a> <a href="#">Б</a> <a href="#">В</a> <a href="#">Г</a> <a href="#">д</a> <a
                        href="#">Е</a> <a href="#">Ж</a> <a href="#">З</a> <a href="#">И</a> <a href="#">Й</a> <a
                        href="#">К</a> <a href="#">Л</a> <a href="#">М</a> <a href="#">Н</a> <a href="#">О</a> <a
                        href="#">П</a> <a href="#">Р</a> <a href="#">С</a> <a href="#">Т</a> <a href="#">У</a> <a
                        href="#">Ф</a> <a href="#">Х</a> <a href="#">Ц</a> <a href="#">Ч</a> <a href="#">Ш</a> <a
                        href="#">Щ</a> <a href="#">Э</a> <a href="#">Ю</a> <a href="#">Я</a></div>
            </div>
            <div class="box"></div>
        </div>
        <div class="flexbox">
            <div class="box mb-5">
                @includeWhen(isset($parentCategory),'include.serviceCategories',['page' => $abc])
            </div>
            @if($abc)
                <div class="box">
                    <h1>{{$abc->title}}</h1>
                    <div class="mt-5">{!! $abc->body !!}</div>
                </div>
            @endif
        </div>
    </div>
    @include('include.seoText',['text' => $page->seoText, 'body' => $page->seoBody])
@endsection
