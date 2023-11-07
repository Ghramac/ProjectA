<header>
    <h3><i class="bi bi-hourglass"></i> Resgate</h3>
</header>
<div>
    <a class="btn btn-outline-info mb-2" href="index.php?menuop=cad-resgatar"><i class="bi bi-clipboard-plus"></i> Novo Cadastro</a>
</div>
<div>
    <form action="index.php?menuop=resgatar" method="post">
        <div class="input-group">
            <input class="form-control" type="text" name="txt_pesquisa">
            <button class="btn btn-outline-primary btn-sm" type="submit"><i class="bi bi-search"></i> Pesquisar</button>    
        </div>
        
    </form>
</div>

<div class="tabela">
<table class="table table-striped table-hover">
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
        especieResgatar LIKE '%{$txt_pesquisa}%' or
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
            <td class="text-nowrap"><?=$dados["ruaResgatar"] ?></td>
            <td><?=$dados["numResgatar"] ?></td>
            <td class="text-nowrap"><?=$dados["bairroResgatar"] ?></td>

            <td class="text-center"><a class="btn btn-outline-primary btn-sm" href="index.php?menuop=editar-resgatar&idResgatar=<?=$dados["idResgatar"] ?>"><i class="bi bi-pencil"></i></a></td>
            <td class="text-center"><a class="btn btn-outline-danger btn-sm" href="index.php?menuop=excluir-resgatar&idResgatar=<?=$dados["idResgatar"] ?>"><i class="bi bi-trash"></i></a></td>
            
        </tr>
        <?php 
        }
        ?>
    </tbody>
</table>
</div>

<ul class="pagination justify-content-center">
<?php 
    $sqlTotal = "SELECT idResgatar FROM tbresgatar";
    $qrTotal = mysqli_query($conexao,$sqlTotal) or die( mysqli_error($conexao));
    $numTotal = mysqli_num_rows($qrTotal);

    $totalPagina = ceil($numTotal / $quantidade);

    echo "<li class='page-item'><span class='page-link'>Total: " . $numTotal . "</span></li>";

    echo '<li class="page-item"><a class="page-link" href="?menuop=resgatar&pagina=1">Primeira</a></li>';

    if($pagina>3){
        ?>
            <li class="page-item"><a class="page-link" href="?menuop=resgatar&pagina=<?php echo $pagina-1?>"><<</a></li>
        <?php 
    }

    for ($i=1;$i<=$totalPagina;$i++){

        if($i>=($pagina-2) && $i <= ($pagina+2)){
            if($i == $pagina){
                echo "<li class='page-item active'><span class='page-link'>$i</span></li>";
            }else{
                echo "<li class='page-item'><a class='page-link' href=\"?menuop=resgatar&pagina={$i}\">{$i}</a></li>";
            }
        }
    }

    if($pagina< ($totalPagina-2)){
        ?>
            <li class="page-item"><a class="page-link" href="?menuop=resgatar&pagina=<?php echo $pagina+1?>">>></a></li>
        <?php 
    }

    echo "<li class='page-item'><a class='page-link' href=\"?menuop=resgatar&pagina=$totalPagina\">Ultima</a></li>";
?>
</ul>