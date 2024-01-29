<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use Session;

class ProductController extends Controller
{
    function index(){

        $data = product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id){
        $data = product::find($id);
        return view('detail',['product'=>$data]);
    }

    function addtocart(Request $req){
        if ($req->session()->has('user')) {
            $cart = new cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }


    static function cartItem(){
        $userId = Session::get('user')['id'];
        return cart::where('user_id',$userId)->count();
    }

    function cartlist(){
        $userId = Session::get('user')['id'];
        $products = \DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userId)
        ->select('products.*','carts.id as cart_id')
        ->get();
        return view('cartlist',['products'=>$products]);
    }

    function removecart($id){
        cart::destroy($id);
        return redirect('cartlist');
    }

    function ordernow(){
        $userId = Session::get('user')['id'];
        $total = \DB::table('carts')
        ->join('products','carts.product_id','=','products.id')
        ->where('carts.user_id',$userId)
        ->sum('products.price');
        return view('ordernow',['total'=>$total]);
    }

    function orderplace(Request $req){
        $userId = Session::get('user')['id'];
        $allCart = cart::where('user_id',$userId)->get();
        foreach($allCart as $cart){
            $order = new \App\Models\order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "pending";
            $order->address = $req->address;
            $order->save();
            cart::where('user_id',$userId)->delete();
        }
        $req->input();
        return redirect('/');
    }

    function myorders(){
        $userId = Session::get('user')['id'];
        $orders = \DB::table('orders')
        ->join('products','orders.product_id','=','products.id')
        ->where('orders.user_id',$userId)
        ->get();
        return view('myorders',['orders'=>$orders]);
    }

    function admin(){
        $data = product::all();
        return view('admin',['products'=>$data]);
    }

    function addproduct(Request $req){
        $product = new product;
        $product->name = $req->name;
        $product->price = $req->price;
        $product->category = $req->category;
        $product->description = $req->description;
        $product->gallery = $req->gallery;
        $product->save();
        //alert
        $req->session()->flash('status', 'Product added successfully!');
        return redirect('admin');
    }

    function deleteproduct(){
        $data = product::all();
        return view('deleteproduct',['products'=>$data]);
    }

    function delete($id){
        product::destroy($id);
        return redirect('deleteproduct');
    }

    function editproduct(){
        $data = product::all();
        return view('editproduct',['products'=>$data]);
        }

    function edit($id){
        $data = product::find($id);
        return view('edit',['products'=>$data]);
    }

    function update(Request $req){
        $product = product::find($req->id);
        $product->name = $req->name;
        $product->price = $req->price;
        $product->category = $req->category;
        $product->description = $req->description;
        $product->gallery = $req->gallery;
        $product->save();
        //alert
        $req->session()->flash('success', 'Product updated successfully!');
        return redirect('editproduct')->with('success', 'Operation completed successfully!');
    }

    //update order to delivered
    function updateorder(Request $req){
        $order = \App\Models\order::all();
        return view('updateorder',['orders'=>$order,'product'=>$order]);
    }

    function updateorderstatus(Request $req){
        $order = \App\Models\order::find($req->id);
        $order->status = $req->status;
        $order->save();
        //alert
        $req->session()->flash('success', 'Order updated successfully!');
        return redirect('updateorder')->with('success', 'Operation completed successfully!');
    }
}
