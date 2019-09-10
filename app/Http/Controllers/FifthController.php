<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fifth;

class FifthController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
 
 public function __construct()
    {
        $this->middleware('auth');
    }
        public function empView1(){
        // $third=Third::get();
            $fifth=Fifth::paginate(5);
            // paginate will show the data in another page
        return view('master.empView1',compact('fifth'));
    }

     public function edit1($id){
        $fifth=Fifth::get();
        $fifth1=Fifth::Find($id);
        return view('master.edit1',compact('fifth','fifth1'));   
         
    }
     public function insertEmployeeDetails(request $request){
        // $this->validate($request,[
        //     'emp_name'=>'required|max:10',
        //     'emp_email'=>'required|max:100|unique:thirds',
        //     'emp_id'=>'required|max:10',

        // ]);
        Fifth::create([
            'emp_add'=>$request['emp_add'],
            'emp_phn'=>$request['emp_phn'],
            'emp_sal'=>$request['emp_sal'],
        ]);
        return redirect()->back()->withErrors(['Inserted employe details successfully!']);
    }
public function update(request $request){
        // $this->validate($request,[
        //     'emp_add'=>'required|max:100',
        //     'emp_phn'=>'required|max:10',
        //     'emp_sal'=>'required|max:20',

        // ]);
        Fifth::where('id',$request['id'])->update([
            'emp_add'=>$request['emp_add'],
            'emp_phn'=>$request['emp_phn'],
            'emp_sal'=>$request['emp_sal'],
        ]);
        return redirect()->back();
    }



public function view1(Request $request)
{
    $fifth=Fifth::where('id',$request->id)->first();
    return response()->json($fifth);
}
public function response(Request $request,fifth $fifth)
{
    $this->validate($request,['response'=>'required|max:2550',
]);
    fifth::where('id',$fifth->id)->update([
        'response'=>$request['response'],
        'updated_by'=>Auth::User()->user_id,
    ]);
    return redirect('master/empView1');
}
public function delete1(Request $request)
{
    $fifth=Fifth::where('id',$request->id)->delete();
    return redirect()->back()->withErrors(['Deleted successfully']);
}
}

