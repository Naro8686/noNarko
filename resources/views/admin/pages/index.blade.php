@extends('layouts.admin')

@if(!is_null($page->seo))
    @if($page->name === 'home')
@section('ourServices')
    <div class="form-group row">
        <label for="services" class="col-lg-2 control-label">{{__('ourServices')}}</label>
        <div class="col-lg-10">
            <div class="dropdown bootstrap-select show-tick form-control">
                <select id="services" name="page[services][]"
                        class="selectpicker form-control @error('page.services.*') is-invalid @enderror"
                        multiple="" data-selected-text-format="count">
                    @foreach($serviceCategories->children as $category)
                        <optgroup label="{{$category->name}}">
                            @foreach($category->pages as $service)
                                <option @if($page->services()->where('id',$service->id)->exists())
                                        selected @endif
                                        value="{{$service->id}}">{{$service->title}}</option>
                            @endforeach
                        </optgroup>
                    @endforeach
                </select>
            </div>
            @error('page.services.*')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
@stop
@endif

@section('advantages')
    <div class="form-group row">
        <label for="services" class="col-lg-2 control-label">{{__('Advantage')}}</label>
        <div class="col-lg-10">
            <div class="dropdown bootstrap-select show-tick form-control">
                <select id="advantages" name="page[advantages][]"
                        class="selectpicker form-control @error('page.advantages.*') is-invalid @enderror"
                        multiple=""
                        data-selected-text-format="count">
                    @foreach($advantages->pages as $advantage)
                        <option @if($page->advantages()->where('id',$advantage->id)->exists())
                                selected @endif
                                value="{{$advantage->id}}">{{$advantage->title}}</option>
                    @endforeach
                </select>
            </div>
            @error('page.advantages.*')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
@stop
@endif
@section('content')
    @if($page->exists)
        @includeWhen(!in_array($page->name,["error404","advantage","ourServices","treatmentSteps","submitApplication","giveFeedback"]),'admin.include.seo',['seo' => $page->seo])
        @includeWhen(true,'admin.include.content',['imgExists' => in_array($page->name,['about','submitApplication'])])
    @endif
@endsection
