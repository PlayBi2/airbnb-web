<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;

class Renter extends Controller
{
    public function show_renter()
    {
        try {
            // Fetch products from the database using the ProductModel
            $productModel = ProductModel::all();

            // Log the retrieved data for debugging


            // Pass the $products variable to the 'products.index' view
            return view('pages.renter', compact('productModel'));
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            // Handle the exception as needed
        }

    }
    public function new_product()
    {
        return view('pages.content-renter');
    }
    public function create(Request $request)
    {
        ProductModel::create([
            'name' => $request->input('name'),
            'price_per_month' => $request->input('price_per_month'),
            'price' => $request->input('price'),
            'address' => $request->input('address'),
            'rented' => $request->input('rented', false),
            'infor' => $request->input('infor'),
            'description' => $request->input('description'),
            'area' => $request->input('area'),

        ]);
        return redirect('/for-renter')->with('success', 'Đăng tin thành công');
    }

}
