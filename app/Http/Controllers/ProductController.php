<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth'); 
    }
    
    public function store(Request $request){
        
         dd($request->all()); 
    }
}
