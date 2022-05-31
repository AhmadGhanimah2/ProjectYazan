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

                <!-- row -->
                <div class="row">
                    <form action="{{route('admin.create-card.save')}}" method="post" enctype="multipart/form-data">
                        @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Card</h4>

                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="card-body">
                            <div class="basic-form">
                                    <div class="row" >
                                        <div class="col-lg-6">
                                            <h4 class="card-title">Name</h4>
                                            <input type="text" class="form-control mb-2" name="name" placeholder="Name" value="{{old('name')}}">
                                            @error('name')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6">
                                            <h4 class="card-title">email</h4>
                                            <input type="email" class="form-control mb-2" name="email" placeholder="email">
                                            @error('email')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6">
                                            <h4 class="card-title">Password</h4>
                                            <input type="password" class="form-control mb-2" name="password" placeholder="password">
                                            @error('password')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6">
                                            <h4 class="card-title">phone</h4>
                                            <input type="phone" class="form-control mb-2" name="phone" placeholder="phone">
                                            @error('phone')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="col-lg-6">
                                            <h4 class="card-title">Start Date</h4>
                                            <input type="date" name="start_date" id="date" value="{{date('Y-m-d')}}" class="form-control"  >
                                            @error('start_date')
                                            <div class="alert alert-danger" role="alert">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <h4 class="card-title">End Date</h4>
                                            <select name="end_date" class="form-control">
                                                <option value="1">
                                                    1 Years
                                                </option>
                                                <option value="2">
                                                    2 Years
                                                </option>
                                                <option value="3">
                                                    3 Years
                                                </option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-check-label" >image</label>
                                            <input class="form-control" type="file" name="img">
                                        </div>


                                    </div>
                            </div>
                        </div>

                        <div class="card-footer" >
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Create </button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>

            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->



@endsection
@section('js-script')
@endsection
