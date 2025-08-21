<?php

class Router
{
    public static function routes(): void
    {
        $url = trim($_GET['url']);

        if(empty($url)){
            header('Location: '. URL . 'inicio');
            exit;
        }

        $url = explode('/', $url);

        foreach($url as $posicao => $valor){
            match($posicao){
                0 => $controller = ucfirst($valor) . 'Controller',
                1 => $method = strtolower($valor),
                default => $param[] = $valor
            };
        }

        if(!isset($method)){
            $method = 'index';
        }

        if(!isset($param)){
            $param[] = '';
        }

        if(!class_exists($controller) || !method_exists($controller, $method)){
            http_response_code(404);
            echo json_encode([
                'erro' => 'Pagina nao encontrada'
            ]);
            exit;
        }

        call_user_func_array([new $controller(), $method], $param);
    }
}