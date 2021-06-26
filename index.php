<!DOCTYPE html> 

<html>
    <head>
        <title>Projeto 05</title>

        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <link href="./css/styles.css" rel="stylesheet">

        <meta charset="utf-8">
        <meta name="keywords" content="Palavras, chaves, separadas, por, virgula">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
        <meta name="description" content="Descrição do site">
        <meta name="author" content="Nome do criador do site">
    </head>
    <body>
        <header style="border-bottom: 3px solid #EB2D2D">
           <div class="container">
                <div class="logo">
                    <img src="./images/logo.jpg" alt="Logo">
                </div>

                <nav class="desktop">
                    <ul>
                        <!-- <li><a style='color: #EB2D2D;' href="home">Home</a></li> -->
                        <li><a style='color: #EB2D2D;' href="home">Home</a></li>
                        <li><a href="venda">Venda</a></li>
                        <li><a href="sobre">Sobre</a></li>
                        <li><a href="">Contato</a></li>
                    </ul>
                </nav>

                <nav class="mobile">
                    <ul>
                        <li><a style='color: #EB2D2D;' href="home">Home</a></li>
                        <li><a href="venda">Venda</a></li>
                        <li><a href="sobre">Sobre</a></li>
                        <li><a href="">Contato</a></li>
                    </ul>
                </nav>

                <div class="clear"></div>
            </div>
        </header>

<?php
    if(isset($_GET['url'])) {
        if(file_exists($_GET['url'].'.html')) {
            include($_GET['url'].'.html');
        } else {
            include('404.html');
        }
    } else {
        include('home.html');
    }
?>

        <footer>
            <div class="container">
                <nav>
                    <ul>
                        <!-- <li><a style='color: #EB2D2D;' href="home">Home</a></li> -->
                        <li><a style='color: #EB2D2D;' href="home">Home</a></li>
                        <li><a href="venda">Venda</a></li>
                        <li><a href="sobre">Sobre</a></li>
                        <li><a href="">Contato</a></li>
                    </ul>
                </nav>

                <p>Todos os direitos reservados</p>

                <div class="clear"></div>
            </div>
        </footer>
    </body>
</html>