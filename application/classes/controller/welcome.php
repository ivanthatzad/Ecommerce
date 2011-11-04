<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_DefaultTemplate {

	public function action_index()
	{
		$this->template->title = "Myadmin";
		
		$this->template->content = __('Hola Mundo');
	}

} // End Welcome
