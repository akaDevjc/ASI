<?php namespace ASI\Http\Controllers;

use ASI\Http\Requests;
use ASI\Http\Controllers\Controller;

use Illuminate\Http\Request;

class IndexController extends Controller {

	public function index()
	{
		return view('index.index');
	}

	public function getAllRegs()
	{
		# AJAX CODE
	}


}
