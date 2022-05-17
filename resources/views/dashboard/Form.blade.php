@extends('dashboard.layouts.master')
@section('css')
@endsection
@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <body>


        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">

                <!-- row -->
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Auto-sizing</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                <form>
                                    <div class="form-row align-items-center">
                                        <div class="col-auto">
                                            <h4 class="card-title">Name</h4>
                                            <input type="text" class="form-control mb-2" name="name" placeholder="Name">
                                        </div>
                                        <div class="col-auto">
                                            <h4 class="card-title">email</h4>
                                            <input type="email" class="form-control mb-2" name="email" placeholder="email">
                                        </div>
                                        <div class="col-auto">
                                            <h4 class="card-title">Password</h4>
                                            <input type="password" class="form-control mb-2" name="password" placeholder="password">
                                        </div>
                                        <div class="col-auto">
                                            <h4 class="card-title">phone</h4>
                                            <input type="phone" class="form-control mb-2" name="phone" placeholder="phone">
                                        </div>

                                        <div class="col-auto">
                                            <h4 class="card-title">Start Date</h4>
                                            <input type="date" name="start_date" id="date" class="form-control"  >
                                        </div>

                                        <div class="col-auto">
                                            <h4 class="card-title">End Date</h4>
                                            <input type="date" name="end_date" id="date" class="form-control"  >
                                        </div>

                                        <br>
                                        <br>
                                        <br>
                                        <br>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mb-2">Create </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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
