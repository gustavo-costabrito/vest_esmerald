<?php

require_once("../config/config.php");

env();

new Database($_ENV['DB_HOST'], $_ENV['DB_NAME'], $_ENV['DB_USER'], $_ENV['DB_PASSWORD']);

Router::routes();