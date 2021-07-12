@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{{__(ucfirst($parent->name))}}</h6>
            </div>
            <div class="card-body">
                @includeWhen($page,'admin.include.post',[
                    'image' => in_array($parent->name,[
                        \App\Models\Page::BLOG,
                        \App\Models\Page::NEWS,
                        \App\Models\Page::CASES,
                        \App\Models\Page::REQUESTS,
                        \App\Models\Page::SERVICES,
                    ]),
                     'price'=> in_array($parent->name,[
                        \App\Models\Page::SERVICES
                    ]),
                    'desc'=> in_array($parent->name,[
                        \App\Models\Page::CASES,
                        \App\Models\Page::REQUESTS
                    ]),
                    'body'=> !in_array($parent->name,[
                        \App\Models\Page::ADVANTAGE,
                    ])
                ])
            </div>
        </div>
    </div>
@endsection
