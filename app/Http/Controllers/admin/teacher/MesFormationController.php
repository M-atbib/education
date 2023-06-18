<?php

namespace App\Http\Controllers\admin\teacher;

use App\Http\Controllers\Controller;

class MesFormationController extends Controller
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
        return view('pages.admin.teacher.mesformations.index');
    }
    public function plan()
    {
        return view('pages.admin.teacher.mesformations.plan');
    }
    public function class()
    {
        return view('pages.admin.teacher.mesformations.class');
    }
}
