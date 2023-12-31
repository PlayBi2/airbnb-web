<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {

        return view('pages.login');
    }

    public function create()
    {

        return view('pages.register');
    }

    public function login()
    {
        $req = request()->validate([
            'email' => 'required|nullable',
            'password' => 'required|min:5|max:20',
        ]);
        $email = request()->all()['email'];
        $password = request()->all()['password'];
        if (Auth::attempt(['email'=>$email, 'password'=>$password, 'status'=>1])) {
            return redirect('/')->with('flash', 'Đăng nhập thành công!');
        } else {
            return back()->with('error', 'Oppes! You have entered invalid credentials');
        }
    }

    public function register()
    {
        $req = request()->validate([
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed|min:6|max:20',
            'fullname' => "required|nullable",
            'phone' => 'required|between:9,11',
            'address' => 'required'
        ]);
        $user = User::create($req);

        return redirect('/register')->with('flash', 'Đăng ký tài khoản thành công');
    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');
    }
}