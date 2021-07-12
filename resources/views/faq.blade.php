@extends('layouts.app')

@section('content')
    <div class="container">
        @include('include.pageHistory')
        <h1 class="title mt-100">{{$page->title}}</h1>
        <div class="desc">{!! $page->body !!}</div>
    </div>
    <div class="container faq mt-100">
        <ul class="nav nav-pills nav-justified" id="faq" role="tablist">
            @foreach($category->children as $children)
                <li class="nav-item" role="presentation">
                    <a data-count-cross="3" class="nav-link @if($loop->first) active @endif"
                       id="menu-{{$children->id}}-tab" data-toggle="tab" href="#menu-{{$children->id}}" role="tab"
                       aria-controls="menu-{{$children->id}}" @if($loop->first) aria-selected="true"
                       @else aria-selected="false" @endif><h2>{{$children->name}}</h2></a>
                </li>
            @endforeach
        </ul>
        <div class="tab-content" id="faqContent">
            @foreach($category->children as $children)
                <div class="tab-pane fade @if($loop->first) show active @endif" id="menu-{{$children->id}}"
                     role="tabpanel"
                     aria-labelledby="menu-{{$children->id}}-tab">
                    <div class="accordion md-accordion" id="accordion-{{$children->id}}" role="tablist"
                         aria-multiselectable="true">
                        <!-- Accordion card -->
                        @foreach($children->pages as $post)
                            <div class="card">
                                <!-- Card header -->
                                <div class="card-header" role="tab" id="heading-{{$children->id}}-{{$post->id}}">
                                    <h2>{{$post->title}}</h2>
                                    <a data-toggle="collapse" data-parent="#accordion-{{$children->id}}"
                                       href="#collapse-{{$children->id}}-{{$post->id}}"
                                       aria-expanded="true"
                                       aria-controls="collapse-{{$children->id}}-{{$post->id}}" class="float-right">
                                        +
                                    </a>
                                </div>
                                <!-- Card body -->
                                <div id="collapse-{{$children->id}}-{{$post->id}}" class="collapse" role="tabpanel"
                                     aria-labelledby="heading-{{$children->id}}-{{$post->id}}"
                                     data-parent="#accordion-{{$children->id}}">
                                    <div class="card-body align-items-start">
                                        <span class="line"></span>
                                        <div>{!! $post->body !!}</div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    <!-- Accordion card -->
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('include.seoText',['text' => $page->seo->text, 'body' => $page->seo->body])
@endsection
