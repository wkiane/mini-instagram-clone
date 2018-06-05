<?php
    class RegisterController extends Controller {
        
        public function index() {
            $location = BASE_URL . '/login';
            $dados = [];
            $register = new Register();
            $register->getDados();
            $register->validacao();
            $register->insert();
            if(isset($_POST['enviar'])) {
                header("Location: $location");
            }
            $this->loadTemplate('register', $dados);
        }
    }