<?php
    class Fotos extends Model {

        public function saveFotos() {
            if(isset($_FILES['arquivo']) && !empty($_FILES['arquivo']['tmp_name'])) {

                $permitidos = array('image/jpeg', 'image/jpg', 'image/png');

                if(in_array($_FILES['arquivo']['type'], $permitidos)) {

                    $nome = md5(time().rand(0, 999)).'.jpeg';

                    move_uploaded_file($_FILES['arquivo']['tmp_name'], 'assets/images/galeria/'.$nome);

                    $titulo = '';
                    if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
                        $titulo = $_POST['titulo'];
                    };

                    $this->insert($titulo, $nome);
                    header("Location: index");
                    die();
                }
            }
        }

        public function insert($titulo, $nome) {
            $sql = "INSERT INTO fotos SET titulo = :titulo, url = :nome";
            $sql = $this->db->prepare($sql);
            $sql->bindParam(':titulo', $titulo);
            $sql->bindParam(':nome', $nome);
            $sql->execute();
        }

        public function getFotos() {
            $array= [];

            $sql = "SELECT * FROM fotos ORDER BY id DESC";
            $sql = $this->db->prepare($sql);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }

            return $array;
        }

    }