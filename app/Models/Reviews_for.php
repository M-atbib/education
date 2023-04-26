<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews_for extends Model
{
    use HasFactory;

    protected $table = 'reviews_for';

    protected $guarded = [];


    public function user_info(){
        return User::where('id',$this->user_id)->get()->first();
    }
}
