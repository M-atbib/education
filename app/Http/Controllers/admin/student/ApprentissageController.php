<?php

namespace App\Http\Controllers\admin\student;

use App\Http\Controllers\Controller;

class ApprentissageController extends Controller
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
        return view('pages.admin.student.apprentissage.index');
    }
    public function detail()
    {
        return view('pages.admin.student.apprentissage.detail');
    }
    public function vide()
    {
        return view('pages.admin.student.apprentissage.vide');
    }
}
