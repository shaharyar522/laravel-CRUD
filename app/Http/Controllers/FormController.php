<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forms = Form::all();
        
        return view('services.helo_index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('services.helo');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form = new Form();
        $form->name = $request->name;
        $form->number = $request->number;
        $form->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $form = Form::findOrFail($id);
        return view('services.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $form = Form::findOrFail($id);
        $form->name = $request->name;
        $form->number = $request->number;
        $form->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Form $form)
    {
        //
    }
}
