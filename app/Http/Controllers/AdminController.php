<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class AdminController extends Controller{
	
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
			'page' => 'Dashboard',
			'desc' => 'This is a quick overview of some features'
		);
		
		return view('admin.index',$data);
	}
	
}