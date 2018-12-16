<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use \App\user;
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
    public function locations(){
      return view('locations');
    }
    public function register(){
      return view('register');
    }
    public function login(){
      return view('login');
    }
    public function store(){
      $user = new user();
      $user->firstName = request('firstName');
      $user->lastName = request('lastName');
      $user->email = request('email');
      $user->phoneNumber = request('phoneNumber');
      $user->gender = request('gender');
      $user->birthday =  date(request("y").'-'.request("m").'-'.request("d"));
      $user->password = md5(request('password'));
      $user->confirmpassword = md5(request('confirmpassword'));
      $user->save();
      return redirect('\register');
    }
}
