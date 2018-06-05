<?php
    class Register extends Model {

        protected $nome = '';
        protected $email = '';
        protected $email2 = '';
        protected $senha = '';
        protected $senha2 = '';

        protected $erros = [];

        public function insert() {
            if(isset($_POST['enviar'])) {
                $sql = "INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha";
                $sql = $this->db->prepare($sql);
                $sql->bindParam(':nome', $this->nome);
                $sql->bindParam(':email', $this->email);
                $sql->bindParam(':senha', $this->senha);
                $sql->execute();
            }
        }

        public function validacao() {
            if(isset($_POST['enviar'])) {
                $this->validarNome();
                $this->validarEmail();
                $this->checkEmailDB();
                $this->validarSenha();
            }
            if($this->erros != []) {
                print_r($this->erros);
                die();
            }
        }

        public function getDados(){
            if (isset($_POST['enviar'])) {
                $this->nome = $_POST['nome'];
                $this->email = $_POST['email'];
                $this->email2 = $_POST['email2'];
                $this->senha = md5($_POST['senha']);
                $this->senha2 = md5($_POST['senha2']);
            }
        }

        public function validarNome() {
            if($this->nome == '') {
                array_push($this->erros, "Please fill out the name field");
            }
        }


        public function validarEmail() {
            if($this->email == '') {
                array_push($this->erros, "Please fill out the e-mail field");
            } elseif($this->email != $this->email) {
                array_push($this->erros, "The e-mail fields must be equal!");
            }
        }

        public function checkEmailDB() {
            $sql = "SELECT * FROM usuarios WHERE email = :email";
            $sql = $this->db->prepare($sql);
            $sql->bindParam(':email', $this->email);
            $sql->execute();

            if ($sql->rowCount() != 0) {
                array_push($this->erros, "E-mail already taken!");
            }
        }

        public function validarSenha() {
            if(strlen($this->senha > 5)) {
                array_push($this->erros, "The password must be at least 6 characters long");
            } elseif($this->senha != $this->senha2) {
                array_push($this->erros, "Passwords does not match!");
            }
        }
    }