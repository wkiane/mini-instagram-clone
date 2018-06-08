<?php
    class Register extends Model
    {

        protected $nome = '';
        protected $email = '';
        protected $email2 = '';
        protected $senha = '';
        protected $senha2 = '';

        protected $erros = [];

        public function validacao()
        {
                $this->validarSenha();
                $this->validarNome();
                $this->validarEmail();
                $this->checkEmailDB();

            if($this->erros != [])
            {
                print_r($this->erros);
                die();
            }
        }

        public function getDados()
        {
                $this->nome = $_POST['nome'];
                $this->email = $_POST['email'];
                $this->email2 = $_POST['email2'];
                $this->senha = $_POST['senha'];
                $this->senha2 = $_POST['senha2'];
        }

        public function insert()
        {
                $sql = "INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha";
                $sql = $this->db->prepare($sql);
                $sql->bindParam(':nome', $this->nome);
                $sql->bindParam(':email', $this->email);
                $sql->bindParam(':senha', $this->senha);
                $sql->execute();
        }

        public function toCripto()
        {
            $this->senha = md5($this->senha);
            $this->senha2 = md5($this->senha2);
        }

        public function validarNome()
        {
            if($this->nome == '')
            {
                array_push($this->erros, "Please fill out the name field");
            }
        }


        public function validarEmail()
        {
            if($this->email == '')
            {
                array_push($this->erros, "Please fill out the e-mail field");
            } elseif($this->email != $this->email2)
            {
                array_push($this->erros, "The e-mail fields must be equal!");
            }
        }

        public function checkEmailDB()
        {
            $sql = "SELECT * FROM usuarios WHERE email = :email";
            $sql = $this->db->prepare($sql);
            $sql->bindParam(':email', $this->email);
            $sql->execute();

            if ($sql->rowCount() != 0)
            {
                array_push($this->erros, "E-mail already taken!");
            }
        }

        public function validarSenha()
        {
            if($this->senha == '')
            {
                array_push($this->erros, "Please fill out the password field");
            } elseif(strlen($this->senha) < 4)
            {
                array_push($this->erros, "The password must be at least 4 characters long");
            } elseif($this->senha != $this->senha2)
            {
                array_push($this->erros, "Passwords does not match!");
            }
        }
    }