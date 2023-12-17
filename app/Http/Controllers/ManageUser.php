<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManageUser extends Controller
{
    public function show(){
        return view('pages.manage-user',[
            'users' => User::all()
        ]);
    }

    public function update(){
        // dd(request()->all());
        // $active = request()->all()['active'] or null;

        if(request()->input('inactive')){
            DB::table('users')
            ->where('id', request()->input('idUser'))
            ->update(['status' => 0]);
            return redirect('/admin/manage-user');
        }
        else if(request()->input('active')){
            DB::table('users')
            ->where('id', request()->input('idUser'))
            ->update(['status' => 1]);
            return redirect('/admin/manage-user');
        }
    }
}
