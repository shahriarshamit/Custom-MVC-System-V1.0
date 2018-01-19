<?php

class Home extends Controller {

    function __construct() {
        
    }
    
    public function index($param = '') {
        echo $param;
    }
    
    public function page($param = '') {
        echo $param;
    }

}
