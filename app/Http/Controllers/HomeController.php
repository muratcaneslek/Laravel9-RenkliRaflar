<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Message;
use App\Models\Comment;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

    public function faq(){
       
        $setting= Setting::first();
        $datalist = Faq:: all();
        return view('home.faq',[
            'setting'=>$setting,
            'datalist'=>$datalist
        ]);
    }

    public function storemessage(Request $request){
        //dd($request);
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = $request->ip();
        $data->save();

        return redirect()->route('contact')->with('info','Your message has been sent, Thank You.');

    }

    public function storecomment(Request $request){
        //dd($request);
        $data = new Comment();
        $data->user_id = Auth::id();
        $data->product_id = $request->input('product_id');
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->ip = $request->ip();
        $data->save();

        return redirect()->route('product',['id'=>$request->input('product_id')])->with('info','Your comment has been sent, Thank You.');

    }

    public function product($id)
    {
        $sliderdata=Product::limit(2)->get();
        $data= Product::find($id);
        $productrand2=Product::InRandomOrder()->take(6)->get();
        $reviews = Comment::where('product_id',$id)->where('status','True')->get();
        return view('home.product',[
            'data'=>$data,
            'productrand2'=>$productrand2,
            'sliderdata'=>$sliderdata,
            'reviews'=>$reviews
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

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
