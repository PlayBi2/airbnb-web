<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManageUser extends Controller
{
    public function show()
    {
        return view('pages.manage-user', [
            'users' => User::all()
        ]);
    }

    public function update()
    {
        // dd(request()->all());
        // $active = request()->all()['active'] or null;

        if (request()->input('inactive')) {
            DB::table('users')
                ->where('id', request()->input('idUser'))
                ->update(['status' => 0]);
            return redirect('/admin/manage-user');
        } else if (request()->input('active')) {
            DB::table('users')
                ->where('id', request()->input('idUser'))
                ->update(['status' => 1]);
            return redirect('/admin/manage-user');
        }
    }

    public function addUserPage()
    {
        return view('pages.add-user');
    }

    public function addUser()
    {
        try {
            // request()->validate([
            //     'fullname' => 'nullable | min:5 | max:255',
            //     'email' => '',
            //     'phone' => 'nullable | between:9,11',
            //     'address' => 'min:5 | max:255',
            //     'password' => 'nullable | min:5 | max:16'
            // ]);
            
            DB::table('users')->insert([
                'fullname' => request()->fullname,
                'email' => request()->email,
                'phone' => request()->phone,
                'address' => request()->address,
                'password' => bcrypt(request()->password),
                'role' => request()->roleUser
            ]);
            return back()->with('flash','Thêm người dùng thành công!');
        } catch (\Throwable $th) {
            return back()->with('error','Thêm người dùng không thành công!');
        }
    }
}