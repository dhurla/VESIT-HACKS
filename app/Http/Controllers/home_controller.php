<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use app\staff;

class home_controller extends Controller
{
    public function login(Request $request){

    		$this->validate($request,[
    				'username'=>'required',
    				'password'=>'required'
    		]);

    		$username=$request->input("username");
    		$password=$request->input("password");

    		$data= DB::select("select * from staff where username='$username'");

         if($data[0]->role==2)
    	return view('staff');
        else
        	if($data[0]->role==0)
    	return view('admin');
    else
    	if($data[0]->role==1)
    	return view('principal');
    else
    	if($data[0]->role==3)
    	return view('stakemanager');


    }
}
