@extends('layouts.main')

@section('content')
<section class="page" id="page1">
    @include('partials.header')
    <div class=" container signupContainer">
        <div class="row">
            <div class="col-sm-6" id="SMSignup">
                <h5>Sign up with Social Media</h5>
                <div class="socialTab" id="facebookSocialTab">
                    Sign up with facebook
                </div>
                <div class="socialTab" id="googleSocialTab">
                    Sign up with google
                </div>
                <div class="socialTab" id="twitterSocialTab">
                    Sign up with twitter
                </div>
                <div class="socialTab" id="linkedInSocialTab">
                    Sign up with Linkedin
                </div>
                <p>
                    Already have an account?
                    <span onclick="goToSignin()" id="goToAlternate">Sign in!</span>
                </p>
            </div>
            <!-- <div class="col-sm-0.1 red"><div class="divider"></div></div> -->
            <div class="col-sm-6" id="manualSignup">
                <h5>or sign up manually</h5>
                <form action="">
                    <input type="text" name="userName" id="userName" placeholder="Username" />
                    <br />
                    <input type="password" name="password" id="password" placeholder="Password" />
                    <br />
                    <input type="password" name="repeatPassword" id="repeatpassword" placeholder="Repeat password" />
                    <br />
                    <input type="email" name="email" id="email" placeholder="E-mail" />
                    <br />
                    <input type="checkbox" name="termsAndConditions" id="termsAndConditions" />
                    <label for="termsAndConditions">I agree with all of Geckos T&C</label>
                    <button type="submit">Submit</button>
                </form>
            </div>
    <div class=" container signinContainer">
        <div class="row">
            <div class="col-sm-6" id="SMSignup">
                <h5>Sign in with Social Media</h5>
                <div class="socialTab" id="facebookSocialTab">
                    Sign in with facebook
                </div>
                <div class="socialTab" id="googleSocialTab">
                    Sign in with google
                </div>
                <div class="socialTab" id="twitterSocialTab">
                    Sign in with twitter
                </div>
                <div class="socialTab" id="linkedInSocialTab">
                    Sign in with Linkedin
                </div>
                <p>
                    Don't have an account?
                    <span onclick="goToSignup()" id="goToAlternate">Sign up!</span>
                </p>
            </div>
            <!-- <div class="col-sm-0.1 red"><div class="divider"></div></div> -->
            <div class="col-sm-6" id="manualSignup">
                <h5>or sign in manually</h5>
                <form action="" id="signInForm">
                    <input type="text" name="userName" id="userNameSignin" placeholder="Username" />
                    <br />
                    <input type="password" name="password" id="passwordSignin" placeholder="Password" /><br />
                    <input type="checkbox" name="termsAndConditions" id="rememberMe" />
                    <label for="termsAndConditions">Remember me? </label>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</section>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
