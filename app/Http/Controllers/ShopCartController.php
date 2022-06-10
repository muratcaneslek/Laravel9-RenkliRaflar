<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShopCart;
use Illuminate\Support\Facades\Auth;

class ShopCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ShopCart::where('user_id', Auth::id())->get();
        return view('home.user.shopcart',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id=$request->id;
        $data = ShopCart::where('product_id',$id)->where('user_id', Auth::id())->first();
        if($data)
        {
            $data->quantity = $data->quantity + $request->input('quantity');
        } else{
            $data = new ShopCart();
        $data->product_id = $request->input('id');
        $data->user_id = Auth::id();
        $data->quantity = $request->input('quantity');
        
        }

        //dd($request);
        $data->save();

        return redirect()->back()->with('info','Product added to Shopcart..');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function add($id)
    {
        
        $data = ShopCart::where('product_id',$id)->where('user_id', Auth::id())->first();
        if($data)
        {
            $data->quantity = $data->quantity + 1;
        } else{
            $data = new ShopCart();
        $data->product_id = $id;
        $data->user_id = Auth::id();
        $data->quantity = 1;
        
        }

        //dd($request);
        $data->save();

        return redirect()->back()->with('info','Product added to Shopcart..');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = ShopCart::find($id);
        $data->quantity = $request->input('quantity');
        $data->save();
        return redirect()->back()->with('success','Product Update to Shopcart..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ShopCart::find($id);
        $data->delete();
        return redirect()->back()->with('info','Product deleted from Shopcart..');
    }
}
