<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sixth;
class SixthController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
        public function empView2(){
        $sixth=Sixth::get();
        return view('master.empView2',compact('sixth'));
    }

     public function empView(){
        $sixth=Sixth::get();
        $sixth1=Sixth::get();
        return view('master.edit2',compact('sixth1'))->with(['sixth'=>$sixth]);   
         
    }
     public function insertEmployeeDetails(request $request){
        $this->validate($request,[
            'emp_ssn'=>'required|max:10',
            'emp_tax'=>'required|max:10|unique:sixths',
            ]);
            Sixth::create([
    		'emp_ssn'=>$request['emp_ssn'],
    		'emp_tax'=>$request['emp_tax'],
    	]);
    	return redirect()->back();
    }
}
