<?php namespace App\Http\Controllers;

class WelcomeController extends Controller {

	public function _construct()
	{
		$this->middleware('guest');
	}

	public function index()
	{
		// return 'hello world';
		return view('welcome');
	}

	public function contact()
	{
		return view('pages.contact');
	}

}