<?php
class Main extends Controller{
    function __construct(){
        parent::__construct();
    }
    function render(){
        $this->view->render("main/index");        
    }
    function insert(){
        $any = $_POST["anyDateForm"];
        $this->model->Insert($any);
    }
    function get(){
        $any = $this->model->get();
        $this->view->anyDate = $any;
        $this->view->render("main/index");        
    }
}
?>