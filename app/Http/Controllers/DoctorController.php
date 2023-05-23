<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use Illuminate\Http\Request;
use App\Models\doctors;
use App\Models\subject;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doctor = doctor::get();
        return view('doctors.index', ['doctor' => $doctor]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doctors.create');
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
        doctor::create($formFields);
        return Redirect::route('doctors.index')->with('success', 'doctor added');
    }

    /**
     * Display the specified resource.
     */
    public function show(doctor $doctor)
    {
        return view('doctors.show', ['doctor' => $doctor]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(doctor $doctor)
    {


        return view('doctors.edit', ['doctor' => $doctor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, doctor $doctor)
    {


        $formFields = $request->validate([
            'email' => 'required|unique:users,email',
            'password' => 'required|min:6',
        ]);
        $doctor->update($formFields);
        return Redirect::route('doctors.index');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(doctor $doctor)
    {
        if (!Auth::user()) {
            return Redirect('login');
        }
        $doctor->delete();
        return Redirect::route('doctors.index');
        /*  $doctor = doctors::findOrfail($id);
        $doctor->delete();
        return redirect('/doctors')->with('delete', 'post deleted'); */
    }
}
