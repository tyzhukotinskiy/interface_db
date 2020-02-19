<?php
    class Router{
        public $routes;

        public function __construct()
        {
            $this->routes = include_once 'routes.php';
        }

        public function run(){
            $uri = $_SERVER['REQUEST_URI'];
            foreach($this->routes as $uriPattern => $path){
                if(preg_match("~$uriPattern~", $uri)){
                    $route = preg_replace("~$uriPattern~", $path, $uri);
                    $uriParts = explode('/', $route);
                    $uriParts = array_diff($uriParts, array(''));

                    $controller_name = array_shift($uriParts).'Controller';
                    $controller_file = ucfirst($controller_name).'.php';
                    include_once ($controller_file);
                    $controller = new $controller_name();

                    $action = 'action'.ucfirst(array_shift($uriParts));

                    if(count($uriParts)>0)call_user_func_array(array($controller, $action), $uriParts);
                    else $controller->$action();

                    break;
                }
            }
        }
    }
?>