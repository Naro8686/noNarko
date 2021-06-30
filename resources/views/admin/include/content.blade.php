<div class="container-fluid mt-1">
    <div id="accordionPage" class="col-md-12">
        <div class="card">
            <div class="card-header" id="headingPage">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
                        aria-controls="collapsePage">
                    {{__('Page')}}
                </button>
            </div>
            <div id="collapsePage" class="collapse show" aria-labelledby="headingPage" data-parent="#accordionPage">
                <div class="card-body">
                    <form class="col-md-12" action="{{route('admin.pages.update',$page->id)}}" method="POST"
                          enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <input type="hidden" name="page[id]" value="{{$page->id}}">
                        <input type="hidden" name="page[table]" value="pages">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label>{{__('Title')}}</label>
                                <input name="page[title]" value="{{old('page.title') ?? $page->title}}"
                                       class="form-control @error('page.title') is-invalid @enderror" required>
                                @error('page.title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label>{{__('Body')}}</label>
                                <textarea rows="7" name="page[body]"
                                          class="ckeditor form-control @error('page.body') is-invalid @enderror"
                                          required>{!! old('page.body') ?? $page->body !!}</textarea>
                                @error('page.body')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        @if(isset($imgExists) && $imgExists)
                            <div class="form-row">
                                <div class="col-md-12">
                                    <h4>{{__('Image')}}</h4>
                                    <hr>
                                </div>
                                <div class="col-md-12 mb-3 text-center">
                                    @if($page->image)
                                        <img class="img-thumbnail mb-3" src="{{asset($page->image)}}" alt="">
                                    @endif
                                    <div class="custom-file">
                                        <input type="file" name="page[file]"
                                               class="custom-file-input @error('page.file') is-invalid @enderror"
                                               id="uploadImage">
                                        <label class="custom-file-label" for="uploadImage">Выбрать файл</label>
                                        @error('page.file')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="form-row">
                            <button class="btn btn-primary btn-block " type="submit">{{__('Save')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
