@extends('auth.layouts.app')

@section('content')
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    {{-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> --}}
                    <img class="col-lg-6 d-none d-lg-block" src="{{ asset('/img/white.jpg') }}" alt="">
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">忘記密碼!</h1>
                            </div>
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>                                
                                <button class="btn btn-primary btn-user btn-block">
                                    請輸入註冊的Email
                                </button>                                
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{route('login')}}">登入</a>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
