<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function accountUser(){
        return view('pages.account-user');
    }

    public function detailUser(){
        return view('pages.detail-user');
    }

    public function changePasswordPage(){
        return view('pages.change-password');
    }

    public function updatePassword(){
        request()->validate([
            'current-password' => 'nullable | min:5 | max:16',
            'new-password' => 'nullable | min:5 | max:16',
            'confirm-password' => 'nullable | min:5 | max:16'
        ]);
        $currentPass = request()->input('current-password');
        $newPass = request()->input('new-password');
        $confirmPass = request()->input('confirm-password');
        if(!Hash::check($currentPass, auth()->user()->password)){
            return back()->with('error','Mật khẩu hiện tại không đúng!');
        }else if($newPass != $confirmPass){
            return back()->with('error','Mật khẩu không khớp!');
        }else{
            DB::table('users')
              ->where('id', auth()->user()->id)
              ->update(['password' => bcrypt($newPass)]);
            return redirect('/user/detail-account')->with('flash','Thay đổi mật khẩu thành công!');
        }
    }
}
