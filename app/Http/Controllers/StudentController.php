<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Student;
use Illuminate\View\View;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        // // first methode
        // return view ('students.index')->with('students', $students);
        // // the second methode
        return view ('students.index',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        // show view create inside folder student
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // // first methode
        // $input = $request->all();
        // Student::create($input);
        // return redirect('student');

        // // the second methode
        $news = new Student();
        $news->name = $request->name;
        $news->address = $request->address;
        $news->mobile = $request->mobile;
        $news->save();
        return redirect('student');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {
        $student = Student::find($id);
        // // first methode
        // return view('students.show')->with('students', $student);
        // // the second methode
        return view('students.show',['students'=>$student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $student = Student::find($id);
        // echo $student;
        // return view('students.edit')->with('students', $student);
        return view('students.edit',['students'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = Student::find($id);
        // //first methode
        // $input = $request->all();
        // $student->update($input);
        // return redirect('student')->with('flash_message', 'student Updated!');
        
        // //the second methode
        $student->name = $request->name;
        $student->address = $request->address;
        $student->mobile = $request->mobile;
        $student->save();
        return redirect('student');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::destroy($id);
        // return redirect('student')->with('flash_message', 'Student deleted!');
        return redirect('student');
    }

    public function deleteAll()
    {
        Student::truncate();

        return redirect('student');
    }
}
