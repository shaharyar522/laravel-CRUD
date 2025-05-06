<?php

namespace App\Http\Controllers;
use app\Models\User_data;
use Illuminate\Http\Request;

class User_dataController extends Controller
{
    public function create(){
        return view('services.user_date');
   }

   public function store(Request $request){
    $user_data = new User_data();
    $user_data->name = $request->name;
    $user_data->father_name = $request->father_name;
    $user_data->email = $request->email;
    $user_data->description = $request->description;
    $user_data->save();
}
}
