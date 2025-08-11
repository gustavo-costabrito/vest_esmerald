<?php

define('URL','https://localhost/vest_esmerald/public/');

spl_autoload_register(function($class){
    $files = [
        "../app/controllers/$class.php",
        "../app/models/$class.php",
        "../app/core/$class.php",
        "../routes/$class.php"
    ];

    foreach($files as $values){
        if(file_exists($values)){
            require_once($values);
        }
    }
});

function env(): void
{
    $line = file("../.env", FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);

    foreach($line as $value){
        $varEnv = explode('=', $value);

        $_ENV[$varEnv[0]] = $varEnv[1];
    }
}

if(session_status() === PHP_SESSION_NONE){
    session_start();
}