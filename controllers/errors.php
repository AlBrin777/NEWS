<?php
class Errors extends Controller{
    function __construct(){
        parent::__construct();
    }
    function render(){
        $this->view->render("errors/index");        
    }
}
?>