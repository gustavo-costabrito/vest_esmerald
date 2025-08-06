<?php

class InicioController extends SuportController{
    public function index(){
        $dados = [];

        $this->view('inicio', $dados);
    }
}