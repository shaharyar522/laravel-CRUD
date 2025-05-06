<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function create()
    {
        return view('services.customers');
    }
    //ab hum data insertd kar karya hian 
    public function store(Request $request){
    $service = new Service();
    $service->name = $request->name;
    $service->email = $request->email;
    $service->number = $request->number;
    $service->save();
   
}
}