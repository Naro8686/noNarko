<div class="container-fluid">
    <div id="accordionSeo" class="col-md-12">
        <div class="card">
            <div class="card-header" id="headingSeo">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSeo" aria-expanded="true"
                        aria-controls="collapseSeo">
                    {{__('Seo')}}
                </button>
            </div>
            <div id="collapseSeo" class="collapse @if($errors->has('seo.slug') || $errors->has('seo.title') || $errors->has('seo.description') || $errors->has('seo.keywords')  || $errors->has('seo.text') || $errors->has('seo.body')) show @endif" aria-labelledby="headingSeo" data-parent="#accordionSeo">
                <div class="card-body">
                    <form class="col-md-12" action="{{route('admin.meta.update',$seo->id)}}" method="POST">
                        @method('PUT')
                        @csrf
                        <input type="hidden" value="{{$seo->id}}" name="seo[id]">
                        <input type="hidden" value="pages" name="seo[table]">
                        <div class="form-group row">
                            <label for="inputSlug" class="col-md-2 col-form-label">{{url('/')}}</label>
                            <div class="col-md-10">
                                <input name="seo[slug]" value="{{old('seo.slug') ?? $seo->slug}}" type="text"
                                       class="form-control @error('seo.slug') is-invalid @enderror" id="inputSlug"
                                       required>
                                @error('seo.slug')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="inputTitle" class="col-md-2 col-form-label">Title</label>
                            <div class="col-md-10">
                                <input name="seo[title]" value="{{old('seo.title') ?? $seo->title}}" type="text"
                                       class="form-control @error('seo.title') is-invalid @enderror" id="inputTitle"
                                       required>
                                @error('seo.title')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputDescription" class="col-md-2 col-form-label">Description</label>
                            <div class="col-md-10">
                                <input name="seo[description]" value="{{old('seo.description') ?? $seo->description}}"
                                       type="text" class="form-control @error('seo.description') is-invalid @enderror"
                                       id="inputDescription">
                                @error('seo.description')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputKeywords" class="col-md-2 col-form-label">Keywords</label>
                            <div class="col-md-10">
                                <input name="seo[keywords]" value="{{old('seo.keywords') ?? $seo->keywords}}"
                                       type="text" class="form-control @error('seo.keywords') is-invalid @enderror"
                                       id="inputKeywords" placeholder="text, text, text">
                                @error('seo.keywords')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label for="inputText" class="col-md-2 col-form-label">SEO text</label>
                            <div class="col-md-10">
                                <input name="seo[text]" value="{{old('seo.text') ?? $seo->text}}" type="text"
                                       class="form-control @error('seo.text') is-invalid @enderror" id="inputText"
                                       placeholder="text, text, text">
                                @error('seo.text')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputBody" class="col-md-2 col-form-label">SEO body</label>
                            <div class="col-md-10">
                                <textarea name="seo[body]"
                                          class="form-control ckeditor @error('seo.body') is-invalid @enderror"
                                          id="inputBody">{{old('seo.body') ?? $seo->body}}</textarea>
                                @error('seo.body')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-row">
                            <button class="btn btn-primary btn-block " type="submit">{{__('Save')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
