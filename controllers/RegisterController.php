<?php
    class RegisterController extends Controller {
        
        public function index()
        {
            $location = BASE_URL . '/login';
            $dados = [];
            $register = new Register();
            if(isset($_POST['enviar']))
            {
                $register->getDados();
                $register->validacao();
                $register->toCripto();
                $register->insert();
                header("Location: $location");
            }
            $this->loadTemplate('register', $dados);
        }
    }