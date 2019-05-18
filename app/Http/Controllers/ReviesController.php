<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviesController extends Controller
{
    public function getIndex(){
	   return view('reviews');
	}
}
