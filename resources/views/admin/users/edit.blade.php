@extends('admin.dashboard')
@section('title','Users list')
@section('content')
<div class="row">
    <!-- ============================================================== -->
    <!-- basic form -->
    <!-- ============================================================== -->
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Basic Form</h5>
            <div class="card-body">
                <form action="#" id="basicform" data-parsley-validate="">
                    <div class="form-group">
                        <label for="inputUserName">User Name</label>
                        <input id="inputUserName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Enter user name" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email address</label>
                        <input id="inputEmail" type="email" name="email" data-parsley-trigger="change" required="" placeholder="Enter email" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input id="inputPassword" type="password" placeholder="Password" required="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="inputRepeatPassword">Repeat Password</label>
                        <input id="inputRepeatPassword" data-parsley-equalto="#inputPassword" type="password" required="" placeholder="Password" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                            <label class="be-checkbox custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Remember me</span>
                            </label>
                        </div>
                        <div class="col-sm-6 pl-0">
                            <p class="text-right">
                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                <button class="btn btn-space btn-secondary">Cancel</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end basic form -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- horizontal form -->
    <!-- ============================================================== -->
    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Horizontal Form</h5>
            <div class="card-body">
                <form id="form" data-parsley-validate="" novalidate="">
                    <div class="form-group row">
                        <label for="inputEmail2" class="col-3 col-lg-2 col-form-label text-right">Email</label>
                        <div class="col-9 col-lg-10">
                            <input id="inputEmail2" type="email" required="" data-parsley-type="email" placeholder="Email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword2" class="col-3 col-lg-2 col-form-label text-right">Password</label>
                        <div class="col-9 col-lg-10">
                            <input id="inputPassword2" type="password" required="" placeholder="Password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputWebSite" class="col-3 col-lg-2 col-form-label text-right">Web Site</label>
                        <div class="col-9 col-lg-10">
                            <input id="inputWebSite" type="url" required="" data-parsley-type="url" placeholder="URL" class="form-control">
                        </div>
                    </div>
                    <div class="row pt-2 pt-sm-5 mt-1">
                        <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                            <label class="be-checkbox custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"><span class="custom-control-label">Remember me</span>
                            </label>
                        </div>
                        <div class="col-sm-6 pl-0">
                            <p class="text-right">
                                <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                <button class="btn btn-space btn-secondary">Cancel</button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end horizontal form -->
    <!-- ============================================================== -->
</div>
@endsection
