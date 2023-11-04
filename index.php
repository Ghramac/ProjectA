<?php 
include("db/conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilo-padrao.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Projeto Amanhecer 1.0</title>

</head>
<body>
    <header class="bg-info">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-info bg-info">
            <a class="navbar-brand" href="#">
                <img src="img/logo-amanhecer-white.png" alt="Proj-Amanhecer">
            </a>
            
            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active"><a class="nav-link" href="index.php?menuop=home">Home</a></li>
                    <li class="nav-item "><a class="nav-link" href="index.php?menuop=adocao">Adoção</a></li>
                    <li class="nav-item "><a class="nav-link" href="index.php?menuop=resgatar">Resgate</a></li>
                    <li class="nav-item "><a class="nav-link" href="index.php?menuop=dados">Dados</a></li>
                </ul>
            </div>
        </nav>
    </div>
    </header>
    <main>
        <div class="container">
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
                case 'inserir-resgatar':
                    include('paginas/resgatar/inserir-resgatar.php');
                    break;
                case 'editar-resgatar':
                    include('paginas/resgatar/editar-resgatar.php');
                    break;
                case 'excluir-resgatar':
                    include('paginas/resgatar/excluir-resgatar.php');
                    break;
                case 'atualizar-resgatar':
                    include('paginas/resgatar/atualizar-resgatar.php');
                    break;
                case 'dados':
                    include('paginas/dados/dados.php');
                    break;
                default:
                    include('paginas/home/home.php');
                    break;
            }
        ?>
        </div>
    </main>
    <footer class="container-fluid bg-info">

            <div class="text-center">Projeto Amanhecer V 1.0</div>

    </footer>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="./js/validacao.js"></script>

</body>
</html>