@extends('dashboard.layouts.master')
@section('css')
@endsection
@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="container">
        @if ($message = Session::get('success'))
            <div class="alert alert-primary" role="alert">
                {{$message}}
            </div>
        @endif

    </div>
    <div class="content-body">
        <div class="container-fluid">
            <table class="table table-striped">
                <a href="{{route('admin.create-card')}}" class="btn btn-primary float-right " > Create Cards</a>
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
                        @foreach($cards ->Images as $image)
                            <td><img src="{{URL::asset('images/image')}}/{{$image->image_path}}" height="60"></td>
                        @endforeach

                        <td>{{$cards->name}}</td>
                        <td>{{$cards->email}}</td>
                        <td>{{$cards->phone}}</td>
                        <td>{{$cards->start_date}}</td>
                        <td>{{$cards->end_date}}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal{{$cards->id}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                </svg>
                            </a>
                            <a href="" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#updateModal{{$cards->id}}" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                </svg>
                            </a>
                        </td>

                    </tr>
                    <div class="modal fade" id="exampleModal{{$cards->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="{{route('admin.delete-card.delete')}}" method="post">

                                    @csrf
                                <div class="modal-body">
                                    <input type="hidden" value="{{$cards->id}}" name="id">
                                   هل انت متاكد من عمليه الحذف ؟
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="updateModal{{$cards->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                                <form action="{{route('admin.update-card.update')}}" method="post">
                                    @csrf
                                    <div class="modal-body">
                                        <input type="hidden" value="{{$cards->id}}" name="id_update">
                                        <div class="row">
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-check-label" >name</label>
                                                <input class="form-control" type="text" name="name" value="{{$cards->name}}">
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-check-label" >email</label>
                                                <input class="form-control" type="text" name="email" value="{{$cards->email}}">
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-check-label" >phone</label>
                                                <input class="form-control" type="text" name="phone" value="{{$cards->phone}}">
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-check-label" >Password</label>
                                                <input class="form-control" type="text" name="password">
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-check-label" >start date</label>
                                                <input class="form-control" type="text" name="start_date" value="{{$cards->start_date}}">
                                            </div>
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-check-label"  >End date</label>
                                                <select name="end_date" class="form-control" id="sel1">
                                                    <option value="1" {{ ($cards->year=="1")? "checked" : "" }}>
                                                        1 Years
                                                    </option>
                                                    <option value="2" {{ ($cards->year=="2")? "checked" : "" }}>
                                                        2 Years
                                                    </option>
                                                    <option value="3"{{ ($cards->year=="3")? "checked" : "" }}>
                                                        3 Years
                                                    </option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                @endforeach

                </tbody>
            </table>
    </div>
    <!--**********************************
        Content body end
    ***********************************-->




@endsection
@section('js-script')
@endsection
