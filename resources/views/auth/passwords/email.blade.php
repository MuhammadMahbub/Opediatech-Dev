@include('layouts.frontend.inc.header',[$seo_title='Forget Password', $seo_description='', $seo_keywords='' ])
<main>
    <div class="signIn-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 mt-5 offset-4">
                    <div class="text-center mb-3">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                    <div class="info-form">
                        <h1>Reset Password</h1>
                        <form action="{{ route('password.email') }}" method="post" class="signin-form">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mt-5 d-flex justify-content-center">
                                <button style="padding: 16px 70px;" class="btn-jamp" type="submit">Send Password Reset Link</button>
                            </div>
                        </form>

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
