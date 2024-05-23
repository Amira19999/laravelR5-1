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
        $messages = $this->errMsg();
        $data = $request->validate([
            'StudentName' => 'requed|max:100|min:5',
             'phone'=>'requed|min:6',

        ]);

        
        Student::create($data);
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
        $messages = $this->errMsg();
        $data = $request->validate([
            'studenttName' => 'required|max:100|min:5',
            'age' => 'required|min:3',
        ], $messages);
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
//trash
    public function trash()
      
    {
    
        $trashed=Student::onlyTrashed()->get();
        return view ('trashedStudent',compact('Student')); 
    }
//restore
    public function restore()
      
    {
    
        Student::where('id',$id)->restore();
        return redirect ('Student'); 
    } 


     
     public function errMsg(){
        return [
            'studentName.required' => 'The student name is missed, please insert',
            'studentName.min' => 'length less than 5, please insert more chars',
        ];
    }

    public function forceDelete(Request $request)
      
    {
        $id =$request->id;
        Student::where('id',$id)->forceDelete();
        return redirect ('trashedStudent'); 
    }
}