@extends('dashboard.layouts.master')
@section('css')
@endsection
@section('content')
    <!--**********************************
            Content body start
        ***********************************-->
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">

            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                       <h2>{{$card->name}}</h2>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Staff</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0);">Staff Profile</a></li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-xxl-4 col-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="text-center p-3 overlay-box" style="background-image: url(images/big/img1.jpg);">
                                    <div class="profile-photo">
                                        <img src="images/profile/profile.png" width="100" class="img-fluid rounded-circle" alt="">
                                    </div>
                                    <h3 class="mt-3 mb-1 text-white">{{$card ->Images}}</h3>

                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Email : </span> <strong class="text-muted">{{$card->email}}	</strong></li>
                                    <li class="list-group-item d-flex justify-content-between"><span class="mb-0">Phone</span> <strong class="text-muted">{{$card->phone}}	</strong></li>
                                    <li class="list-group-item d-flex justify-content-between"><span class="mb-0">When is Start Cart</span> <strong class="text-muted">{{$card->start_date}}</strong></li>
                                    <li class="list-group-item d-flex justify-content-between"><span class="mb-0">When is End Cart</span> <strong class="text-muted">{{$card->end_date}}</strong></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header d-block">
                                    <h4 class="card-title">Work Expertise </h4>
                                </div>
                                <div class="card-body">
                                    <h6>Photoshop
                                        <span class="pull-right">85%</span>
                                    </h6>
                                    <div class="progress ">
                                        <div class="progress-bar bg-danger progress-animated" style="width: 85%; height:6px;" role="progressbar">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                    <h6 class="mt-4">Code editor
                                        <span class="pull-right">90%</span>
                                    </h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-info progress-animated" style="width: 90%; height:6px;" role="progressbar">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                    <h6 class="mt-4">Illustrator
                                        <span class="pull-right">65%</span>
                                    </h6>
                                    <div class="progress">
                                        <div class="progress-bar bg-success progress-animated" style="width: 65%; height:6px;" role="progressbar">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-xxl-8 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-tab">
                                <div class="custom-tab-1">
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item"><a href="#about-me" data-toggle="tab" class="nav-link active show">About Me</a></li>
                                        <li class="nav-item"><a href="#my-posts" data-toggle="tab" class="nav-link">Posts</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="about-me" class="tab-pane fade active show">
                                            <div class="profile-about-me">
                                                <div class="pt-4 border-bottom-1 pb-4">
                                                    <form class="needs-validation" novalidate>
                                                        <div class="form-row">
                                                            <div class="col-md-4 mb-3">
                                                                <label for="validationCustom01">First name</label>
                                                                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                                                                <div class="valid-feedback">
                                                                    Looks good!
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <label for="validationCustom02">Last name</label>
                                                                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                                                                <div class="valid-feedback">
                                                                    Looks good!
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 mb-3">
                                                                <label for="validationCustomUsername">Username</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                                    </div>
                                                                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                                                    <div class="invalid-feedback">
                                                                        Please choose a username.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="col-md-6 mb-3">
                                                                <label for="validationCustom03">City</label>
                                                                <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                                                                <div class="invalid-feedback">
                                                                    Please provide a valid city.
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <label for="validationCustom04">State</label>
                                                                <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                                                                <div class="invalid-feedback">
                                                                    Please provide a valid state.
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <label for="validationCustom05">Zip</label>
                                                                <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                                                                <div class="invalid-feedback">
                                                                    Please provide a valid zip.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                                <label class="form-check-label" for="invalidCheck">
                                                                    Agree to terms and conditions
                                                                </label>
                                                                <div class="invalid-feedback">
                                                                    You must agree before submitting.
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button class="btn btn-primary" type="submit">Submit form</button>
                                                    </form>

                                                </div>

                                            </div>

                                            <div class="profile-lang pt-5 border-bottom-1 pb-5">
                                                <h4 class="text-primary mb-4">Language</h4><a href="javascript:void()" class="text-muted pr-3 f-s-16"><i
                                                        class="flag-icon flag-icon-us"></i> English</a> <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i
                                                        class="flag-icon flag-icon-fr"></i> French</a>
                                                <a href="javascript:void()" class="text-muted pr-3 f-s-16"><i
                                                        class="flag-icon flag-icon-bd"></i> Bangla</a>
                                            </div>
                                            <div class="profile-personal-info">
                                                <h4 class="text-primary mb-4">Personal Information</h4>
                                                <div class="row mb-4">
                                                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                        <h5 class="f-w-500">Name <span class="pull-right">:</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>{{$card->name}}</span>
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                                        <h5 class="f-w-500">Email <span class="pull-right">:</span>
                                                        </h5>
                                                    </div>
                                                    <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>{{$card->email}}</span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div id="my-posts" class="tab-pane fade">
                                            <div class="my-post-content pt-3">
                                                <div class="post-input">
                                                    <textarea name="textarea" id="textarea" cols="30" rows="5" class="form-control bg-transparent" placeholder="Please type what you want...."></textarea> <a href="javascript:void()"><i class="ti-clip"></i> </a>
                                                    <a href="javascript:void()"><i class="ti-camera"></i> </a><a href="javascript:void()" class="btn btn-primary">Post</a>
                                                </div>
                                                <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                                    <img src="images/profile/8.jpg" alt="" class="img-fluid w-100">
                                                    <a class="post-title" href="javascript:void()">
                                                        <h4>Collection of textile samples lay spread</h4>
                                                    </a>
                                                    <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning
                                                        of spare which enjoy whole heart.</p>
                                                    <button class="btn btn-primary mr-3"><span class="mr-3"><i
                                                                class="fa fa-heart"></i></span>Like</button>
                                                    <button class="btn btn-secondary"><span class="mr-3"><i
                                                                class="fa fa-reply"></i></span>Reply</button>
                                                </div>
                                                <div class="profile-uoloaded-post border-bottom-1 pb-5">
                                                    <img src="images/profile/9.jpg" alt="" class="img-fluid w-100">
                                                    <a class="post-title" href="javascript:void()">
                                                        <h4>Collection of textile samples lay spread</h4>
                                                    </a>
                                                    <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning
                                                        of spare which enjoy whole heart.</p>
                                                    <button class="btn btn-primary mr-3"><span class="mr-3"><i
                                                                class="fa fa-heart"></i></span>Like</button>
                                                    <button class="btn btn-secondary"><span class="mr-3"><i
                                                                class="fa fa-reply"></i></span>Reply</button>
                                                </div>
                                                <div class="profile-uoloaded-post pb-5">
                                                    <img src="images/profile/8.jpg" alt="" class="img-fluid w-100">
                                                    <a class="post-title" href="javascript:void()">
                                                        <h4>Collection of textile samples lay spread</h4>
                                                    </a>
                                                    <p>A wonderful serenity has take possession of my entire soul like these sweet morning of spare which enjoy whole heart.A wonderful serenity has take possession of my entire soul like these sweet morning
                                                        of spare which enjoy whole heart.</p>
                                                    <button class="btn btn-primary mr-3"><span class="mr-3"><i
                                                                class="fa fa-heart"></i></span>Like</button>
                                                    <button class="btn btn-secondary"><span class="mr-3"><i
                                                                class="fa fa-reply"></i></span>Reply</button>
                                                </div>
                                                <div class="text-center mb-2"><a href="javascript:void()" class="btn btn-primary">Load More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

