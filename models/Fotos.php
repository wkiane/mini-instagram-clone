<?php
    class Fotos extends Model
    {

        protected $user_id;

        public function getId()
        {
            $url = $_SERVER['REQUEST_URI'];
            $url = explode('/', $url);
            $this->user_id = $url[4];
        }

        public function saveFotos()
        {
            if(isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['tmp_name']))
            {

                $permitidos = array('image/jpeg', 'image/jpg', 'image/png');

                if(in_array($_FILES['arquivo']['type'], $permitidos))
                {

                    $nome = md5(time().rand(0, 999)).'.jpeg';

                    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'assets/images/galeria/'.$nome);

                    $titulo = '';
                    if(isset($_POST['titulo']) && !empty($_POST['titulo']))
                    {
                        $titulo = $_POST['titulo'];
                    };
                    
                    $user_id = $_SESSION['id'];

                    $this->insert($titulo, $nome, $user_id);
                    $location = BASE_URL.'/';
                    header("Location: $location");
                    die();
                }
            }
        }

        public function insert($titulo, $nome, $user_id)
        {
            $sql = "INSERT INTO fotos SET titulo = :titulo, `url` = :nome, `user_id` = :user_id";
            $sql = $this->db->prepare($sql);
            $sql->bindParam(':titulo', $titulo);
            $sql->bindParam(':nome', $nome);
            $sql->bindParam(':user_id', $user_id);
            $sql->execute();
        }

        public function getFotos()
        {
            $array= [];
            
            $sql = "SELECT u.nome, u.id as user_id, f.url, f.created_at, f.titulo, f.id
            AS foto_id FROM usuarios AS u JOIN fotos AS f ON u.id = f.user_id ORDER BY f.id DESC";
            $sql = $this->db->prepare($sql);
            $sql->execute();

            if($sql->rowCount() > 0)
            {
                $array = $sql->fetchAll();
            }

            return $array;
        }

        public function getFoto()
        {
            $array = [];
            $sql = "SELECT f.titulo, f.url, f.created_at, u.nome, u.id
            AS user_id FROM fotos AS f JOIN usuarios as u ON u.id = f.user_id WHERE f.id = :user_id";
            $sql = $this->db->prepare($sql);
            $sql->bindParam(':user_id', $this->user_id);
            $sql->execute();

            if($sql->rowCount() > 0)
            {
                $array = $sql->fetch();
            }

            return $array;
        }
    }