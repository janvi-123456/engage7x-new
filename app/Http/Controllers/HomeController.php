<?php

namespace App\Http\Controllers;

use App\Models\Course;
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
//        dd(auth()->user()->process);
        if (auth()->user()->role == 'college' && auth()->user()->process == 0) {
            return redirect()->route('onboarding.college');
        }
        else {
            return view('home');
        }
    }
    public function onboarding(){
        $courses = Course::all();
        return view('onboarding',['courses'=>$courses]);
    }
}
