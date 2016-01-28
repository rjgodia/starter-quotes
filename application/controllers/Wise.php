<?php

/**
 * Shows the sixth quote using the Quotes model
 * and the justone view.
 *
 * controllers/Wise.php
 *
 * ------------------------------------------------------------------------
 */
class Wise extends Application {

    function __construct() {
        parent::__construct();
    }

    /**
     * Displays the sixth quote
     */
    function bingo() {
        // Load the justone as the content
        $this->data['pagebody'] = 'justone';

        // Retrieve the sixth quote
        $record  = $this->quotes->get(6);
        // Merge the associative record array with the data array
        $this->data = array_merge($this->data, $record);

        // Render the page
        $this->render();
    }
}