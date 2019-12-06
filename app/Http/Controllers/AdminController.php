<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function _construct()
     {
	$this->middleware('auth:admin' );
     }
     /**
      * show dashboard.
      *
      *@return \Illuminate\Http\Response
      */
     public function index()
     {
	     return view('admin');
     }

}
