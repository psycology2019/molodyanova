<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfedentController extends Controller
{
    public function getIndex(){
	   return view('confedencialnost');
	}
}
