<?php defined('SYSPATH') or die('No direct script access.');
 
	class Controller_DefaultTemplate extends Controller_Template {
		public $template = 'web/templates/default';
			
		
		/**
     		* The before() method is called before your controller action.
       		* In our template controller we override this method so that we can
       		* set up default values. These variables are then available to our
       		* controllers if they need to be modified.
       	*/
      	public function before()
      	{
        	parent::before();
 				
        	$lng = Request::current()->param('lang');
        	i18n::$lang = $lng . '-' . $lng;  //Fake the culture as we won't need cultures in our website, only languages.
         	$this->session= Session::instance();
         	$this->session->regenerate();
 
  	    	if ($this->auto_render)
  	    	{
  	    		// Initialize empty values
  	    		$this->template->title   		= NULL;
  	    		$this->template->content 		= NULL;
        		$this->template->keywords    	= NULL;
            	$this->template->description 	= NULL;
	            $this->template->lang			= $lng;
	            	
  				$this->template->styles 		= array();
  				$this->template->scripts 		= array();
          	}
          	
         
      	}



     	/**
      		* The after() method is called after your controller action.
       		* In our template controller we override this method so that we can
       		* make any last minute modifications to the template before anything
       		* is rendered.
       	*/     
	    public function after(){
        	if($this->auto_render){
            	$styles 	= array('assets/css/myadmin/myadmin.css' => 'screen');
             	$scripts    = array();

             	$this->template->styles  = array_reverse(array_merge($this->template->styles, $styles));
             	$this->template->scripts = array_reverse(array_merge($this->template->scripts, $scripts));
           	}

         	// Run anything that needs to run after this.
         	parent::after();
      	}
 	}  
