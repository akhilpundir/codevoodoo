<?php

namespace App\Controller;

class PagesController
{
	public function home()
	{
		
		return view('index');
	}

	public function fof()
	{
		require('../app/views/404.view.php');
	}

	
}