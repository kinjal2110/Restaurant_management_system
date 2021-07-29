<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\foodzone;
use App\Models\foodchef;
use App\Models\Order;

class HomeController extends Controller
{
    //
   public function index()
    {
        $data = foodzone::all();
        $data2 = foodchef::all();
        return view('home',compact('data','data2'));
    }
    public function redirects()
    {
        $data = foodzone::all();

        $data2 = foodchef::all();

        $usertype = Auth::user()->usertype;

        if($usertype == '1')
        {
            return view('admin.adminhome');
        } 
        else
        {
            $user_id = Auth::id();

            $count = cart::where('user_id',$user_id)->count();

            return view('home',compact('data','data2','count'));
        }
    }

    
    public function addcart(Request $req,$id)
    {
        if(Auth::id())
        {
            $user_id = Auth::id();

            $food_id = $id;

            $quantity = $req->quantity;

            $cart = new cart;

            $cart->user_id = $user_id;
            $cart->food_id = $food_id;
            $cart->quantity = $quantity;

            $cart->save();
             return redirect()->back();
        }
        else
        {
            return redirect('/login');
        }
    }
    public function showcart(Request $req,$id)
    {
        $count = cart::where('user_id',$id)->count();

        $data2 = cart::select('*')->where('user_id','=',$id)->get();

        $data = cart::where('user_id',$id)->join('foodzones','carts.food_id','=','foodzones.id')->get();

        return view('showcart',compact('count','data','data2'));
    }
    public function remove($id)
    {
        $data=cart::find($id);

        $data->delete();

        return redirect()->back();
    }
    public function orderconfirm(Request $req)
    {
        foreach($req->foodname as $key=>$foodname)
        {
            $data = new order;
            $data->foodname = $foodname;
            $data->price = $req->price[$key];
            $data->quantity = $req->quantity[$key];
            $data->name = $req->name;
            $data->address = $req->address;
            $data->phone = $req->phone;
            $data->save();

        }
        return redirect()->back();
    }
}
