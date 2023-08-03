<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contactController extends Controller
{
   public function Storepost(Request $request)
   {
   	  $data = array();

  $data ['name']=$request->name;
  $data ['email']=$request->email;
 $data ['message']=$request->message;

 $protfolio=DB::table('_contacts')->insert($data);
//return rensponse()->jeson($data);

  
   	


    
   }
}
