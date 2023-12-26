<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;




class ProductModel extends Model
{
    protected $table = 'product';
    protected $fillable = ['id','image_path','name','price_per_month','price','address','rented','infor', 'description', 'area'];
    use HasFactory;
}
