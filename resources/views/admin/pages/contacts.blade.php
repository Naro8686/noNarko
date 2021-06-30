@extends('layouts.admin')

@section('content')
    @include('admin.include.meta',['seo' => $page->seo()])
    @include('admin.include.content')
    <div class="container-fluid mt-5">
        <form class="col-md-12" action="{{ route('admin.pages.contacts') }}" method="POST"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-row">
                <h2 class="col-md-12">{{__('Contacts')}}</h2>
                <div class="col-md-12 mb-3">
                    <label>{{__('Phone number')}}</label>
                    <input name="phone"
                           placeholder="+7 (011) 222 33 44"
                           type="tel"
                           value="{{old('phone') ?? $contacts->phone}}"
                           class="form-control @error('phone') is-invalid @enderror"
                           required>{{old('phone')}}
                    @error('phone')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12 mb-3">
                    <label>{{__('Address')}}</label>
                    <input name="address"
                           type="text"
                           value="{{old('address') ?? $contacts->address}}"
                           class="form-control @error('address') is-invalid @enderror"
                           required>{{old('address')}}
                    @error('address')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12 mb-3">
                    <label>{{__('Email')}}</label>
                    <input name="email"
                           type="email"
                           value="{{old('email') ?? $contacts->email}}"
                           class="form-control @error('email') is-invalid @enderror"
                           required>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <h2 class="col-md-12">{{__('Schedule')}}</h2>
                <div class="col-md-6 mb-3">
                    <label>{{__('From')}}</label>
                    <input name="schedule[from]"
                           type="time"
                           placeholder="09:00"
                           value="{{old('schedule.from') ?? $contacts->schedule['from']}}"
                           class="form-control @error('schedule.from') is-invalid @enderror"
                           required>
                    @error('schedule.from')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label>{{__('To')}}</label>
                    <input name="schedule[to]"
                           type="time"
                           placeholder="18:00"
                           value="{{old('schedule.to') ?? $contacts->schedule['to']}}"
                           class="form-control @error('schedule.to') is-invalid @enderror"
                           required>
                    @error('schedule.to')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <h2>{{__('We are in social networks')}}</h2>
                @foreach($contacts->social as $name => $social)
                    <div class="col-md-12 mb-3">
                        <label>{{$social['title']}}</label>
                        <input name="social[{{$name}}][link]"
                               value="{{old("social.$name.link") ?? $social['link']}}"
                               placeholder="https://www.example.com"
                               class="form-control @error("social.$name.link") is-invalid @enderror"
                               required>
                        @error("social.$name.link")
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                @endforeach
            </div>
            <div class="form-row">
                <button class="btn btn-primary btn-block " type="submit">{{__('Save')}}</button>
            </div>
        </form>
    </div>
@endsection
