<?php

require_once "model/HTMLElements.php";

class Home {

    public function __construct() {
    }
    
    public function home() {

        include "view/index.php";

    }

}
