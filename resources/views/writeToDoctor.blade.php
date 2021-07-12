@extends('layouts.app')

@section('content')
    <div class="container write_to_doctor">
        @include('include.pageHistory')
        <h1 class="title mt-100">{{$page->title}}</h1>
        <div class="desc">{!! $page->body !!}</div>
        @foreach($posts as $post)
            <h2 class="text-uppercase mt-100">{{$post->title}}</h2>
            <div class="mt-5">{!! $post->body !!}</div>
        @endforeach
    </div>
    <div class="container">
        @include('include.proposal')
    </div>
    @include('include.seoText',['text' => $page->seo->text, 'body' => $page->seo->body])
@endsection
