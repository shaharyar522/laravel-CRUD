<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        
        return view('services.student_index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('services.Student');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->father_name = $request->father_name;
        $student->roll_number = $request->roll_number;
        $student->cgpa = $request->cgpa;
        $student->marks = $request->marks;
        $student->save();
      
       
    }
  

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('services.student_edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $student = Student::findOrFail($id);
        $student->name = $request->name;
        $student->father_name = $request->father_name;
        $student->roll_number = $request->roll_number;
        $student->cgpa = $request->cgpa;
        $student->marks = $request->marks;
        $student->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }
}
