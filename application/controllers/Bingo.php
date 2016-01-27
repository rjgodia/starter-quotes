<?php

/**
 * Shows the fifth quote (wise/bingo) using the Quotes model
 * and the justone view.
 *
 * controllers/Bingo.php
 *
 * ------------------------------------------------------------------------
 */
class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    /**
     * Displays the fifth (wise/bingo) quote.
     */
    function index() {
        // Load the justone as the content
        $this->data['pagebody'] = 'justone';

        // Retrieve the fifth quote
        $record  = $this->quotes->get(5);
        // Merge the associative record array with the data array
        $this->data = array_merge($this->data, $record);

        // Render the page
        $this->render();
    }

}