<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fourth;
class FourthController extends Controller
{
    //
       public function insertEmployeeDetails(request $request){
    	Fourth::create([
    		'emp_add'=>$request['emp_add'],
    		'emp_phn'=>$request['emp_phn'],
    		'emp_sal'=>$request['emp_sal']
    	]);
    	return view('welcome');
    }
}

