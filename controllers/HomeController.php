<?php

class HomeController extends Controller {

    public function index() {
        $dados = [];
        $fotos = new Fotos();
        $dados['fotos'] = $fotos->getFotos();
        $this->loadTemplate('home', $dados);
    }

    public function addFoto() {
        $dados = [];
        $fotos = new Fotos();
        $fotos->saveFotos();
        $this->loadTemplate('addFoto', $dados);
    }

}
