@extends('layout.auth')

@section('title', 'Register')
@section('main')
    <!-- Start wrapper-->
    <div id="wrapper">

        <div class="card card-authentication1 mx-auto my-4">
            <div class="card-body">
                <div class="card-content p-2">
                    <div class="text-center">
                        <img src="assets/images/logo-icon.png" alt="logo icon">
                    </div>
                    <div class="card-title text-uppercase text-center py-3">Sign Up</div>
                    <form>
                        <div class="form-group">
                            <label for="exampleInputName" class="sr-only">Name</label>
                            <div class="position-relative has-icon-right">
                                <input type="text" id="exampleInputName" class="form-control input-shadow" value="{{ $Username }}" placeholder="Enter Your Name">
                                <div class="form-control-position">
                                    <i class="icon-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmailId" class="sr-only">Email ID</label>
                            <div class="position-relative has-icon-right">
                                <input type="text" id="exampleInputEmailId" class="form-control input-shadow" value="{{ $Email }}" placeholder="Enter Your Email ID">
                                <div class="form-control-position">
                                    <i class="icon-envelope-open"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword" class="sr-only">Password</label>
                            <div class="position-relative has-icon-right">
                                <input type="text" id="exampleInputPassword" class="form-control input-shadow" value="{{ $Password }}" placeholder="Choose Password">
                                <div class="form-control-position">
                                    <i class="icon-lock"></i>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="icheck-material-white">
                                <input type="checkbox" id="user-checkbox" checked="" />
                                <label for="user-checkbox">I Agree With Terms & Conditions</label>
                            </div>
                        </div>

                        <button type="button" class="btn btn-light btn-block waves-effect waves-light">Sign Up</button>
                        <div class="text-center mt-3">Sign Up With</div>

                        <div class="form-row mt-4">
                            <div class="form-group mb-0 col-6">
                                <button type="button" class="btn btn-light btn-block"><i
                                  class="fa fa-facebook-square"></i> Facebook</button>
                            </div>
                            <div class="form-group mb-0 col-6 text-right">
                                <button type="button" class="btn btn-light btn-block"><i
                                  class="fa fa-twitter-square"></i> Twitter</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="card-footer text-center py-3">
                <p class="text-warning mb-0">Already have an account? <a href="login.html"> Sign In here</a></p>
            </div>
        </div>
@endsection