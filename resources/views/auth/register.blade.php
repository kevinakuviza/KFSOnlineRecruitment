<!--
=========================================================
* Soft UI Dashboard - v1.0.6
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Soft UI Dashboard by Creative Tim
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
</head>

<body class="">
<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
                <div class="container-fluid pe-0">
                    <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="../pages/dashboard.html">
                       KFS ONLINE RECRUITMENT PORTAL
                    </a>
                    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigation">
                        <ul class="navbar-nav mx-auto ms-xl-auto me-xl-7">
                            <li class="nav-item">
                                <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="../pages/dashboard.html">
                                    <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                                    AVAILABLE VACANCIES
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link me-2" href="../pages/sign-up.html">
                                    <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                                    Already Registered?Login
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>
    </div>
</div>
<main class="main-content  mt-0">
    <section>
        <div class="page-header min-vh-75">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                        <div class="card card-plain mt-8">
                            <div class="card-header pb-0 text-left bg-transparent">
                                <h3 class="font-weight-bolder text-info text-gradient">
                                    Kenya Forest Service Online Portal - Registration Form
                                </h3>
{{--                                <p class="mb-0">Registration form</p>--}}
                            </div>
                      \
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">
                                        <p>{{ $message }}</p>
                                    </div>
                                @endif

                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">
                                    {{ csrf_field() }}


                                    <label>First Name</label>
                                    <div class="mb-3">
                                        <input id="name" type="text"
                                               placeholder="As it appears on National ID"
                                               class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <label>Middle Name</label>
                                    <div class="mb-3">
                                        <input id="mname" type="text"
                                               placeholder="As it appears on National ID"
                                               class="form-control{{ $errors->has('mname') ? ' is-invalid' : '' }}" name="mname"
                                               value="{{ old('mname') }}" required autofocus>

                                        @if ($errors->has('mname'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mname') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <label>Last Name</label>
                                    <div class="mb-3">

                                        <input id="lname" type="text"
                                               placeholder="As it appears on National ID"
                                               class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname"
                                               value="{{ old('lname') }}" required autofocus>

                                        @if ($errors->has('lname'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <label>IDNo. /Passport Number</label>
                                    <div class="mb-3">
                                        <input id="idno" type="text"
                                               placeholder="As it appears on National ID"
                                               class="form-control{{ $errors->has('idno') ? ' is-invalid' : '' }}" name="idno"
                                               value="{{ old('idno') }}" required autofocus>

                                        @if ($errors->has('idno'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('idno') }}</strong>
                                    </span>
                                        @endif

                                    </div>
                                    <label>Phone Number</label>
                                    <div class="mb-3">
                                        <input id="phone" type="text"
                                               placeholder="As it appears on National ID"
                                               class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone"
                                               value="{{ old('phone') }}" required autofocus>

                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                        @endif

                                    </div>
                                    <label>Date of Birth</label>
                                    <div class="mb-3">
                                        <input id="dob" type="text"
                                               placeholder="As it appears on National ID"
                                               class="form-control{{ $errors->has('dob') ? ' is-invalid' : '' }}" name="dob"
                                               value="{{ old('dob') }}" required autofocus>

                                        @if ($errors->has('dob'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                        @endif

                                    </div>
                                    <label>County</label>
                                    <div class="mb-3">
                                        <input id="county" type="text"
                                               placeholder="As it appears on National ID"
                                               class="form-control{{ $errors->has('county') ? ' is-invalid' : '' }}" name="county"
                                               value="{{ old('county') }}" required autofocus>

                                        @if ($errors->has('county'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('county') }}</strong>
                                    </span>
                                        @endif

                                    </div>
                                    <label>Ethnicity</label>
                                    <div class="mb-3">
                                        <input id="ethnicity" type="text"
                                               placeholder="As it appears on National ID"
                                               class="form-control{{ $errors->has('ethnicity') ? ' is-invalid' : '' }}" name="ethnicity"
                                               value="{{ old('ethnicity') }}" required autofocus>

                                        @if ($errors->has('ethnicity'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('ethnicity') }}</strong>
                                    </span>
                                        @endif

                                    </div>
                                    <label>Gender</label>
                                    <div class="mb-3">
                                        <input id="gender" type="text"
                                               placeholder="As it appears on National ID"
                                               class="form-control{{ $errors->has('gender') ? ' is-invalid' : '' }}" name="gender"
                                               value="{{ old('gender') }}" required autofocus>

                                        @if ($errors->has('gender'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                        @endif

                                    </div>
                                    <label>Email</label>
                                    <div class="mb-3">
                                        <input id="email" type="email"
                                               placeholder="Enter Email Address"
                                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <label>Password</label>
                                    <div class="mb-3">
                                        <input id="password"
                                               placeholder="Create system Password."
                                               {{--                                           pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,20}$"--}}
                                               type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                        <span>
                                        <strong>
                                   The password MUST be at least 6 Character
                                        </strong>
                                    </span>
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <label>Confirm Password</label>
                                    <div class="mb-3">
                                        <input id="password-confirm" type="password"
                                               placeholder="Confirm Created Password"
                                               class="form-control" name="password_confirmation" required>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                                        <label class="form-check-label" for="rememberMe">Remember me</label>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit"  class="btn btn-primary btn-lg btn-block">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center pt-0 px-lg-2 px-1">
                                <p class="mb-4 text-sm mx-auto">
                                    Don't have an account?
                                    <a href="javascript:;" class="text-info text-gradient font-weight-bold">Sign up</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                            <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/curved-images/curved6.jpg')"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
<!--   Core JS Files   -->
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.6"></script>
</body>

</html>
