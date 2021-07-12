@extends('layouts.app')

@section('content')
    <div class="container">
        @include('include.pageHistory')
        <h1 class="title mt-100">{{$page->title}}</h1>
        <div class="desc">{!! $page->body !!}</div>
    </div>
    <div class="mt-5 container prices">
        @foreach($categories as $category)
            <h1 class="mb-5 mt-100 p-lg-0 p-md-0 pl-3 pr-3">{{$category->name}}</h1>
            <div class="table">
                <div class="thead">
                    <div class="tr" data-count-cross="6">
                        <div class="th"><h2>Услуга</h2></div>
                        <div class="th d-none d-lg-block d-md-block"><h2>Примечание</h2></div>
                        <div class="th"><h2>Стоимость</h2></div>
                    </div>
                </div>
                <div class="tbody">
                    @foreach($category->pages as $service)
                        <div class="tr">
                            <div class="td"><h2>{{$service->title}}</h2></div>
                            <div class="td d-none d-lg-block d-md-block"><h2>{{$service->note}}</h2></div>
                            <div class="td"><h2 class="text-gray text-nowrap">{{$service->price}} ₽</h2></div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    @include('include.seoText',['text' => $page->seo->text, 'body' => $page->seo->body])
@endsection
