<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\departments;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Auth;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $department = departments::get();
        return view('departments.index', ['department' => $department]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => 'required',
            'code' => 'required',

        ]);
        departments::create($formFields);
        return Redirect::route('departments.index')->with('success', 'department added');
    }

    /**
     * Display the specified resource.
     */
    public function show(departments $department)
    {
        return view('departments.show', ['department' => $department]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(departments $department)
    {


        return view('departments.edit', ['department' => $department]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, departments $department)
    {


        $formFields = $request->validate([
            'name' => 'required',
            'code' => 'required',
        ]);
        $department->update($formFields);
        return Redirect::route('departments.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(departments $department)
    {
        if (!Auth::user()) {
            return Redirect('login');
        }
        $department->delete();
        return Redirect::route('departments.index');
        /*  $department = departments::findOrfail($id);
        $department->delete();
        return redirect('/departments')->with('delete', 'post deleted'); */
    }
}
