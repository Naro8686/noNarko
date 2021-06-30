@extends('layouts.app')

@section('content')
    <div class="container write_to_doctor">
        @include('include.pageHistory')
        <h1 class="title mt-100">{{$page->title}}</h1>
        <div class="desc">{!! $page->body !!}</div>

        <h2 class="text-uppercase mt-100">Написать врачу</h2>
        <p class="mt-5"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
            the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. </p>
        <h2 class="text-uppercase mt-100">Написать врачу</h2>
        <p class="mt-5"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
            the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. </p>
        <h2 class="text-uppercase mt-100">Написать врачу</h2>
        <p class="mt-5"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
            the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. </p>
        <h2 class="text-uppercase mt-100">Написать врачу</h2>
        <p class="mt-5"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
            the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. </p>
        <h2 class="text-uppercase mt-100">Написать врачу</h2>
        <p class="mt-5"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
            the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
            electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
            Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like
            Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and
            typesetting industry. </p>
        <h2 class="text-uppercase mt-100">Написать врачу</h2>
        <p class="mt-5"> Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
            printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five
            centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>

    </div>
    <div class="container">
        @include('include.proposal')
    </div>
    @include('include.seoText',['text' => $page->seoText, 'body' => $page->seoBody])
@endsection
