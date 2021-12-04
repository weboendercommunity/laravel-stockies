<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4 mr-2">Create an Account!</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('register.custom') }}">
                                <div class="form-group row">
                                    <div class="col-sm-10 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="col-10 form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 mb-3 mb-sm-3">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="col-sm-6">
                                </div>
                                <button class="col-10 btn btn-primary btn-user btn-block" type="submit">Register Account</button>
                                <hr>
                                <button class="col-10 btn btn-google btn-user btn-block" type="submit"><i class="fab fa-google fa-fw"></i> Register With Google</button>
                                <button class="col-10 btn btn-facebook btn-user btn-block" type="submit"><i class="fab fa-facebook-f fa-fw"></i> Register with Facebook</button>
                            </form>
                            <hr>
                            <div class="col-sm-10 mb-5 mb-sm-0 text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="col-sm-10 mb-1 mb-sm-6 text-center">
                                <a class="small" href="login.html">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ mix('js/app.js') }}"></script>

</body>

</html>