<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instagram</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/assets/css/bootswatch.lux.min.css">
    <link rel="stylesheet" href="<?= BASE_URL; ?>/assets/css/style.css">
    <link rel="shortcut icon" href="<?= BASE_URL; ?>/assets/images/favicon.ico" type="image/x-icon">
</head>

<body class="bg-color">

    <?php
        if(isset($_SESSION['id']) && !empty($_SESSION['id'])) {
             require_once 'templates/nav-logado.php';
        } else {
            require_once 'templates/nav-deslogado.php';
        }
    ?>


    <?php $this->loadViewInTemplate($viewName, $viewData) ?>

    <script src="<?= BASE_URL; ?>/assets/js/jquery.js"></script>
    <script src="<?= BASE_URL; ?>/assets/js/poper.js"></script>
    <script src="<?= BASE_URL; ?>/assets/js/bootstrap.js"></script>
    <script src="<?= BASE_URL; ?>/assets/js/script.js"></script>
</body>

</html>