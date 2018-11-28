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
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="post" class="signup-form" action="{{route('customAuth.register')}}">
                        @csrf
                        <h2 class="form-title">Register</h2>
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
                            <input type="text" class="form-input" name="name" placeholder="Name" value="{{old('name')}}" required onchange="return nameValidation(this.value)" />
                            <span class="text-danger font-weight-bold" id="nameERR"></span>
                        </div>

                        <div class="form-group">
                            <input type="number" class="form-input" name="contact" placeholder="Contact" value="{{old('contact')}}" required onchange="return contactValidation(this.value)" />
                            <span class="text-danger font-weight-bold" id="contactERR"></span>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="address" placeholder="Address" value="{{old('address')}}" required onchange="return addressValidation(this.value)" />
                            <span class="text-danger font-weight-bold" id="addressERR"></span>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="nationality" placeholder="Nationality" value="{{old('nationality')}}" required onchange="return nationalityValidation(this.value)" />
                            <span class="text-danger font-weight-bold" id="nationalityERR"></span>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="edu_background" placeholder="Education" value="{{old('edu_background')}}" required onchange="return eduValidation(this.value)" />
                            <span class="text-danger font-weight-bold" id="eduERR"></span>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-input" name="email" placeholder="Email" value="{{old('email')}}" required onchange="return emailValidation(this.value)" />
                            <span class="text-danger font-weight-bold" id="emailERR"></span>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password" required onchange="return pwdValidation(this.value)" />
                            <span class="text-danger font-weight-bold" id="pwdERR"></span>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-input" name="password_confirmation" id="password" placeholder="Confirm Password" value="{{old('password_confirmation')}}" required />
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Register"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Already A Member ? <a href="{{ route('customAuth.login') }}" class="loginhere-link">Login</a>
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