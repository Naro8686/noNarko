@extends('layouts.app')

@section('content')
    <div class="container">
        <ol class="history d-none d-lg-flex">
            <li><a href="{{route('home')}}">Главная</a></li>
            <li>Прайс на услуги</li>
        </ol>
        <h1 class="title mt-100">Прайс на услуги</h1>
        <p class="desc"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
            the industry's standard dummy text ever since the.</p>
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
    @include('include.seoText')
@endsection
