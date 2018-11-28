@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus onchange="return nameValidation(this.value)">
                                <span class="text-danger font-weight-bold" id="nameERR"></span>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                           <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>
                       
                           <div class="col-md-6">
                               <input id="contact" type="text" class="form-control{{ $errors->has('contact') ? ' is-invalid' : '' }}" name="contact" value="{{ old('contact') }}" required maxlength="10" autofocus onchange="return contactValidation(this.value)">
                               <span class="text-danger font-weight-bold" id="contactERR"></span>

                               @if ($errors->has('contact'))
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('contact') }}</strong>
                                   </span>
                               @endif
                           </div>
                        </div>

                        <div class="form-group row">
                           <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                       
                           <div class="col-md-6">
                               <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus onchange="return addressValidation(this.value)">
                               <span class="text-danger font-weight-bold" id="addressERR"></span>

                               @if ($errors->has('address'))
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('address') }}</strong>
                                   </span>
                               @endif
                           </div>
                        </div>

                        <div class="form-group row">
                           <label for="nationality" class="col-md-4 col-form-label text-md-right">{{ __('Nationality') }}</label>
                       
                           <div class="col-md-6">
                               <input id="nationality" type="text" class="form-control{{ $errors->has('nationality') ? ' is-invalid' : '' }}" name="nationality" value="{{ old('nationality') }}" required autofocus onchange="return nationalityValidation(this.value)">
                               <span class="text-danger font-weight-bold" id="nationalityERR"></span>

                               @if ($errors->has('nationality'))
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('nationality') }}</strong>
                                   </span>
                               @endif
                           </div>
                        </div>

                        <div class="form-group row">
                           <label for="education_background" class="col-md-4 col-form-label text-md-right">{{ __('Education Background') }}</label>
                       
                           <div class="col-md-6">
                               <input id="edubackground" type="text" class="form-control{{ $errors->has('edubackground') ? ' is-invalid' : '' }}" name="edubackground" value="{{ old('edubackground') }}" required autofocus onchange="return eduValidation(this.value)">
                               <span class="text-danger font-weight-bold" id="eduERR"></span>

                               @if ($errors->has('edubackground'))
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('edubackground') }}</strong>
                                   </span>
                               @endif
                           </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus onchange="return emailValidation(this.value)">
                                <span class="text-danger font-weight-bold" id="emailERR"></span>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autofocus onchange="return pwdValidation(this.value)">
                                <span class="text-danger font-weight-bold" id="pwdERR"></span>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0" id="showBtn">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="public/js/input_validation.js"></script>
@endsection
