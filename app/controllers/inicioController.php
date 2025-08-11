<?php

class InicioController extends Controller
{
    public function index(): void
    {
        $data = [];

        $this->render('inicio', $data);
    }
}