<?php

namespace App\Models;

use App\Models\Formations as ModelsFormations;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Formations extends Model
{
    use HasFactory;

    protected $table = 'formations';

    protected $guarded = [];

    public function teacher(){
        return User::where('id',$this->id_teacher)->get()->first();
    }
    public function rating(){
        return Reviews_for::where('id_formations',$this->id)
        ->select(DB::raw('ROUND(AVG(rating),1) as average_rating'))
        ->first()
        ->average_rating;
    }
    public function rating_numbre(){
        return Reviews_for::where('id_formations',$this->id)->get()->count();
    }
    public function plan(){
        return Plan::where('id_formations',$this->id)->get();
    }
    public function info_rating(){
        return Reviews_for::where('id_formations',$this->id)->get();
    }
    public function foryou($id,$id_formation){
        return ModelsFormations::where('id_category',$id)->where('id','<>',$id_formation)->limit(6)->get();
    }
}
