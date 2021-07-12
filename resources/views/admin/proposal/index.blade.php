@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{{__('Proposals')}}</h6>
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
                            <th>{{__("Phone number")}}</th>
                            <th>{{__("Actions")}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($proposals as $proposal)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$proposal->name ?? "АНОНИМ"}}</td>
                                <td><a class="btn btn-link" href="tel:{{$proposal->tel}}">{{$proposal->tel}}</a></td>
                                <td>
                                    <button class="btn btn-sm btn-outline-danger"
                                            data-toggle="modal"
                                            data-target="#deleteItemModal"
                                            data-url="{{route("admin.proposal.destroy",$proposal->id)}}">
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
