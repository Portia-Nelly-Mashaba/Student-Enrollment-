<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = Student::all();
        return view('student.index', compact('student'));
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(Request $request)
    {
        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,

        ]);

        $student->studentDetail()->create([
            'alternate_phone' => $request->alternate_phone,
            'course' => $request->course,
            'roll_no' => $request->roll_no,
        ]);

        return redirect('student')->with('message', 'student and student Details created');
    }

    public function edit($id)
    {
    
        $student = Student::findOrFail($id);

        return view('student.edit', compact('student'));

    }

    public function update(Student $student, Request $request)
    {
        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        $student->studentDetail()->update([
            'alternate_phone' => $request->alternate_phone,
            'course' => $request->course,
            'roll_no' => $request->roll_no,
        ]);

        return redirect('student')->with('message', 'student and student Details Updated');
    }

    
    public function destroy(Student $student)
{
    $student->delete();
    return redirect('student')->with('message', 'student Record deleted');
}


}
