@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    <label>{{__('Title')}}</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}" required>
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-12 mb-3">
                    <label>{{__('Description')}}</label>
                    <textarea rows="5" name="desc" class="form-control @error('desc') is-invalid @enderror" required>{{old('desc')}}</textarea>
                    @error('desc')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <h4>{{__('Button')}}</h4>
                    <hr>
                </div>
                <div class="col-md-6 mb-3">
                    <label>{{__('Text')}}</label>
                    <input type="text" name="button[text]" class="form-control @error('button.text') is-invalid @enderror" value="{{old('button.text')}}" required>
                    @error('button.text')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label>{{__('Link')}}</label>
                    <input type="text" name="button[link]" class="form-control @error('button.link') is-invalid @enderror" value="{{old('button.link')}}" required>
                    @error('button.link')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <h4>{{__('Image')}}</h4>
                    <hr>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="custom-file">
                        <input type="file" name="file" class="custom-file-input @error('file') is-invalid @enderror" id="uploadImage" required>
                        <label class="custom-file-label" for="uploadImage">?????????????? ????????</label>
                        @error('file')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-row">
                <button class="btn btn-primary btn-block " type="submit">{{__('Save')}}</button>
            </div>
        </form>
    </div>
@endsection
