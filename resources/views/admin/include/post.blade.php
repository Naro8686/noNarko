<div id="collapsePage" class="collapse show" aria-labelledby="headingPage" data-parent="#accordionPage">
    <div class="card-body">

        <form class="col-md-12"
              action="{{$page->exists?route("admin.$parent->name.update",$page->id):route("admin.$parent->name.store")}}"
              method="POST"
              enctype="multipart/form-data">
            @csrf
            @if($page->exists)
                @method('PUT')
                <input type="hidden" name="page[id]" value="{{$page->id}}">
            @endif

            @if(in_array($parent->name,[\App\Models\Page::SERVICES]))
                <div class="form-group row">
                    <label for="blog" class="col-lg-2 control-label">{{__('Blog')}}</label>
                    <div class="col-lg-10">
                        <div class="dropdown bootstrap-select show-tick form-control">
                            <select id="blog" name="page[blog][]"
                                    class="selectpicker form-control @error('page.blog.*') is-invalid @enderror"
                                    multiple="" data-selected-text-format="count">
                                @foreach($blogCategories as $parentCategory)
                                    <optgroup label="{{$parentCategory->name}}">
                                        @foreach($parentCategory->children as $childCategory)
                                            <optgroup label="{{$childCategory->name}}" data-subtext="{{$parentCategory->name}}">
                                                @foreach($childCategory->pages as $blog)
                                                    <option
                                                        @if(($page->exists && $page->blog()->where('id',$blog->id)->exists()))
                                                        selected @endif
                                                        value="{{$blog->id}}">{{$blog->title}}</option>
                                                @endforeach
                                            </optgroup>
                                        @endforeach
                                    </optgroup>
                                @endforeach
                            </select>
                        </div>
                        @error('page.blog.*')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="services" class="col-lg-2 control-label">{{__('Advantage')}}</label>
                    <div class="col-lg-10">
                        <div class="dropdown bootstrap-select show-tick form-control">
                            <select id="advantages" name="page[advantages][]"
                                    class="selectpicker form-control @error('page.advantages.*') is-invalid @enderror"
                                    multiple=""
                                    data-selected-text-format="count">
                                @foreach($advantages->pages as $advantage)
                                    <option
                                        @if(($page->exists && $page->advantages()->where('id',$advantage->id)->exists()))
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
            @endif
            @if(!in_array($parent->name,[\App\Models\Page::ADVANTAGE,\App\Models\Page::REQUESTS,\App\Models\Page::WRITE_DOCTOR]))
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label for="category">{{__('Category')}}</label>
                        <select required name="page[category_id]" id="category"
                                class="form-control @error('page.category_id') is-invalid @enderror">
                            @if(in_array($parent->name,[
                                \App\Models\Page::BLOG,
                                \App\Models\Page::NEWS,
                                \App\Models\Page::CASES,
                            ]))
                                @foreach($parent->children as $category)
                                    <optgroup label="{{$category->name}}">
                                        @foreach($category->children as $children)

                                            <option value="{{$children->id}}"
                                                    @if($children->id == old('page.category_id') || $children->id == $page->category_id) selected @endif>{{$children->name}}</option>
                                        @endforeach
                                    </optgroup>
                                @endforeach
                            @else
                                @foreach($parent->children as $children)
                                    <option value="{{$children->id}}"
                                            @if($children->id == old('page.category_id') || $children->id == $page->category_id) selected @endif>{{$children->name}}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('page.category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            @else
                <input type="hidden" name="page[category_id]" value="{{$parent->id}}">
            @endif
            <div class="form-row">
                <div class="col-md-12 mb-3">
                    @switch($parent->name)
                        @case(\App\Models\Page::FAQ)
                        <label>{{__('Question')}}</label>
                        @break
                        @default
                        <label>{{__('Title')}}</label>
                        @break
                    @endswitch
                    <input name="page[title]" value="{{old('page.title') ?? $page->title}}"
                           class="form-control @error('page.title') is-invalid @enderror @error('generate.slug') is-invalid @enderror"
                           required>
                    @error('page.title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    @error('generate.slug')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            @if($price)
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label>{{__('Note')}}</label>
                        <input name="page[note]" value="{{old('page.note') ?? $page->note}}"
                               class="form-control @error('page.note') is-invalid @enderror" required>
                        @error('page.note')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label>{{__('Price')}}</label>
                        <input name="page[price]" value="{{old('page.price') ?? $page->price}}" type="number"
                               class="form-control @error('page.price') is-invalid @enderror" required>
                        @error('page.price')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            @endif
            @if($desc)
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        <label>{{__('Short Desc')}}</label>
                        <input name="page[desc]" value="{{old('page.desc') ?? $page->desc}}"
                               class="form-control @error('page.desc') is-invalid @enderror" required>
                        @error('page.desc')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            @endif
            @if($body)
                <div class="form-row">
                    <div class="col-md-12 mb-3">
                        @switch($parent->name)
                            @case(\App\Models\Page::STEPS)
                            <label>{{__('Link')}}</label>
                            <input class="form-control @error('page.body') is-invalid @enderror"
                                   value="{{old('page.body') ?? $page->body}}"
                                   name="page[body]"
                                   type="text">
                            @break
                            @case(\App\Models\Page::FAQ)
                            <label>{{__('Answer')}}</label>
                            <input class="form-control @error('page.body') is-invalid @enderror"
                                   value="{{old('page.body') ?? $page->body}}"
                                   name="page[body]"
                                   type="text">
                            @break
                            @default
                            <label>{{__('Content')}}</label>
                            <textarea rows="7" name="page[body]"
                                      class="ckeditor form-control @error('page.body') is-invalid @enderror"
                                      required>{{old('page.body') ?? $page->body}}</textarea>
                            @break
                        @endswitch

                        @error('page.body')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            @endif
            @if($image)
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
