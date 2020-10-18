<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use Illuminate\Support\Facades\Session;


class ProductController extends Controller
{
    //
    function index(){
        $data = product::all();
        return view('product',['products'=>$data]);
    }
    

    public function detail($id)
    {
        # code...
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }


    public function search(Request $req){
        // get input value in search box
        // return $req->input();
        $data = Product::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }


    public function add_to_cart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }else{
            return redirect('/login');
        }
    }

    static function cartItem(){
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

}