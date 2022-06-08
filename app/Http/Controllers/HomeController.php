<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function maincategorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }
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

    public function aboutus(){
        
        $setting = Setting:: first();
        return view('home.aboutus',[
            'setting'=>$setting,
        ]);
    }

    public function contact(){
       
        $setting = Setting:: first();
        return view('home.contact',[
            'setting'=>$setting,
        ]);
    }

    public function references(){
        
        $setting = Setting:: first();
        return view('home.references',[
            'setting'=>$setting,
        ]);
    }

    public function product($id)
    {
        $sliderdata=Product::limit(2)->get();
        $data= Product::find($id);
        $productrand2=Product::InRandomOrder()->take(6)->get();
        return view('home.product',[
            'data'=>$data,
            'productrand2'=>$productrand2,
            'sliderdata'=>$sliderdata
        ]);
    }

    public function categoryproducts($id){
       
        $category= Category::find($id);
        $products = DB::table('products')->where('category_id',$id)->get();
        return view('home.categoryproducts',[
            'category'=>$category,
            'products'=>$products
        ]);
    }
}
