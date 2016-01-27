<?php

/**
 * Shows the first quote and the sleep quote using the
 * Quotes model and the justone view.
 *
 * controllers/First.php
 *
 * ------------------------------------------------------------------------
 */
class First extends Application {

    function __construct() {
        parent::__construct();
    }

    /**
     * Displays the first quote.
     */
    function index() {
        // Load the justone as the content
        $this->data['pagebody'] = 'justone';

        // Retrieve the first row
        $record  = $this->quotes->first();
        // Merge the associative record array with the data array
        $this->data = array_merge($this->data, $record);

        // Render the page
        $this->render();
    }

    /**
     * Displays the first (sleep) quote.
     */
    function zzz() {
        // Load the justone as the content
        $this->data['pagebody'] = 'justone';

        // Retrieve the first row
        $record  = $this->quotes->first();
        // Merge the associative record array with the data array
        $this->data = array_merge($this->data, $record);

        // Render the page
        $this->render();
    }

}