<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view("content.auth.register", ["active" => "Register"]);
    }

    public function postRegister(RegisterRequest $request)
    {
        User::create([
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "name" => $request->name,
            "role_id" => 2,
            'avatar' => 'https://img.freepik.com/premium-vector/default-avatar-profile-icon-social-media-user-image-gray-avatar-icon-blank-profile-silhouette-vector-illustration_561158-3485.jpg',
            'is_active' => true,
            'created_at' => now()
        ]);

        return back()->with('message','Đăng ký thành công!');
    }

    public function login(){
        return view('content.auth.login',['active'=> 'Login']);
    }

    public function postLogin(LoginRequest $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();

            return redirect(action([HomeController::class,"index"])) ;
        }

        return back()->withErrors([
            'email'=> "Tài khoản hoặc mật khẩu không đúng"
        ]);
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(action([HomeController::class,"index"])) ;
    }
}
