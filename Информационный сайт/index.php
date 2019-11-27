<? include "conf/conf.php" ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CosmoPay</title>
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:300,300i,400,400i,500,500i,600,600i,700&display=swap" rel="stylesheet">
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/b155e1d7ec.js" crossorigin="anonymous"></script>
    <!-- styles -->
    <link rel="stylesheet" type="text/css" href="resource/css/style.css">
    <link rel="stylesheet" type="text/css" href="resource/css/contacts.css">
    <link rel="stylesheet" type="text/css" href="resource/css/same.css">
    <link rel="stylesheet" type="text/css" href="resource/css/mobile-wallet.css">
</head>
<body>
        <!-- loader -->
    <div class="loader">
        <div class="loader-inner"></div>
        <span >COSMOPAY</span>
    </div>
    
    <?php
        require "template/menu.php";
        require  __DIR__.$view;
        require "template/footer.php";
    ?>
    <script src="https://code.jquery.com/jquery-3.4.1.js"
    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- loader-js -->
    <script src="resource/js/loader.js"></script>
</body>
</html>
