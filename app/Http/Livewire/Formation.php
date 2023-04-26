<?php

namespace App\Http\Livewire;

use App\Models\Formations;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Formation extends Component
{
    public $formations;

    public function mount(){
        $this->formations = Formations::where('action','1')->limit(6)->get();
    }
    public function render()
    {
        
        return view('livewire.formation');
    }

    public function language(){
            $this->formations =   Formations::select('formations.*')
            ->join('categorys', 'categorys.id', '=', 'formations.id_category')
            ->where('formations.action','1')->where('categorys.parent_id','1')
            ->limit(6)
            ->get();
    }
 
    public function itdev(){
        $this->formations =   Formations::select('formations.*')
        ->join('categorys', 'categorys.id', '=', 'formations.id_category')
        ->where('formations.action','1')
        ->where('categorys.parent_id','2')
        ->limit(6)->get();
    }
}
