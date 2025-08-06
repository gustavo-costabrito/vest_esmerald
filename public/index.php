<?php

require_once("../config/config.php");

env();

new Database();

Router::routers();