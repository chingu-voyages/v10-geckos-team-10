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
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div>
                        <input class="@error('name') is-invalid @enderror" type="text" name="name" id="Name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <input class="@error('username') is-invalid @enderror" type="text" name="username" id="userName" placeholder="Username" value="{{ old('username') }}" required autocomplete="username">
                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <input class="@error('email') is-invalid @enderror" type="email" name="email" id="email" placeholder="E-mail" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <input class="@error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="Password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <input type="password" name="password_confirmation" id="repeatpassword" placeholder="Confirm password" required autocomplete="new-password">
                    </div>
                    <div>
                        <input type="checkbox" name="termsAndConditions" id="termsAndConditions" />
                        <label for="termsAndConditions">I agree with all of Geckos T&C</label>
                    </div>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
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
                <form method="POST" action="{{ route('login') }}" id="signInForm">
                    @csrf
                    <div>
                        <input type="email" name="email" id="userNameSignin" placeholder="E-Mail" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <br />
                    <div>
                        <input type="password" name="password" id="passwordSignin" placeholder="Password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <br />
                    <div>
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="termsAndConditions">Remember me? </label>
                    </div>
                    <div>
                        <button type="submit">{{ __('Login') }}</button>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
