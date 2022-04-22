<?php
class App{
    function __construct(){
        
        $url = isset($_GET["url"]) ? $_GET["url"]: null;
        $url = rtrim($url, "/");
        $url = explode("/", $url);

        if(empty($url[0])){
            $controllerFile = "controllers/main.php";
            require_once $controllerFile;
            $controller = new Main();
            $controller->loadModel("Main");
            $controller->render();
            return false;
        }

        $controllerFile = "controllers/".$url[0].".php";
        if(file_exists($controllerFile)){
            require_once $controllerFile;
            $controller = new $url[0];
            $controller->loadModel($url[0]);
            $url_len = sizeof($url);
            if($url_len > 1){
                if($url_len > 2){
                    $others = [];
                    for($i = 2; $i < $url_len; $i++){
                        array_push($others, $url[$i]);
                    }
                    $controller->{$url[1]}($others);
                }else{
                    $controller->{$url[1]}();
                }
            }else{
                $controller->render();
            }
        }else{
            require_once "controllers/errors.php";
            $controller = new Errors();
            $controller->render();
        }

    }
} 
?>