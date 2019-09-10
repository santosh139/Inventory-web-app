<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seventh;
class SeventhController extends Controller
{
    //
    public function insertEmployeeDetails(request $request){
    	Seventh::create([
    		'emp_age'=>$request['emp_age'],
    		'emp_post'=>$request['emp_post'],
    	]);
    	return view('welcome');
    }
}
