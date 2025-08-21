<?php

class InicioController extends Controller
{
    public function index(): void
    {
        $dados['titulo'] = "Pagina inicial";

        $this->render('inicio', $dados);
    }
}