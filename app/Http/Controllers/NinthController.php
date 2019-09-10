<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ninth;
class NinthController extends Controller
{
    //
         public function insertEmployeeDetails(request $request){
    	Ninth::create([
    		'prd_name'=>$request['prd_name'],
    		'prd_price'=>$request['prd_price'],
    	]);
    	return view('welcome');
    }
}
