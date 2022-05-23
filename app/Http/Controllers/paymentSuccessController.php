<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class paymentSuccessController extends Controller
{
    public function paymentSuccess(){
        return view('paymentSuccess');
    }
    
}
