<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $sliderdata=Product::limit(2)->get();
        $productlist1=Product::limit(6)->get();
        $productrand=Product::InRandomOrder()->take(6)->get();
       return view('home.index',[
           'sliderdata'=>$sliderdata,
           'productlist1'=>$productlist1,
           'productrand'=>$productrand
       ]);
    }

    public function product($id)
    {
        $sliderdata=Product::limit(2)->get();
        $data= Product::find($id);
        return view('home.product',[
            'data'=>$data,
            'sliderdata'=>$sliderdata
        ]);
    }
}
