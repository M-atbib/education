<?php


use Faker\Provider\Lorem;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

use Carbon\Carbon;


function calctime($number_class,$course_duration){
  $calcul =  $number_class*$course_duration;
  $heure = str_replace('.', 'h ', $calcul);
  if(strpos((string)$heure, 'h '))
  {
    return (String)$heure. 'min';
  
  }
    return (String)$heure. 'h 00min';
  
  
 
}

