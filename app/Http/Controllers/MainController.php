<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    //

    private $data = Array(
    		'title'=>'My Personal Site',
    		'subtitle'=>'Explore my world to know more about me',
    		'twitter'=>'https://twitter.com/bill_xcode',
    		'facebook'=>'https://facebook.com/bill.cero',
    		'github'=>'https://github.com/billxcode',
    		'mywebsite'=>'billtanthowijauhari.net',
    		'year'=>'2016'
    		);
    public function index(){
    	return View('index',$this->data);
    }
    public function about(){
    	return View('about',$this->data);
    }
    public function contact(){
    	return View('contact',$this->data);
    }
    public function post(){
    	return View('post',$this->data);
    }
}
