<?php

class Router {
    public function __construct(){
        $this -> handleRoute();
    }

    private function handleRoute(){
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        $url = explode('/', filter_var(rtrim($url, '/')), FILTER_SANITIZE_URL);

        $controllerName = ucfirst($url[0]) . 'Controller';
        $method = isset($url[1]) && !empty($url[1]) ? $url[1] : 'index';
        $params = array_slice($url, 2);

        $controllerFile = "app/controllers/$controllerName.php";

        if (file_exists($controllerFile)) {
            require $controllerFile;

            $controller = new $controllerName();

            if(method_exists($controller, $method)){
                call_user_func_array([$controller, $method], $params);
            } else {
                http_response_code(404);
                echo "Error 404 : Metodo no encontrado";
            }
        } else {
            http_response_code(404);
            echo "Error 404 : Pagina no encontrada";
        }
    }
}