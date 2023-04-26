<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Teachers extends Component
{
    public $teachers_all,$search,$more=9;
    public function render()
    {
        if($this->search)
        {
             $this->teachers_all = User::where('type_user',2)->where('name','like','%'.$this->search.'%')->limit($this->more)->get();
        }
        else
        {
            $this->teachers_all = User::where('type_user',2)->limit($this->more)->get();

        }
        return view('livewire.teachers');
    }
    public function view_more(){
        $this->more += $this->more;
     }
}
