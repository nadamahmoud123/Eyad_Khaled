<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{

    public function index()
    {
        $student = student::get();
        return view('students.index', ['student' => $student]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6',

        ]);
        student::create($formFields);
        return Redirect::route('students.index')->with('success', 'student added');
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        return view('students.show', ['student' => $student]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {


        return view('students.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {


        $formFields = $request->validate([
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6',
        ]);
        $student->update($formFields);
        return Redirect::route('students.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        if (!Auth::user()) {
            return Redirect('login');
        }
        $student->delete();
        return Redirect::route('students.index');
    }
}
