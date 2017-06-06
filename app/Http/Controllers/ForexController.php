<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Validator;

class ForexController extends Controller
{
    
    public function rate($from, $to)
    {
    	$response = file_get_contents('http://query.yahooapis.com/v1/public/yql?q=select+%2A+from+yahoo.finance.xchange+where+pair+in+%28%22' . $from . $to . '%22%29&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys');
        $rate = stristr(substr(stristr(stristr($response,"Name"),"Rate"),7),"\"",true);
        $rate = (float) $rate;
        return view('forex_api', compact('from', 'to', 'response', 'rate'));
    }
    
}
