<?php
    class Login extends Model
    {

        protected $email = '';
        protected $senha = '';

        public function getDados()
        {

            if(isset($_POST['enviar']))
            {
                $this->email = $_POST['email'];
                $this->senha = md5($_POST['senha']);
            }

            $this->logar();
        }

        public function logar() {

            if(isset($_POST['enviar'])) 
            {
                $sql = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";
                $sql = $this->db->prepare($sql);
                $sql->bindParam(':email', $this->email);
                $sql->bindParam('senha', $this->senha);
                $sql->execute();
                
                if($sql->rowCount() > 0)
                {
                    $dados = $sql->fetch();
                    $_SESSION['id'] = $dados->id;
                    header("Location: home");
                } else
                {
                    return 'Wrong e-mail or password';
                }
                
            }

        }

        public function sair()
        {
            session_destroy();
        }

    }