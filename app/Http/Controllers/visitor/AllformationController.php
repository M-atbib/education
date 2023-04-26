<?php

namespace App\Http\Controllers\visitor;

use App\Models\Save;
use App\Events\SaveFormationEvent;
use App\Http\Controllers\Controller;
use App\Models\Formations;
use Illuminate\Support\Facades\Auth;

class AllformationController extends Controller
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
        return view('pages.visitor.pages.all_formation');
    }
    public function detail_formation($id){
        $formation = Formations::where('id',$id)->get()->first();
        return view('pages.visitor.pages.formation-detail',compact('formation'));
    }
}
