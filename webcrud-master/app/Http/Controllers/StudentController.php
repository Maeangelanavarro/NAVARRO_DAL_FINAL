<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = student::latest()->paginate(5);
        return view('students.index' ,compact('students'))
            ->with('i', (request()->input('page',1) -1) *5);

    }

    public function create()
    {
        return view('students.Create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'studname' => 'required',
            'course' => 'required',
            'fee' => 'required',
    

        ]);
        
        Student::create($request->all());
        return redirect()->route('students.index')
            ->with('sucess', 'New Team Added Successfully.');

    
    }

    public function show(Student $student)
    {
        return view('students.Show',compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.Edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {

        $request->validate([

        ]);

        $student->update($request->all());

        return redirect()->route('students.index')
            ->with('sucess', 'Team Entry updated successfully!');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')
            ->with('sucess', 'Team Deleted successfully');

    }
}
