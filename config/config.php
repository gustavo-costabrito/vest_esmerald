<?php

define('URL', 'https://localhost/vest_esmerald/public/');

define('METHOD', 'AES-256-GCM');

spl_autoload_register(function($class){
    $caminhos = [
        "../routes/$class.php",
        "../app/controllers/$class.php",
        "../app/models/$class.php",
        "../app/core/$class.php"
    ];

    foreach($caminhos as $valor){
        if(file_exists($valor)){
            require_once($valor);
        }
    }
});

function env(): void
{
    $file = file("../.env", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    foreach($file as $valor){
        if(str_contains($valor, '#')){
            continue;
        } else{
            $env = explode('=', $valor, 2);

            $_ENV[$env[0]] = $env[1];
        }
    }
}

if(session_status() !== PHP_SESSION_ACTIVE){
    session_start();
}