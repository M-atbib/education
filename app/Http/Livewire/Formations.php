<?php

namespace App\Http\Livewire;

use App\Models\Categorys;
use App\Models\Formations as allFormation;
use Livewire\Component;

class Formations extends Component
{
    public $formations,$search,$more=6,$sous_categorys_itdev,$sous_categorys_language,$type=0,$count = 0,$countlg = 0,$sous_category_id_language=false,
    $sous_category_id_itdiv=false,
    $sous_categorys_checked=false,$sous_categorys_checked1=false;

    public function mount(){
        $this->formations = allFormation::where('action','1')->limit($this->more)->get();
    }

    public function render()
    { 
        if($this->search)
        {
            $this->formations = allFormation::where('action','1')->where('title','like','%'.$this->search.'%')->limit($this->more)->get();
        }
        else{
            if($this->type == 1)
            {
                $this->sous_categorys_itdev=false;
                $this->language();
                
            }else if($this->type == 2){
                $this->sous_categorys_language=false;
                $this->itdev();
            }
            else{
                $this->formations = allFormation::where('action','1')->limit($this->more)->get();
            }
           
        }
       
        return view('livewire.formations');
    }

    public function language(){
        $this->sous_categorys_language = Categorys::where('parent_id',1)->get();
    
        if($this->sous_category_id_language){
            $this->formations =   allFormation::select('formations.*')
            ->join('categorys', 'categorys.id', '=', 'formations.id_category')
            ->where('formations.action','1')->where('categorys.parent_id','1')
            ->where('categorys.id',$this->sous_category_id_language)
            ->limit($this->more)
            ->get();
          
        }else{
            $this->formations = allFormation::select('formations.*')
            ->join('categorys', 'categorys.id', '=', 'formations.id_category')
            ->where('formations.action','1')->where('categorys.parent_id','1')
            ->limit($this->more)
            ->get();
            $this->countlg = 1;
        }
       
        $this->type=1;
    }
    
    public function itdev(){

        $this->sous_categorys_itdev =  Categorys::where('parent_id',2)->get();

        if($this->sous_category_id_itdiv){
            $this->formations =   allFormation::select('formations.*')
            ->join('categorys', 'categorys.id', '=', 'formations.id_category')
            ->where('formations.action','1')
            ->where('categorys.parent_id','2')
            ->where('categorys.id',$this->sous_category_id_itdiv)
            ->limit($this->more)->get();
         
        }else{
            $this->formations =  allFormation::select('formations.*')
            ->join('categorys', 'categorys.id', '=', 'formations.id_category')
            ->where('formations.action','1')
            ->where('categorys.parent_id','2')
            ->limit($this->more)->get();
            $this->count = 1;
        }
        $this->type=2;
    }
    public function all(){
        $this->type=0;
        $this->sous_categorys_language=false;
        $this->sous_categorys_itdev=false;
        $this->sous_category_id_language="";
        $this->sous_category_id_itdiv="";
        $this->formations = allFormation::where('action','1')->limit($this->more)->get();
    }
    public function view_more(){
       $this->more += $this->more;
    }
}
