<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    private $columns = ['StudentName','age'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Student = Student::get();
        return view('Students', compact('Student'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addStudent');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Student::create($request->only($this->columns));
        return redirect('Students');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $Student= Student::findOrFail($id);
        return view ('showStudent',compact ('Student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Student = Student ::findOrFail($id);
        return view ('editStudent ',compact ('Student '));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Student::where('id',$id)->update($request->only($this->columns));
        return redirect ('Student');
    }

    /**
     * Remove the specified resource from storage.
     */
      public function destroy(string $id)
      //public function destroy(Request $request)
    {
        $id =$request->id;
        Student::where('id',$id)->delete();
        return redirect ('Student'); 
    }
}
