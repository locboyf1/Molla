@extends('content.app')

@section('title', 'Đăng ký')

@section('content') 
    <main class="main">
        <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Login</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="login-page bg-image pt-8 pb-8 pt-md-12 pb-md-12 pt-lg-17 pb-lg-17"
            style="background-image: url({{ asset('assets/images/backgrounds/login-bg.jpg') }})">
            <div class="container">
                <div class="form-box">
                    <div class="form-tab">
                    @if(session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                        <ul class="nav nav-pills nav-fill">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login')}}">Đăng nhập</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Đăng ký</a>
                            </li>
                        </ul>
                        <div>
                            <div class="tab-pane show active">
                                <form action="{{ route('postRegister') }}" method="POST">
                                @csrf
                                    <div class="form-group">
                                        <label for="register-email-2">Email</label>
                                        <input type="email" class="form-control" value="{{old('email')}}" name="email" required>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div><!-- End .form-group -->
                                    <div class="form-group">
                                        <label for="register-email-2">Tên hiển thị</label>
                                        <input type="text" class="form-control" value="{{old( 'name')}}" name="name" required>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div><!-- End .form-group -->
                                    <div class="form-group">
                                        <label for="register-password-2">Mật khẩu</label>
                                        <input type="password" class="form-control" name="password" required>
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div><!-- End .form-group -->
                                    <div class="form-group">
                                        <label for="register-password-2">Xác nhận mật khẩu</label>
                                        <input type="password" class="form-control" name="password_confirmation" required>
                                        @error('password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div><!-- End .form-group -->
                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>Đăng ký</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="register-policy-2"
                                                required>
                                            <label class="custom-control-label" for="register-policy-2">Tôi đồng ý với <a
                                                    href="#">điều khoản</a> *</label>
                                        </div><!-- End .custom-checkbox -->
                                    </div><!-- End .form-footer -->
                                </form>
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div><!-- End .form-tab -->
                </div><!-- End .form-box -->
            </div><!-- End .container -->
        </div><!-- End .login-page section-bg -->
    </main><!-- End .main -->
@endsection
