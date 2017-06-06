<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;

class ForexController extends Controller
{
    
    public function rate($from, $to)
    {
    	

        return view('forex_api', compact('from','to'));
    }
    
}
