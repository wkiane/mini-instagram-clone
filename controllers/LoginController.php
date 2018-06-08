<?php
    class LoginController extends Controller {
        
        public function index()
        {
            $dados = [];
            $logar = new Login();
            $dados['login'] = $logar->getDados();

            $this->loadTemplate('login', $dados);
        }

        public function sair()
        {
            $location = BASE_URL.'/home';
            $logar = new Login();
            $logar->sair();
            header("Location: $location");
            die();
        }
    }