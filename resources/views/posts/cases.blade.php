@extends('layouts.app')

@section('content')
    <div class="container">
        @include('include.proposal',['class'=>'d-block d-lg-none mb-5'])
        @include('include.pageHistory')
        <h1 class="title text-center mt-5">{{$page->title}}</h1>
        <p class="desc text-center mb-5">{{$page->desc}}</p>
        <div class="d-flex justify-content-center mb-5">
            <img class="img-fluid img-thumbnail" src="{{asset($page->image)}}" alt="post">
        </div>
        <div class="desc">{!! $page->body !!}</div>
    </div>
    @include('include.seoText',['text' => $page->seo->text, 'body' => $page->seo->body])
@endsection
