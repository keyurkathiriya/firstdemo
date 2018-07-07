<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class testController extends Controller
{

    public function index()
    {
    	$num = 10;
    	return view('welcome')->with('num',$num);
    	
    }

    public function second(){
    	echo "hello";
    }
}
