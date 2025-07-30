<?php
include_once ("helpers/url.php");
include_once ("data/categories.php");
include_once ("data/posts.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog 404-Buglândia</title>
    <!-- ESTILOS DO PROJETO -->
    <link rel="stylesheet" href= "<?= $BASE_URL ?>css/styles.css">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>/img/logo.png" alt="Blog 404-Buglândia">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL ?>" class="nav-link" >Home</a></li>
                <li><a href="#"class="nav-link">Categorias </a></li>
                <li><a href="#"class="nav-link">Sobre</a></li>
                <li><a href="<?= $BASE_URL ?>contatos.php" class="nav-link">Contatos</a></li>
            </ul>
        </nav>
    </header>