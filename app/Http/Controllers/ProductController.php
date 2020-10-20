<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;


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


    function cart_list(){
        $userId = Session::get('user')['id'];
        $data =  DB::table('cart')
                ->join('products','cart.product_id','products.id')
                ->select('products.*','cart.id as cart_id')
                ->where('cart.user_id',$userId)
                ->get();
        return view('cart_list',['products' =>$data]);
    }

    function removecart($id){
        Cart::destroy($id);
        return redirect ('cart_detail');
    }

}