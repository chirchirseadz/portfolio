<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $date = date("Y");

        $pageData = [
            'title' => 'sydney',
            'date' => $date,   
        ];

        return view("frontend.index", $pageData);
    }
}
