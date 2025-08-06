<?php

define('URL', 'https://localhost/VestEsmerald/public/');

spl_autoload_register(function($class){
    $caminhos = [
        "../app/controllers/$class.php",
        "../app/models/$class.php",
        "../app/core/$class.php",
        "../routes/$class.php"
    ];

    foreach($caminhos as $valor){
        if(file_exists($valor)){
            require_once($valor);
        }
    }
});

function env(){
    $linhas = file("../.env", FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);

    foreach($linhas as $valor){
        $env = explode('=', $valor);

        $_ENV[$env[0]] = $env[1];
    }
}