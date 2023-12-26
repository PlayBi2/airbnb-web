<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;



class Product extends Controller
{
    public function show_product()
    {

        return view('pages.product');
    }


}
