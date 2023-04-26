<?php

namespace App\Http\Controllers\visitor;

use App\Http\Controllers\Controller;
use App\Models\Formations;
use App\Models\User;
use App\Models\Save;
use App\Events\SaveFormationEvent;
use Illuminate\Support\Facades\Auth;

class EnseignantesController extends Controller
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
        if(Auth::check())
        {
            $count = Save::where('user_id',Auth::id())->get()->count();
            event(new SaveFormationEvent((string)$count));
        }
        return view('pages.visitor.pages.teachers');
    }
    public function detail_teacher($id)
    {
        if(Auth::check())
        {
            $count = Save::where('user_id',Auth::id())->get()->count();
            event(new SaveFormationEvent((string)$count));
        }
        $teacher = User::where('id',$id)->get()->first();
        $formations = Formations::where('id_teacher',$id)->get();
        return view('pages.visitor.pages.teacher-detail',compact('teacher','formations'));
    }
}
