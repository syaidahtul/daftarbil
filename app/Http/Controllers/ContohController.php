<?php

namespace App\Http\Controllers;

class ContohController extends Controller
{

    public function __construct()
    {
    }


    public function test(){
        return view('bills.bills');
    }

    
}
