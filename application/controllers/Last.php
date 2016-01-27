<?php

/**
 * A single page which shows the quote of Last.
 * 
 * controllers/Last.php
 *
 * ------------------------------------------------------------------------
 */
class Last extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        // Load the justone as the content
        $this->data['pagebody'] = 'justone';
        
        // Retrieve the last row
        $record = $this->quotes->last();
        // Merge the quote data with the justone view data
        $this->data = array_merge($this->data, $record);
        
        // Render the page
        $this->render();
    }

}

/* End of file Last.php */
/* Location: application/controllers/Last.php */