<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bingo
 *
 * @author rjgodia
 */
class Bingo extends Application {
    //put your code here
    function __construct() {
        parent::__construct();
    } 
    
    function index() {
        $this->data['pagebody'] = 'justone';
        $record  = $this->quotes->get(5);
        $this->data = array_merge($this->data, $record);
        $this->render();
    }
    
}
