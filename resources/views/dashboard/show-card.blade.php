@extends('dashboard.layouts.master')
@section('css')
@endsection
@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <body>

    <div class="content-body">
        <div class="container-fluid">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered verticle-middle table-responsive-sm">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Start Date</th>
                            <th scope="col">End Date</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($card as $cards)
                            <tr>
                                <td>{{$cards->id}}</td>
                                <td>{{$cards->name}}</td>
                                <td>{{$cards->email}}</td>
                                <td>{{$cards->phone}}</td>
                                <td>{{$cards->start_date}}</td>
                                <td>{{$cards->end_date}}</td>
                            </tr>
                        @endforeach()
                        <td>

                            <div class="row">
                                <div class="col-sm">
                                    <a  class="btn btn-success" href="#"> Edit </a>
                                    <a  class="btn btn-warning" href="#"> Soft delete </a>
                                    <a  class="btn btn-primary" href="#"> Show</a>
                                </div>


                        </td>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->




@endsection
@section('js-script')
@endsection
