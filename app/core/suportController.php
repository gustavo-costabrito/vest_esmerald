<?php

class SuportController{
    public function view(string $pag, array $dados = []){
        extract($dados);

        require_once("../app/views/$pag.php");
    }
}