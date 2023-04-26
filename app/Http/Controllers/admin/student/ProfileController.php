<?php

namespace App\Http\Controllers\admin\student;

use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.admin.student.profile.index');
    }

    public function test()
    {
        return view('pages.admin.student.profile.test');
    }
}
