<?php

class Router
{
    public static function routers()
    {
        $url = trim($_GET['url']);

        if (empty($url)) {
            header('Location:' . URL . 'inicio');
            exit;
        }

        $url = explode('/', $url);

        foreach ($url as $posicao => $valor) {
            switch ($posicao) {
                case 0:
                    $controller = ucfirst($valor) . 'Controller';
                    break;

                case 1:
                    $method = $valor;
                    break;

                default:
                    $param[] = $valor;
                    break;
            }
        }

        if(!isset($method)){
            $method = 'index';
        }

        if(!isset($param)){
            $param[] = '';
        }

        if(!class_exists($controller) || !method_exists($controller, $method)){
            header('Location:'.URL.'inicio');
            exit;
        }

        call_user_func_array([new $controller(), $method], $param);
    }
}
