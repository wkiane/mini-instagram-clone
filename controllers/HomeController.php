<?php

class HomeController extends Controller {

    public function index() {
        $dados = [];
        $fotos = new Fotos();
        $dados['fotos'] = $fotos->getFotos();
        $this->loadTemplate('home', $dados);
    }

    public function addFoto() {
        $location = BASE_URL.'/login';
        $dados = [];

        $fotos = new Fotos();
        if (empty($_SESSION['id'])) {
            header("Location: $location");
        }

        $fotos->saveFotos();

        $this->loadTemplate('addFoto', $dados);
    }

}
