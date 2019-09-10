<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class MailController extends Controller
{
    //
    public function basic_email(Request $request)
    {
    	$data=array('name'=>$request['name'],'message1'=>$request['message']);
    	$email=$request['email'];
    	Mail::send('mail.sendMail',$data,function($message) use ($email){
    		// 'text'=>'
    		$message->to($email,'Infidata')->subject
    		('welcome to zomato');
    	});
    	$data1=array('name'=>$request['name'],'message1'=>$request['message'],'email'=>$request['email']);
    	Mail::send('mail.admin',$data1,function($message){
    		// 'text'=>'
    		$message->to("s1st15cs139@gmail.com",'Infidata')->subject
    		('message from user');
    	});
    	return redirect()->back()->withErrors(['we will get back to you soon']);
    }
}
