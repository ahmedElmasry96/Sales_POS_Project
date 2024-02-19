@extends('dashboard.layouts.master2')
@section('css')
    <link href="{{URL::asset('dashboard/assets/plugins/sidemenu-responsive-tabs/css/sidemenu-responsive-tabs.css')}}" rel="stylesheet">
@endsection
@section('content')
    <!-- Page -->
    <div class="page">
        <div class="container-fluid">
            <div class="login d-flex align-items-center py-2">
                <!-- Demo content-->
                <div class="container p-0">
                    <div class="row">
                        <div class="col-md-10 col-lg-10 col-xl-9 mx-auto">
                            <div class="card-sigin">
                                <div class="mb-5 d-flex"> <a href="{{ url('/' . $page='index') }}"><img src="{{URL::asset('dashboard/assets/img/brand/favicon.png')}}" class="sign-favicon ht-40" alt="logo"></a><h1 class="main-logo1 ml-1 mr-0 my-auto tx-28">Va<span>le</span>x</h1></div>
                                <div class="card-sigin">
                                    <div class="main-signup-header">
                                        <h2>مرحبا بعودتك!</h2>
                                        @if(Session::has('message'))
                                            <p class="text-danger">{{Session::get('message')}}</p>
                                        @endif
                                        <form action="{{route('login')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label>البريد الالكترونى</label> <input class="form-control" type="email" name="email" value="{{old('email')}}" required>
                                                @error('email')
                                                <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>كلمة المرور</label> <input class="form-control" type="password" name="password" value="{{old('password')}}" required>
                                                @error('password')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div><button class="btn btn-main-primary btn-block">تسجيل الدخول</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End -->
            </div>
        </div>
    </div>
    <!-- End Page -->
@endsection
@section('js')
@endsection
