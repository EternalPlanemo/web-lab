<?php

namespace App\Controllers;

use App\Request\Request;

class HomeController {
    public function index()
    {
        $request = Request::make();
        
        dd('hi');
    }
}