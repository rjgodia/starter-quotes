<?php

/**
 * Shows the first quote, sleep quote, and any quote based on is id using the
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
     * Displays the first (first) quote.
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

    /**
     * Displays the quote with the specified $id.
     *
     * @param $id int id of the row to display.
     */
    function gimme($id) {
        // Load the justone as the content
        $this->data['pagebody'] = 'justone';

        // Retrieve the row with id of $id
        $record  = $this->quotes->get($id);
        // Merge the associative record array with the data array
        $this->data = array_merge($this->data, $record);

        // Render the page
        $this->render();
    }

}