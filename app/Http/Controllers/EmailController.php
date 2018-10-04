<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function edit(){
    	return view('admin.email.edit');
    }
    public function history(){
    	return view('admin.email.history');
    }
}
