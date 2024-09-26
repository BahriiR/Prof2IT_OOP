<?php

namespace Loader;

use \Config\Config;

class Route {

    private $route;

    private static $instance;

    private function __construct()
    {
        $this->route = Config::getRoutes();
    }

    public static function getInstance() {
        if(self::$instance === null) {
            self::$instance = new Route();
        }

        return self::$instance;
    }

    public function init()
    {
        $uri = $_SERVER["REQUEST_URI"];

        $segment = $uri;
        
        if (strpos("?", $uri)) {
            $segment = explode("?", $uri)[0];
        }
       
        $segment = trim($segment, "/");

        if (!isset($this->route[$_SERVER["REQUEST_METHOD"]])) {

            http_response_code(404); 
            include_once($_SERVER["DOCUMENT_ROOT"] . "/View/404.php");
            exit(); 
        }

        $routes = $this->route[$_SERVER["REQUEST_METHOD"]];
 
        foreach ($routes as $route) {
            if (preg_match("#^" . $route["uri"] . "$#", $segment)) {
                               
                $params = $route["params"];
                if (strpos($params, "$") !== false) {
                    $params = preg_replace("#^" . $route["uri"] . "$#", $params, $segment);
                    $params = explode("/", $params);
                } else {
                    $params = [];
                }
            
                
                $class = $route["controller"];
                $action = $route["action"];

                $controller = new $class();

                if (!method_exists($controller, $action))
                {
                    http_response_code(404); 
                    include_once($_SERVER["DOCUMENT_ROOT"] . "/View/404.php");            
                    exit();
                }

                call_user_func_array([$controller, $action], $params);
            }
        }
    }
}