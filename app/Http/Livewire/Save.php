<?php

namespace App\Http\Livewire;

use App\Events\SaveFormationEvent;
use App\Models\Save as ModelsSave;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Save extends Component
{
    public $formation_id,$save=false;
    public function render()
    {

        return view('livewire.save');
    }
    public function mount(){
        $this->fill(['formation_id' => $this->formation_id]);
        $count = ModelsSave::where('user_id',Auth::id())->get()->count();
        event(new SaveFormationEvent((string)$count));
        if(Auth::check())
        {
            $this->save = ModelsSave::where('formation_id',$this->formation_id)->where('user_id',Auth::id())->get()->first(); 
        }
    }
    public function save(){
        if(Auth::check())
        {
            $check = ModelsSave::where('formation_id',$this->formation_id)->where('user_id',Auth::id())->get()->first(); 
            if($check){
                $check->delete();
                $this->save = false;
                $count = ModelsSave::where('user_id',Auth::id())->get()->count();
                event(new SaveFormationEvent((string)$count));
            }else{
                $savenew = new ModelsSave();
                $savenew->formation_id = $this->formation_id;
                $savenew->user_id = Auth::id();
                $savenew->created_at = now();
                $savenew->updated_at = now();
                $savenew->save();
                $this->save = true;

                $count = ModelsSave::where('user_id',Auth::id())->get()->count();
                event(new SaveFormationEvent((string)$count));
            }
            
        }else{
            return redirect('/login');
        }
    }
}
