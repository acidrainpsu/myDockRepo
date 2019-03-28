<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $data = array(
            'title' => 'Home',
            'content' =>'This is the test page'
        );
        return view('pages.index')->with($data);
      
    }

    public function login(){
     
       return view('auth.login');
    }

    public function about(){
        return view('pages.about');
    }

  
}
