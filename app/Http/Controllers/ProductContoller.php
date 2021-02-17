<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Product;
use App\Models\Productdetails;

class ProductContoller extends Controller
{
    //
    public function index(){
        
        //DB::enableQueryLog(); // Enable query log
        $list = Product::find(2)->productdetail->toArray();
        

        //$list = Productdetails::find(1)->products;
        //dd(DB::getQueryLog()); // Show results of log

        dd($list);
        
    }
}
