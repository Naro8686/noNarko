@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{{__('Feedbacks')}}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-sm table-bordered text-center" id="dataTable"
                           width="100%"
                           cellspacing="0">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>{{__("Name")}}</th>
                            <th>{{__("Text")}}</th>
                            <th>Проходили ли лечение?</th>
                            <th>{{__("Actions")}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($feedbacks as $feedback)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$feedback->name}}</td>
                                <td>{{$feedback->text}}</td>
                                <td>{{is_null($feedback->question)?"Нет ответа ":__(ucfirst($feedback->question))}}</td>
                                <td>
                                    <button class="btn btn-sm btn-outline-danger"
                                            data-toggle="modal"
                                            data-target="#deleteItemModal"
                                            data-url="{{route("admin.feedback.destroy",$feedback->id)}}">
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
                    targets: [3]
                }],
                //order: [[0, 'asc']]
            });
        });
    </script>
@endpush
