<?php

class Router
{
    public static function routers(): void
    {
        $url = $_GET['url'];

        if (empty(trim($url))) {
            header('Location: ' . URL . 'inicio');
            exit;
        }

        $url = explode('/', $url);

        foreach ($url as $position => $value) {
            switch ($position) {
                case 0:
                    $controller = ucfirst((string)$value) . 'Controller';
                    break;

                case 1:
                    $method = (string)$value;
                    break;

                default:
                    $param[] = $value;
                    break;
            }
        }

        if (!isset($method) || empty($method)) {
            $method = 'index';
        }

        if (!isset($param)) {
            $param[] = '';
        }

        if(!class_exists($controller) || !method_exists($controller, $method)){
            header('Location: '.URL.'inicio');
            exit;
        }

        call_user_func_array([new $controller(), $method], $param);
    }
}
