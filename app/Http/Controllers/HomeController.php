<?php

namespace App\Http\Controllers;

use App\Models\subject;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function Dochome(subject $subject)
    {
        $subject = subject::get();
        return view('Dochome', ['subject' => $subject]);
    }
    public function StudentHome(subject $subject)
    {
        $subject = subject::get();
        return view('StudentHome', ['subject' => $subject]);
    }
}
