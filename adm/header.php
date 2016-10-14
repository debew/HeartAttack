<?php
/*
session_start();
session_name('secreta_adm');
if ($_SESSION['validacao']==1){
*/
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title> Hearth Atack Burguer </title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico" />
        <!-- Estilos Principais -->
        <link href="css/estilos.css" rel="stylesheet" type="text/css" />
        <link href="css/estilos-cadastro.css" rel="stylesheet" type="text/css" />
        <!-- Estilos banner rotativo -->
        <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css" />
    
    </head>
<body>
    <!-- Conteúdo principal -->
    <div id="container">
            
            <!-- Inicio Cabeçalho -->
            <header>
                
                <!-- Box Cabeçalho Superior -->
                <div id="superior">
                    <h1>HEARTH ATACK | BURGER BAR</h1>              
                </div>
                
                <!-- Logotipo -->
                <img id="logo" src="imagens/hearth.png" />
                
                <!-- Banner -->
                <ul class="banner">
                    <li><img src="slides/banner.jpg"></li>
                    <li><img src="slides/banner2.jpg"></li>
                    <li><img src="slides/banner-pizza.jpg"></li>
                    <li><img src="slides/banner-local.jpg"></li>
                </ul>
                <form method="post" action="galeria_adm.php" enctype="multipart/form-data">
                    <select name="taskOption">
                        <option></option>
                        <option value="b1">Banner 1</option>
                        <option value="b2">Banner 2</option>
                        <option value="b3">Banner 3</option>
                        <option value="b4">Banner 4</option>
                    </select>
                    <label for="Foto"> Foto do Banner:</label>
                    <input type="file" name="imagem" id="Foto" />
                    <input type="submit" value="Enviar foto" />
                </form>
                <!-- Box Cabeçalho Inferior -->
                
                <!-- Box Informações e Horarios -->
                <section id="inferior">
                    <article class="informacoes-border">
                        <h2> TELE-ENTREGA </h2>
                        <h3> Terça-feira a Domingo</h3>
                        <p> 51 3447-5696 | 51 8586-9192 </p>
                    </article>
                    
                    <article class="informacoes-border">
                        <h2> ALMOÇO </h2>
                        <h3> 11:00 as 15:00 </h3>
                        <p> De Terça-feira a Sexta-feira </p>
                    </article>
                    
                    <article class="informacoes-border">
                        <h2> JANTAR </h2>
                        <h3> 18:00 as 00:00 </h3>
                        <p> De Terça-feira a Domingo </p>
                    </article>
                    
                    <article class="informacoes" >
                        <h2> ENDEREÇO </h2>
                        <p> Rua dos Maias | 765</p>
                        <p> Bairro Rubem Berta | Porto Alegre / RS</p>
                    </article>
                </section>