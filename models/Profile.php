<?php
    class Profile extends Model 
    {
        protected $user_id;
        protected $nome;
        protected $descricao;
        protected $pic;

        public function getDados()
        {
            $this->nome = $_POST['nome'];
            $this->descricao = $_POST['descricao'];
            $this->pic = $_FILES['foto'];
        }

        public function setUserId()
        {
            $this->user_id = $_SESSION['id'];
        }

        public function setUserIdOthers()
        {
            $url = $_SERVER['REQUEST_URI'];
            $url = explode('/', $url);
            $this->user_id = $url[4];
        }

        public function getUserInfo()
        {
            $array = [];
            $sql = "SELECT * FROM usuarios WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindParam(':id', $this->user_id);
            $sql->execute();

            if($sql->rowCount() > 0)
            {
                $array = $sql->fetch();
            }

            return $array;
        }

        public function getFotosUser()
        {
            $array = [];

            $sql = "SELECT * FROM fotos WHERE user_id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindParam(':id', $this->user_id);
            $sql->execute();
            if($sql->rowCount() > 0)
            {
                $array = $sql->fetchAll();
            }

            return $array;
        }

        public function update()
        {
            $sql = "UPDATE usuarios SET nome = :nome, descricao = :descricao WHERE id = :id;";
            $sql = $this->db->prepare($sql);
            $sql->bindParam(':nome', $this->nome);
            $sql->bindParam(':descricao', $this->descricao);
            $sql->bindParam(':id', $this->user_id);
            $sql->execute();
        }

        public function editPic()
        {
            $permitidos = array('image/jpeg', 'image/jpg', 'image/png');
            if(in_array($_FILES['foto']['type'], $permitidos))
            {
                $nome = md5($this->user_id).'.jpeg';
                move_uploaded_file($_FILES['foto']['tmp_name'], 'assets/images/usuarios/'.$nome);
            }

            $sql = "UPDATE usuarios SET url_foto = :url_foto WHERE id = :id";
            $sql = $this->db->prepare($sql);
            $sql->bindParam(':url_foto', $nome);
            $sql->bindParam(':id', $this->user_id);
            $sql->execute();
        }

    }
    