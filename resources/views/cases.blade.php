@extends('layouts.app')

@section('content')
    <div class="container cases">
        @include('include.pageHistory')
        <h1 class="title mt-100">{{$page->title}}</h1>
        <div class="desc">{!! $page->body !!}</div>
        @includeWhen($category,'include.blogCategories')
        <div id="carousel-posts" class="carousel slide pointer-event app-carousel" data-ride="carousel">
            @includeWhen(isset($posts),'include.components.cases')
        </div>
    </div>
    @include('include.seoText',['text' => $page->seo->text, 'body' => $page->seo->body])
@endsection
