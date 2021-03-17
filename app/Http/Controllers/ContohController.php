<?php

namespace App\Http\Controllers;

class ContohController extends Controller
{
    protected $property;

    public function __construct($property)
    {
        $this->property = $property;
    }

    
}
