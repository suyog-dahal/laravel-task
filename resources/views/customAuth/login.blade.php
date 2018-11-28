<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="public/fonts/material-icon/css/material-design-iconic-font.min.css">
    
    <!--Bootstrap -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Main css -->
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <img src="images/signup-bg.jpg" alt="">
            <div class="container">
                <div class="signup-content">
                    <form method="post" class="signup-form" action="">
                        @csrf
                        <h2 class="form-title">Login</h2>
                        @if (session('status'))
                        <div class="alert alert-success" align="center">
                            <b>
                                {{ session('status') }}
                            </b>
                        </div>
                        @endif
                        @if (count($errors) > 0)
                        <div class = "alert alert-danger">
                          <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="form-group">
                        <input type="email" class="form-input" name="email" id="email" placeholder="Username/Email" required onchange="return emailValidation(this.value)" value="{{old('email')}}" />
                        <span class="text-danger font-weight-bold" id="emailERR"></span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-input" name="password" id="password" placeholder="Password" required onchange="return pwdValidation(this.value)" />
                        <span class="text-danger font-weight-bold" id="pwdERR"></span>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="submit" class="form-submit" value="Login"/>
                    </div>
                </form>
                <p class="loginhere">
                    Not Created An Account ? <a href="{{ route('customAuth.register') }}" class="loginhere-link">Register Now</a>
                </p>
            </div>
        </div>
    </section>

</div>

<!-- JS -->
<script src="public/vendor/jquery/jquery.min.js"></script>
<!-- <script src="public/js/bootstrap.min.js"></script> -->
<script src="public/js/main.js"></script>
<script src="public/js/validation.js"></script>

</body>
</html>