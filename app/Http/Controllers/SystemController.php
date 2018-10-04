<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemController extends Controller
{
    public function index(){
    	return view('admin.setting_system.index');
    }

    public function userMaster(){
    	return view('admin.setting_system.master_user');
    }
    public function templateMaster(){
    	return view('admin.setting_system.master_template');
    }
}
