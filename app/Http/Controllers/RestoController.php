<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;

class RestoController extends Controller
{
    //
    function index()
    {
        return view('home');
    }
    function list()
    {
        $data =  Restaurant::all();
        return view('list', ["data" => $data]);
    }

    function add(Request $req){
        $resto = new Restaurant;
        $resto->name=$req->input('name');
        $resto->email=$req->input('email');
        $resto->phone=$req->input('phone');
        $resto->save();
    }
}
