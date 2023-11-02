<header>
    <h3>Resgate</h3>
</header>
<div>
    <a href="index.php?menuop=cad-resgatar">Novo Cadastro</a>
</div>
<div>
    <form action="index.php?menuop=resgatar" method="post">
        <input type="text" name="txt_pesquisa">
        <input type="submit" value="Pesquisar">
    </form>
</div>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Especie</th>
            <th>Quantidade</th>
            <th>Rua</th>
            <th>Numero</th>
            <th>Bairro</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php 

        $quantidade = 8;

        $pagina = (isset($_GET["pagina"])) ? (int)$_GET["pagina"]:1;

        $inicio = ($quantidade * $pagina) - $quantidade;

        $txt_pesquisa =(isset($_POST["txt_pesquisa"]))?$_POST["txt_pesquisa"]:"";

        $sql = "SELECT 
        idResgatar,
        CASE
            WHEN especieResgatar='C' THEN 'CACHORRO'
            WHEN especieResgatar='G' THEN 'GATO'
        ELSE
            'NÃO ESPECIFICADO'
        END AS especieResgatar,
        quantResgatar,
        upper(ruaResgatar) AS ruaResgatar,
        upper(numResgatar) AS numResgatar,
        upper(bairroResgatar) AS bairroResgatar
        FROM tbresgatar 
        WHERE 
        idResgatar='{$txt_pesquisa}' or
        ruaResgatar LIKE '%{$txt_pesquisa}%' or
        bairroResgatar LIKE '%{$txt_pesquisa}%'

        LIMIT $inicio , $quantidade
        ";
        $rs = mysqli_query($conexao,$sql) or die("Erro ao executar a consulta!" . mysqli_error($conexao));
        while ($dados = mysqli_fetch_assoc($rs)) {

        ?>
        <tr>
            <td><?=$dados["idResgatar"] ?></td>
            <td><?=$dados["especieResgatar"] ?></td>
            <td><?=$dados["quantResgatar"] ?></td>
            <td><?=$dados["ruaResgatar"] ?></td>
            <td><?=$dados["numResgatar"] ?></td>
            <td><?=$dados["bairroResgatar"] ?></td>
            <td><a href="index.php?menuop=editar-resgatar&idResgatar=<?=$dados["idResgatar"] ?>">Editar</a></td>
            <td><a href="index.php?menuop=excluir-resgatar&idResgatar=<?=$dados["idResgatar"] ?>">Excluir</a></td>
            
        </tr>
        <?php 
        }
        ?>
    </tbody>
</table>
<br>
<?php 
    $sqlTotal = "SELECT idResgatar FROM tbresgatar";
    $qrTotal = mysqli_query($conexao,$sqlTotal) or die( mysqli_error($conexao));
    $numTotal = mysqli_num_rows($qrTotal);
    $totalPagina = ceil($numTotal / $quantidade);
    echo "Total de Resgistros: $numTotal <br>";
    echo '<a href="?menuop=restagar&pagina=1">Primeira Pagina</a>';

    if($pagina>6){
        ?>
            <a href="?menuop=resgatar&pagina=<?php echo $pagina+1?>"> << </a>
        <?php 
    }

    for ($i = 1; $i <= $totalPagina; $i++){

        if($i>=($pagina-3) && $i <= ($pagina+3)){
            if($i == $pagina){
                echo $i;
            }else{
                echo "<a href=\"?menuop=restagar&pagina=$i\">$i</a> ";
            }
        }
    }

    if($pagina< ($totalPagina-5)){
        ?>
            <a href="?menuop=resgatar&pagina=<?php echo $pagina+1?>"> >> </a>
        <?php 
    }

    echo "<a href=\"?menuop=restagar&pagina=$totalPagina\">Ultima Pagina</a>";
?>
