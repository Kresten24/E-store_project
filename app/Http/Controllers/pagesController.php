<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function home(){
      return view('home');
    }
    public function about(){
      return view('about-us');
    }
    public function contact(){
      return view('contact');
    }
    public function register(){
      return view('register');
    }
    public function login(){
      return view('login');
    }
}
