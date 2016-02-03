<?php

class First extends Application {
    
	//constructor
	function __construct() {
        parent::__construct();
    }
    
	//index that creates link to the first in the nav
	function index() {
        $this->data['pagebody'] = 'justone';
        $record  = $this->quotes->first();
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
	
	//creates zzz link to the first one in the list
	function zzz() {
        $this->data['pagebody'] = 'justone';
        $record  = $this->quotes->first();
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}

?>