<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;

class HomeController extends BaseController
{
    
   public function Index(){
    $services=DB::table('services')->get();
    return view('welcome',compact('services'));
   }
}
