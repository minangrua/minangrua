<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/style_adm.css') }}">
<title>Login</title>
</head>
<body>
    <div id="app">
        <div class="d-lg-flex half">
            <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
            <div class="contents order-2 order-md-1">
                <div class="container">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-md-7">
                        <h3>Login to <strong>admin Minang Rua</strong></h3>
                        <p class="mb-4">Halaman ini hanya boleh diakses oleh admin dari Minang Rua.</p>
                            <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-group first">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="your-email@gmail.com" id="email">
                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Your Password" id="password">
                            </div>
                            <div class="d-flex mb-5 align-items-center">
                                <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                            </div>
                            <div class="input-group">
                            <div class="checkbox">
                            <label>
                                <input id="login-remember" type="checkbox" name="ingataku" value="1"> Ingat Aku
                            </label>
                            </div>
                            <input type="submit" name="login" value="Log In" class="btn btn-block btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
