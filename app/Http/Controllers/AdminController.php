<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showLogin(){
    	return view('admin.auth.login');
    }

    public function login(){
    	return redirect()->route('admin.index');
    }

    public function index(){
    	return view('admin.index');
    }

    
}
