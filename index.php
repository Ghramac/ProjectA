<?php 
include("db/conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Amanhecer 1.0</title>
</head>
<body>
    <header>
        <h1>Projeto Amanhecer 1.0</h1>
        <nav>
            <a href="index.php?menuop=home">Home</a> |
            <a href="index.php?menuop=adocao">Adoção</a> |
            <a href="index.php?menuop=resgatar">Resgate</a> |
            <a href="index.php?menuop=dados">Dados</a>
        </nav>
    </header>
    <main>
        <hr>
        <?php
            $menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "home";
            switch ($menuop) {
                case 'home':
                    include('paginas/home/home.php');
                    break;
                case 'adocao':
                    include('paginas/adocao/adocao.php');
                    break;
                case 'resgatar':
                    include('paginas/resgatar/resgatar.php');
                    break;
                case 'cad-resgatar':
                    include('paginas/resgatar/cad-resgatar.php');
                    break;
                case 'dados':
                    include('paginas/dados/dados.php');
                    break;
                default:
                    include('paginas/home/home.php');
                    break;
            }
        ?>
    </main>   
</body>
</html>