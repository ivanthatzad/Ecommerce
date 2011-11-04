<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Myadmin_Welcome  extends Controller_Myadmin_DefaultTemplate {

	public function action_index()
	{
		$this->template->title = "Myadmin";
		
	
		$this->template->content = 'hello, myadmin!';
	}
	
} // End Welcome
