<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;

class HomepageController extends Controller
{
    //
    public function index(){
        return view('home.homepage');
    }
}
