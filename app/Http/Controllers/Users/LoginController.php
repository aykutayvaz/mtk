<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
//use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function action_index()
    {
      # code...
      /*$view = view('login.index')->with('name','aykut');
      return  $view;

      */
      $view = view('login.index')->with('name','aykut');
      //$view = view('login.index');
      $view->location='ankara';
      return  $view;
      //return $name='aykut';
    }
    public function validate_login()
    {
      $view = view('login.index');
      $view ->message ="Login oldu";
      return  $view;
    }
    public function register()
    {
        $view = view('login.register');
        return  $view;
    }
    /*@var string

    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }*/
}
