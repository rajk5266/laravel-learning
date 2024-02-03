<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use Illuminate\Http\JsonResponse;
use PhpParser\Node\Stmt\TryCatch;

class RestoController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function list()
    {
        $data = Restaurant::all();
        return view('list', ["data" => $data]);
    }

    public function add(Request $req)
    {
        try {
            $validatedData = $req->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:restaurants,email',
                'phone' => 'required|string|max:15',
                'address' => 'required|string|max:255',
            ]);

            $resto = new Restaurant;
            $resto->name = $validatedData['name'];
            $resto->email = $validatedData['email'];
            $resto->phone = $validatedData['phone'];
            $resto->address = $validatedData['address'];
            $resto->save();

            return response()->json(['status' => 'Restaurant submitted successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while processing your request.'], 500);
        }
    }

    public function delete($id)
    {
        try {
            $restaurant = Restaurant::findOrFail($id);
            $restaurant->delete();

            return response()->json(['status' => 'Restaurant deleted successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while processing your request.'], 500);
        }
    }

    public function edit($id)
    {
        // try{
        //     $data = Restaurant::findOrFail($id);
           
        //     return response()->json(['status' => 'Restaurant deleted successfully', 'data' => $data]);
        // }catch(\Exception $e){
        //     return response()->json(['error' => 'An error occurred while processing your request.'], 500);
        // }
        $data = Restaurant::find($id);
        return view('edit', ['data' => $data]);
    }

    public function update(Request $req)
    {
        try {

            $resto =  Restaurant::find($req->input('id'));
            $resto->name = $req->input('name');
            $resto->email = $req->input('email');
            $resto->phone =  $req->input('phone');
            $resto->address = $req->input('address');
            $resto->save();

            return response()->json(['status' => 'Restaurant updated successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred while processing your request.'], 500);
        }
    }
}
