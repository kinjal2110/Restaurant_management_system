<?php

namespace App\Http\Controllers;

use App\Models\Foodchef;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\foodzone;
use App\Models\Reservation;
use App\Models\Order;
use SebastianBergmann\Environment\Console;

class AdminController extends Controller
{
    //
    public function user()
    {
        $data = user::all();
        return view('admin.users', compact('data'));
    }

    public function deleteuser($id)
    {
        $data = user::find($id);            //find the id
        $data->delete();                    //delete those id
        return redirect()->back();          //redirect back to those page
    }

    public function deletemenu($id)
    {
        $data = foodzone::find($id);

        $data->delete();

        return redirect()->back();
    }

    public function updateview($id)
    {
        $data = foodzone::find($id);
        return view('admin.updateview', compact('data'));
    }

    public function update(Request $req, $id)
    {
        $data = foodzone::find($id);

        $data->title = $req->title;
        $data->price = $req->price;
        $data->description = $req->description;

        $image = $req->image;
        // Console.log($image); exit;
        $imagename = $image->getClientOriginalName();
        $req->image->move('foodimage', $imagename);
        $data->image = $imagename;

        $data->save();
        return redirect()->back();
    }
    public function reservation(Request $req)
    {
        $data = new reservation;

        $data->name = $req->name;
        $data->email = $req->email;
        $data->phone = $req->phone;
        $data->guest = $req->guest;
        $data->date = $req->date;
        $data->time = $req->time;
        $data->message = $req->message;

        $data->save();
        return redirect()->back();
    }

    public function viewreservation()
    {
        $data=reservation::all();

        return view('admin.adminreservation',compact('data'));
    }
    public function foodmenu()
    {
        return view('admin.foodmenu');
    }

    public function viewchef()
    {
        
        return view('admin.adminchef');
    }
    public function upload(Request $req)
    {
        $data = new foodzone();

        $data->title = $req->title;
        $data->price = $req->price;
        $data->description = $req->description;

        $image = $req->image;
        // Console.log($image); exit;
        $imagename = $image->getClientOriginalName();
        $req->image->move('foodimage', $imagename);
        $data->image = $imagename;

        // $file = Input::file('image');
        // if ($file !== null) {
        //     echo $file->getClientOriginalExtension();  
        // }
        $data->save();
        return redirect()->back();
    }

    public function uploadchef(Request $req)
    {
        $data2 = new foodchef;

        $image = $req->image;
        // Console.log($image); exit;
        $imagename = $image->getClientOriginalName();
        $req->image->move('chefimage', $imagename);
        $data2->image = $imagename;

        $data2->name = $req->name;
        $data2->speciality = $req->speciality;
        $data2->save();

        return redirect()->back();

    }
    public function display()
    {
        $data = foodzone::all();
        return view('admin.displayfood', compact('data'));
    }
    public function displaychef()
    {
        $data2 = Foodchef::all();

        return view('admin.displaychef',compact('data2'));
    }
    public function updatechef($id)
    {
        $data2= Foodchef::find($id);
        return view('admin.updatechef',compact('data2'));
   
    }
    public function update1(Request $req, $id)
    {
        $data = Foodchef::find($id);

        $data->name = $req->name;
        $data->speciality = $req->speciality;


        $image = $req->image;
        $imagename = $image->getClientOriginalName();
        $req->image->move('chefimage', $imagename);
        $data->image = $imagename;

        $data->save();
        return redirect()->back();
        $data = Foodchef::all();
        return view('admin.updatechef',compact('data'));
    }
    public function deletechef($id)
    {
        $data2 =Foodchef::find($id);
        $data2->delete();
        return redirect()->back();
    }

   public function orders()
   {
       $data = order::all();

       return view('admin.orders',compact('data'));
   }

}
