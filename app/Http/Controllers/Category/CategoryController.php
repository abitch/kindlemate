<?php

namespace App\Http\Controllers\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\View\View;
class CategoryController extends Controller
{
    //
    public function index(){
        return view('category.category');
    }
}
