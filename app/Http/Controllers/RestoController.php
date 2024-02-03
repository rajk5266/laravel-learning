<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
Use Session;

class RestoController extends Controller
{
    //
    public function index()
    {
        return view('home');
    }
    public function list()
    {
        $data =  Restaurant::all();
        return view('list', ["data" => $data]);
    }

    public function add(Request $req){
        $resto = new Restaurant;
        $resto->name=$req->input('name');
        $resto->email=$req->input('email');
        $resto->phone=$req->input('phone');
        $resto->address=$req->input('address');
        $resto->save();
        $req->session()->flash('status', 'Restaurant submitted successfully');
        return redirect('list');
    }

    public function delete($id){

         Restaurant::find($id)->delete();
         Session::flash('status', 'Restaurant deleted successfully');
         return redirect('list');

    }
}
