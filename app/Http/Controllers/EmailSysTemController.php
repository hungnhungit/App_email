<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailSysTemController extends Controller
{
    public function systemEmail(){
    	return view('admin.setting_email.index');
    }

    public function listCompany(){
    	return view('admin.setting_email.company_list');
    }

    public function listCustomer(){
    	return view('admin.setting_email.customer_list');
    }

    public function listRole(){
    	return view('admin.setting_email.role_list');
    }

    public function importCsv(){
    	return view('admin.setting_email.import_csv');
    }

    public function configEmail(){
    	return view('admin.setting_email.config_email');
    }
}
