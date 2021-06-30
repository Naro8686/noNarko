@extends('layouts.app')

@section('content')
    <div class="container">
        @include('include.pageHistory')
        <h1 class="title mt-100">{{$page->title}}</h1>
        <div class="desc">{!! $page->body !!}</div>
    </div>
    <div class="container faq mt-100">
        <ul class="nav nav-pills nav-justified" id="faq" role="tablist">
            <li class="nav-item" role="presentation">
                <a data-count-cross="3" class="nav-link active" id="menu-1-tab" data-toggle="tab" href="#menu-1" role="tab"
                   aria-controls="menu-1" aria-selected="true"><h2>ЛЕЧЕНИЕ ПСИХИКИ</h2></a>
            </li>
            <li class="nav-item" role="presentation">
                <a data-count-cross="3" class="nav-link" id="menu-2-tab" data-toggle="tab" href="#menu-2" role="tab"
                   aria-controls="menu-2" aria-selected="false"><h2>ЛЕЧЕНИЕ ПСИХИКИ</h2></a>
            </li>
            <li class="nav-item" role="presentation">
                <a data-count-cross="3" class="nav-link" id="menu-3-tab" data-toggle="tab" href="#menu-3" role="tab"
                   aria-controls="menu-3" aria-selected="false"><h2>ЛЕЧЕНИЕ ПСИХИКИ</h2></a>
            </li>
        </ul>
        <div class="tab-content" id="faqContent">
            <div class="tab-pane fade show active" id="menu-1" role="tabpanel" aria-labelledby="menu-1-tab">
                <div class="accordion md-accordion" id="accordion-1" role="tablist" aria-multiselectable="true">
                    <!-- Accordion card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading-1-1">
                            <h2>Лечение психики после употребления наркотиков?</h2>
                            <a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1-1" aria-expanded="true"
                               aria-controls="collapse-1-1" class="float-right">
                                +
                            </a>
                        </div>
                        <!-- Card body -->
                        <div id="collapse-1-1" class="collapse" role="tabpanel" aria-labelledby="heading-1-1"
                             data-parent="#accordion-1">
                            <div class="card-body">
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>
                    <!-- Accordion card -->

                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading-1-2">
                            <h2>Лечение психики после употребления наркотиков?</h2>
                            <a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1-2" aria-expanded="true"
                               aria-controls="collapse-1-2" class="float-right">
                                +
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse-1-2" class="collapse" role="tabpanel" aria-labelledby="heading-1-2"
                             data-parent="#accordion-1">
                            <div class="card-body"><span class="line"></span></div>
                        </div>

                    </div>
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading-1-3">
                            <h2>Лечение психики после употребления наркотиков?</h2>
                            <a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1-3" aria-expanded="true"
                               aria-controls="collapse-1-3" class="float-right">
                                +
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse-1-3" class="collapse" role="tabpanel" aria-labelledby="heading-1-3"
                             data-parent="#accordion-1">
                            <div class="card-body"><span class="line"></span></div>
                        </div>

                    </div>
                    <div class="card">

                        <!-- Card header -->
                        <div class="card-header" role="tab" id="heading-1-4">
                            <h2>Лечение психики после употребления наркотиков?</h2>
                            <a data-toggle="collapse" data-parent="#accordion-1" href="#collapse-1-4" aria-expanded="true"
                               aria-controls="collapse-1-4" class="float-right">
                                +
                            </a>
                        </div>

                        <!-- Card body -->
                        <div id="collapse-1-4" class="collapse" role="tabpanel" aria-labelledby="heading-1-4"
                             data-parent="#accordion-1">
                            <div class="card-body"><span class="line"></span></div>
                        </div>

                    </div>

                </div>
            </div>
            <div class="tab-pane fade" id="menu-2" role="tabpanel" aria-labelledby="menu-2-tab">
                <div class="accordion md-accordion" id="accordion-2" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="heading-2-1">
                            <h2>Лечение психики после употребления наркотиков?</h2>
                            <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-2-1" aria-expanded="true"
                               aria-controls="collapse-2-1" class="float-right">
                                +
                            </a>
                        </div>
                        <div id="collapse-2-1" class="collapse" role="tabpanel" aria-labelledby="heading-2-1"
                             data-parent="#accordion-2">
                            <div class="card-body">
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" role="tab" id="heading-2-2">
                            <h2>Лечение психики после употребления наркотиков?</h2>
                            <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-2-2" aria-expanded="true"
                               aria-controls="collapse-2-2" class="float-right">
                                +
                            </a>
                        </div>
                        <div id="collapse-2-2" class="collapse" role="tabpanel" aria-labelledby="heading-2-2"
                             data-parent="#accordion-2">
                            <div class="card-body"><span class="line"></span></div>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="heading-2-3">
                            <h2>Лечение психики после употребления наркотиков?</h2>
                            <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-2-3" aria-expanded="true"
                               aria-controls="collapse-2-3" class="float-right">
                                +
                            </a>
                        </div>
                        <div id="collapse-2-3" class="collapse" role="tabpanel" aria-labelledby="heading-2-3"
                             data-parent="#accordion-2">
                            <div class="card-body"><span class="line"></span></div>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="heading-2-4">
                            <h2>Лечение психики после употребления наркотиков?</h2>
                            <a data-toggle="collapse" data-parent="#accordion-2" href="#collapse-2-4" aria-expanded="true"
                               aria-controls="collapse-2-4" class="float-right">
                                +
                            </a>
                        </div>
                        <div id="collapse-2-4" class="collapse" role="tabpanel" aria-labelledby="heading-2-4"
                             data-parent="#accordion-2">
                            <div class="card-body"><span class="line"></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="menu-3" role="tabpanel" aria-labelledby="menu-3-tab">
                <div class="accordion md-accordion" id="accordion-3" role="tablist" aria-multiselectable="true">
                    <div class="card">
                        <div class="card-header" role="tab" id="heading-3-1">
                            <h2>Лечение психики после употребления наркотиков?</h2>
                            <a data-toggle="collapse" data-parent="#accordion-3" href="#collapse-3-1" aria-expanded="true"
                               aria-controls="collapse-3-1" class="float-right">
                                +
                            </a>
                        </div>
                        <div id="collapse-3-1" class="collapse" role="tabpanel" aria-labelledby="heading-3-1"
                             data-parent="#accordion-3">
                            <div class="card-body">
                                <span class="line"></span>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header" role="tab" id="heading-3-2">
                            <h2>Лечение психики после употребления наркотиков?</h2>
                            <a data-toggle="collapse" data-parent="#accordion-3" href="#collapse-3-2" aria-expanded="true"
                               aria-controls="collapse-3-2" class="float-right">
                                +
                            </a>
                        </div>
                        <div id="collapse-3-2" class="collapse" role="tabpanel" aria-labelledby="heading-3-2"
                             data-parent="#accordion-3">
                            <div class="card-body"><span class="line"></span></div>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="heading-3-3">
                            <h2>Лечение психики после употребления наркотиков?</h2>
                            <a data-toggle="collapse" data-parent="#accordion-3" href="#collapse-3-3" aria-expanded="true"
                               aria-controls="collapse-3-3" class="float-right">
                                +
                            </a>
                        </div>
                        <div id="collapse-3-3" class="collapse" role="tabpanel" aria-labelledby="heading-3-3"
                             data-parent="#accordion-3">
                            <div class="card-body"><span class="line"></span></div>
                        </div>

                    </div>
                    <div class="card">
                        <div class="card-header" role="tab" id="heading-3-4">
                            <h2>Лечение психики после употребления наркотиков?</h2>
                            <a data-toggle="collapse" data-parent="#accordion-3" href="#collapse-3-4" aria-expanded="true"
                               aria-controls="collapse-3-4" class="float-right">
                                +
                            </a>
                        </div>
                        <div id="collapse-3-4" class="collapse" role="tabpanel" aria-labelledby="heading-3-4"
                             data-parent="#accordion-3">
                            <div class="card-body"><span class="line"></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('include.seoText',['text' => $page->seoText, 'body' => $page->seoBody])
@endsection
