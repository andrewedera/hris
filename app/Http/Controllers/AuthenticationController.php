<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class AuthenticationController extends Controller{
	
	protected $pub;
	
	public function __construct(){
		$this->pub = array(
			'title' => 'Ceciro'
		);
	}
	
	public function index(){
		$pub = $this->pub;
		
		$data = array(
			'pub' => $pub,
			'page' => 'Login',
			'class' => 'login'
		);
		
		return view('login.login',$data);
	}
	
}