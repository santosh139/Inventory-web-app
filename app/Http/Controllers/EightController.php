<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eight;
class EightController extends Controller
{
    //
        public function insertEmployeeDetails(request $request){
    	Eight::create([
    		'mng_name'=>$request['mng_name'],
    		'mng_age'=>$request['mng_age'],
    		'mng_add'=>$request['mng_add'],
    	]);
    	return view('welcome');
    }
}
