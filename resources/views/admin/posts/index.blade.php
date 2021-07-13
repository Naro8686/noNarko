@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{{__(ucfirst($parent->name))}}</h6>
            </div>
            @if(!in_array($parent->name,[\App\Models\Page::ADVANTAGE,\App\Models\Page::REQUESTS,\App\Models\Page::WRITE_DOCTOR]))
                <div class="card-body">
                    <h6 class="mb-3 font-weight-bold text-primary">{{__('Categories')}}</h6>
                    <div class="accordion" id="accordionBlog">
                        @foreach($parent->children as $child)
                            <div class="card">
                                <div class="card-header position-relative" id="heading_{{$child->id}}">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left text-decoration-none"
                                                type="button"
                                                data-toggle="collapse" data-target="#collapse_{{$child->id}}"
                                                aria-expanded="false"
                                                aria-controls="collapse_{{$child->id}}">
                                            {{$child->name}}
                                        </button>
                                    </h2>
                                    <button style="position: absolute;right: 2px;top: 1px"
                                            class="btn btn-sm btn-outline-danger"
                                            data-toggle="modal"
                                            data-target="#deleteItemModal"
                                            data-url="{{route('admin.category.destroy',$child->id)}}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                                @if(in_array($parent->name, [\App\Models\Page::BLOG, \App\Models\Page::NEWS, \App\Models\Page::CASES]))
                                    <div id="collapse_{{$child->id}}" class="collapse"
                                         aria-labelledby="heading_{{$child->id}}"
                                         data-parent="#accordionBlog">
                                        <div class="card-body">
                                            <ul class="list-group">
                                                @foreach($child->children as $children)
                                                    <li class="list-group-item">
                                                        <h5>{{$children->name}}</h5>
                                                        <button style="position: absolute;right: 2px;top: 1px"
                                                                class="btn btn-sm btn-outline-danger"
                                                                data-toggle="modal"
                                                                data-target="#deleteItemModal"
                                                                data-url="{{route('admin.category.destroy',$children->id)}}">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </li>
                                                @endforeach
                                                <li class="list-group-item active">
                                                    <form class="form" action="{{route('admin.category.store')}}"
                                                          method="POST">
                                                        @csrf
                                                        <input type="hidden" name="parent_id" value="{{$child->id}}">
                                                        <div class="form-group">
                                                            <input type="text" name="name"
                                                                   class="form-control @error('name') is-invalid @enderror"
                                                                   id="input_{{$child->id}}" value="{{old('name')}}"
                                                                   placeholder="{{__('SubCategory')}}" required>
                                                            @error('name')
                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <button type="submit"
                                                                    class="btn btn-block btn-success">{{__('Add')}}</button>
                                                        </div>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                    <ul class="list-group mt-2">
                        <li class="list-group-item active">
                            <form class="form" action="{{route('admin.category.store')}}" method="POST">
                                @csrf
                                <input type="hidden" name="parent_id" value="{{$parent->id}}">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                           name="name" id="input_{{$parent->id}}" value="{{old('name')}}"
                                           placeholder="{{__('Category')}}" required>
                                    @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn btn-block btn-success">{{__('Add')}}</button>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    @switch($parent->name)
                        @case(\App\Models\Page::FAQ)
                        <table class="table table-striped table-sm table-bordered text-center" id="dataTable"
                               width="100%"
                               cellspacing="0">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>{{__("Question")}}</th>
                                <th>{{__("Answer")}}</th>
                                <th>{{__("Actions")}}</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th colspan="4">
                                    <a href="{{route("admin.$parent->name.create")}}"
                                       class="btn btn-sm btn-block btn-outline-success">Добавит <i
                                            class="fa fa-plus-circle"></i></a>
                                </th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{Str::limit(strip_tags($post->body),20)}}</td>
                                    <td>
                                        <a class="btn btn-sm btn-outline-info"
                                           href="{{route("admin.$parent->name.edit",$post->id)}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <button class="btn btn-sm btn-outline-danger"
                                                data-toggle="modal"
                                                data-target="#deleteItemModal"
                                                data-url="{{route("admin.$parent->name.destroy",$post->id)}}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @break
                        @case(\App\Models\Page::ABC)
                        <table class="table table-striped table-sm table-bordered text-center" id="dataTable"
                               width="100%"
                               cellspacing="0">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>{{__("Title")}}</th>
                                <th>{{__("Content")}}</th>
                                <th>{{__("Actions")}}</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th colspan="4">
                                    <a href="{{route("admin.$parent->name.create")}}"
                                       class="btn btn-sm btn-block btn-outline-success">Добавит <i
                                            class="fa fa-plus-circle"></i></a>
                                </th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{Str::limit(strip_tags($post->body),20)}}</td>
                                    <td>
                                        <a class="btn btn-sm btn-outline-info"
                                           href="{{route("admin.$parent->name.edit",$post->id)}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <button class="btn btn-sm btn-outline-danger"
                                                data-toggle="modal"
                                                data-target="#deleteItemModal"
                                                data-url="{{route("admin.$parent->name.destroy",$post->id)}}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @break
                        @case(\App\Models\Page::ADVANTAGE)
                        <table class="table table-striped table-sm table-bordered text-center" id="dataTable"
                               width="100%"
                               cellspacing="0">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>{{__("Title")}}</th>
                                <th>{{__("Actions")}}</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th colspan="3">
                                    <a href="{{route("admin.$parent->name.create")}}"
                                       class="btn btn-sm btn-block btn-outline-success">Добавит <i
                                            class="fa fa-plus-circle"></i></a>
                                </th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>
                                        <a class="btn btn-sm btn-outline-info"
                                           href="{{route("admin.$parent->name.edit",$post->id)}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <button class="btn btn-sm btn-outline-danger"
                                                data-toggle="modal"
                                                data-target="#deleteItemModal"
                                                data-url="{{route("admin.$parent->name.destroy",$post->id)}}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @break
                        @case(\App\Models\Page::WRITE_DOCTOR)
                        <table class="table table-striped table-sm table-bordered text-center" id="dataTable"
                               width="100%"
                               cellspacing="0">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>{{__("Title")}}</th>
                                <th>{{__("Content")}}</th>
                                <th>{{__("Actions")}}</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th colspan="4">
                                    <a href="{{route("admin.$parent->name.create")}}"
                                       class="btn btn-sm btn-block btn-outline-success">Добавит <i
                                            class="fa fa-plus-circle"></i></a>
                                </th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{Str::limit(strip_tags($post->body),20)}}</td>
                                    <td>
                                        <a class="btn btn-sm btn-outline-info"
                                           href="{{route("admin.$parent->name.edit",$post->id)}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <button class="btn btn-sm btn-outline-danger"
                                                data-toggle="modal"
                                                data-target="#deleteItemModal"
                                                data-url="{{route("admin.$parent->name.destroy",$post->id)}}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @break
                        @case(\App\Models\Page::STEPS)
                        <table class="table table-striped table-sm table-bordered text-center" id="dataTable"
                               width="100%"
                               cellspacing="0">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>{{__("Title")}}</th>
                                <th>{{__("Link")}}</th>
                                <th>{{__("Actions")}}</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th colspan="4">
                                    <a href="{{route("admin.$parent->name.create")}}"
                                       class="btn btn-sm btn-block btn-outline-success">Добавит <i
                                            class="fa fa-plus-circle"></i></a>
                                </th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$post->title}}</td>
                                    <td><a class="btn btn-link" href="{{$post->body}}">{{$post->body}}</a></td>
                                    <td>
                                        <a class="btn btn-sm btn-outline-info"
                                           href="{{route("admin.$parent->name.edit",$post->id)}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <button class="btn btn-sm btn-outline-danger"
                                                data-toggle="modal"
                                                data-target="#deleteItemModal"
                                                data-url="{{route("admin.$parent->name.destroy",$post->id)}}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @break
                        @default
                        <table class="table table-striped table-sm table-bordered text-center" id="dataTable"
                               width="100%"
                               cellspacing="0">
                            <thead>
                            <tr>
                                <th>№</th>
                                <th>{{__("Image")}}</th>
                                <th>{{__("Title")}}</th>
                                <th>{{__("Content")}}</th>
                                <th>{{__("Actions")}}</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th colspan="5">
                                    <a href="{{route("admin.$parent->name.create")}}"
                                       class="btn btn-sm btn-block btn-outline-success">Добавит <i
                                            class="fa fa-plus-circle"></i></a>
                                </th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td><img class="img-thumbnail" src="{{asset($post->image)}}" alt="image"></td>
                                    <td>{{$post->title}}</td>
                                    <td>{{Str::limit(strip_tags($post->body),20)}}</td>
                                    <td>
                                        <a class="btn btn-sm btn-outline-info"
                                           href="{{route("admin.$parent->name.edit",$post->id)}}">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <button class="btn btn-sm btn-outline-danger"
                                                data-toggle="modal"
                                                data-target="#deleteItemModal"
                                                data-url="{{route("admin.$parent->name.destroy",$post->id)}}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @break
                    @endswitch
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        $(document).ready(function () {
            $('#dataTable').DataTable({
                columnDefs: [{
                    orderable: false,
                    searchable: false,
                    targets: -1
                }],
            });
        });
    </script>
@endpush
