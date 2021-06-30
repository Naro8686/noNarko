@extends('layouts.app')

@section('content')
    <div class="container">
        @include('include.pageHistory')
        <h1 class="title mt-100">{{$page->title}}</h1>
        <div class="desc">{!! $page->body !!}</div>
        <h1 class="mt-100">Лечение наркомании</h1>
    </div>
    <div class="mt-5 container prices">
        <div class="table">
            <div class="thead">
                <div class="tr" data-count-cross="6">
                    <div class="th"><h2>Услуга</h2></div>
                    <div class="th"><h2>Стоимость</h2></div>
                </div>
            </div>
            <div class="tbody">
                <div class="tr">
                    <div class="td"><h2>Снятие наркотической ломки</h2></div>
                    <div class="td"><h2 class="text-gray">15000₽</h2> </div>
                </div>
                <div class="tr">
                    <div class="td"><h2>Снятие наркотической ломки</h2></div>
                    <div class="td"><h2 class="text-gray">15000₽</h2></div>
                </div>
            </div>
        </div>
        <div class="table">
            <div class="thead">
                <div class="tr" data-count-cross="6">
                    <div class="th"><h2>Услуга</h2></div>
                    <div class="th"><h2>Стоимость</h2></div>
                </div>
            </div>
            <div class="tbody">
                <div class="tr">
                    <div class="td"><h2>Снятие наркотической ломки</h2></div>

                    <div class="td"><h2 class="text-gray">15000₽</h2></div>
                </div>
                <div class="tr">
                    <div class="td"><h2>Снятие наркотической ломки</h2></div>
                    <div class="td"><h2 class="text-gray">15000₽</h2></div>
                </div>
            </div>
        </div>
    </div>
    @include('include.seoText',['text' => $page->seoText, 'body' => $page->seoBody])
@endsection
