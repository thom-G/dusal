<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function getAdmin()
    {
    	if(Auth::user()->type== 1){
    		return view('admin.admin');	
    	}
    	else {
    		return redirect('/');
    	}
        
    }
    public function getEventCreate()
    {
        return view('admin.eventcreate');
    }
}
