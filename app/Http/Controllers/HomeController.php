<?php

namespace App\Http\Controllers;

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
    public function AcademicQualification()
    {
        return view('AcademicQualification');
    }
    public function ProfessionalQualifications()
    {
        return view('ProfessionalQualifications');
    }
    public function Experiences()
    {
        return view('Experiences');
    }
    public function Memberships()
    {
        return view('Memberships');
    }
    public function statutory()
    {
        return view('statutory');
    }
}
