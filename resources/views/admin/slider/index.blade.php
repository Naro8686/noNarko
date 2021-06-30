@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Слайдер</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-sm table-bordered text-center" id="dataTable" width="100%"
                           cellspacing="0">
                        <thead>
                        <tr>
                            <th>{{__("ID")}}</th>
                            <th>{{__("Image")}}</th>
                            <th>{{__("Title")}}</th>
                            <th>{{__("Description")}}</th>
                            <th>{{__("Actions")}}</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th colspan="5">
                                <a href="{{route('admin.slider.create')}}"
                                   class="btn btn-sm btn-block btn-outline-success">Добавит <i
                                        class="fa fa-plus-circle"></i></a>
                            </th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($sliders as $slider)
                            <tr>
                                <td>{{$slider->id}}</td>
                                <td><img class="img-thumbnail" src="{{asset($slider->img)}}" alt=""></td>
                                <td>{{$slider->title}}</td>
                                <td>{{$slider->desc}}</td>
                                <td>
                                    <a class="btn btn-sm btn-outline-info"
                                       href="{{route('admin.slider.edit',$slider->id)}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <button class="btn btn-sm btn-outline-danger"
                                            data-toggle="modal"
                                            data-target="#deleteItemModal"
                                            data-url="{{route('admin.slider.destroy',$slider->id)}}">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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
                    targets: [4, 1]
                }],
                //order: [[0, 'asc']]
            });
        });
    </script>
@endpush
