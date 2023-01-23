<?php 

/**
 * about class
 */
class About
{
	use Controller;

	public function index()
	{
		$this->view('about');
	}

}
