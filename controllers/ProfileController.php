<?php
    class ProfileController extends Controller
    {
        public function index()
        {
            $dados = [];
            $profile = new Profile();
            if(!isset($_SESSION['id']) || empty($_SESSION['id']))
            {
                $location = BASE_URL.'/';
                header("Location: $location");
                die();
            };
            $profile->setUserId();
            $dados['profile'] = $profile->getUserInfo();

            $dados['fotos'] = $profile->getFotosUser();
            $this->loadTemplate('myProfile', $dados);
        }

        public function edit()
        {
            $dados = [];
            $location = BASE_URL.'/profile';
            $profile = new Profile();
            if(!isset($_SESSION['id']) || empty($_SESSION['id']))
            {
                $location = BASE_URL.'/';
                header("Location: $location");
                die();
            }
            $profile->setUserId();
            $dados['profile'] = $profile->getUserInfo();

            if(isset($_FILES['foto']) && $_FILES['foto']['size'] != '0')
            {
                // trocar a imagem de perfil
                $profile->getDados();
                $profile->editPic();
                header("Location: $location");
            } elseif(isset($_POST['enviar']))
            {
                // trocar nome e bio
                $profile->getDados();
                $profile->update();
                header("Location: $location");
            }

            $this->loadTemplate('editProfile', $dados);
        }

        public function profile()
        {
            $dados = [];
            $profile = new Profile();
            $profile->setUserIdOthers();
            $dados['userInfo'] = $profile->getUserInfo();
            $dados['fotos'] = $profile->getFotosUser();
            $this->loadTemplate('profile', $dados);
        }
    }