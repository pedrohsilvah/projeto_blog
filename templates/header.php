<?php
    include_once("helpers/url.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Blog</title>

    <!-- estilo do projeto -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">

    <!-- fonte do projeto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    
</head>

<body>
    <header>
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog Codar">
        </a>
        <nav>
            <ul id="navbar">
                <li>  <a href="<?= $BASE_URL ?>">Home</a> </li>

                <li>  <a href="#">Categorias</a> </li>

                <li>  <a href="#">Sobre</a> </li>

                <li>  <a href="<?= $BASE_URL ?>/contato.php">Contato</a> </li>
            </ul>
        </nav>
    </header> 