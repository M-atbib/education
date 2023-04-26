<?php

namespace App\Models;

use App\Events\SaveFormationEvent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Save extends Model
{
    use HasFactory;

    protected $table = 'save';

    protected $guarded = [];

    // protected $dispatchesEvents = [
    //     'created' => SaveFormationEvent::class,
    // ];
}
