<?php

class First extends Application {
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->data['pagebody'] = 'justone';
        $record  = $this->quotes->first();
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
}

?>