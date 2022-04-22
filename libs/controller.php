<?php
class Controller{
    function __construct(){
        $this->view = new View();
    }
    function loadModel($controllerName){
        $url = "models/".$controllerName."Model.php";
        if(file_exists($url)){
            require_once $url;
            $modelName = $controllerName."Model";
            $this->model = new $modelName;
        }
    }
} 
?>