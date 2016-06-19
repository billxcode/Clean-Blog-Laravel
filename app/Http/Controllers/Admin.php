<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Admin extends Controller
{
    //
	private $data= Array(
	'title'=>'Login Admin'
		);
	private $dataadmin = Array(
    		'title'=>'Dashboard',
    		'nameuser'=>'Bill Tanthowi Jauhari',
    		'profession'=>'Web Developer',
    		'dateregister'=>'19-06-2016',
    		);

    public function login(){
    	return View("admin.signin",$this->data);
    }
    public function dashboard(){
    	return View('admin.dashboard',$this->dataadmin);
    }
    public function profile(){
    	return View('admin.profile',$this->dataadmin);
    }
    public function content($param="write"){
    	if($param=="view"){
    		$view = 'admin.contentview';
    	}else{
    		$view = 'admin.contentwrite';
    	}
    	return View($view,$this->dataadmin);
    }
    public function account(){
    	return View("admin.account",$this->dataadmin);
    }
}
