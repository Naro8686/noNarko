@extends('layouts.admin')

@section('content')
    @if($page->exists)
        @includeWhen($page->name !== "error404",'admin.include.meta',['seo' => $page->seo()])
        @includeWhen($page->name !== "home",'admin.include.content',['imgExists' => $page->name === 'about'])
    @endif
@endsection
