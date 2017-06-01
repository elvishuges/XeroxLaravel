<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class XeroxController extends Controller
{
	
	public function cadastrar()
	{
		return view('/auth/cadastrar');
	}

	
}
