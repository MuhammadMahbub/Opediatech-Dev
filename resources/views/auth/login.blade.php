@include('layouts.frontend.inc.header',[$seo_title='Login', $seo_description='', $seo_keywords='' ])
<main>
    <div class="signIn-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 mt-5 offset-4">
                    <div class="info-form">
                        <h1>SIGN IN</h1>
                        <h5>LOG IN TO CONTINUE</h5>
                        <form action="{{ route('login') }}" method="post" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mt-4 form-group">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mt-4 text-center">
                                <button class="btn-jamp" type="submit">LogIn</button>
                            </div>
                        </form>
                        <div class="text-center">
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<script src="{{ asset('frontend') }}/assets/js/jquery-3.6.0.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/fontawesome.min.js"></script>
<script src="{{ asset('frontend') }}/assets/js/app.js"></script>


@if (Session::has('success'))
    <script>
        toastr.success("{!! Session::get('success') !!}")
    </script>
@endif


</body>
</html
