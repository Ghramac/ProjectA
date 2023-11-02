<?php 
$idResgatar = $_GET["idResgatar"];

$sql = "SELECT * FROM tbresgatar WHERE idResgatar= {$idResgatar}";
$rs = mysqli_query($conexao,$sql) or die("Erro ao recuperar os dados do registro." . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>

<header>
    <h3>Editar Resgatar</h3>
</header>

<div>
    <form action="index.php?menuop=atualizar-resgatar" method="post">
        <div>
            <label for="idResgatar">ID</label>
            <input type="text" name="idResgatar" value="<?=$dados["idResgatar"]?>">
        </div>
        <div>
            <label for="especieResgatar">Especie</label>
            <input type="text" name="especieResgatar" value="<?=$dados["especieResgatar"]?>">
        </div>
        <div>
            <label for="quantResgatar">Quantidade</label>
            <input type="text" name="quantResgatar" value="<?=$dados["quantResgatar"]?>">
        </div>
        <div>
            <label for="ruaResgatar">Rua</label>
            <input type="text" name="ruaResgatar" value="<?=$dados["ruaResgatar"]?>">
        </div>
        <div>
            <label for="numResgatar">Numero</label>
            <input type="text" name="numResgatar" value="<?=$dados["numResgatar"]?>">
        </div>
        <div>
            <label for="bairroResgatar">Bairro</label>
            <input type="text" name="bairroResgatar" value="<?=$dados["bairroResgatar"]?>">
        </div>
        <div>
            <input type="submit" value="Atualizar" name="btnAtualizar">
        </div>
    </form>
</div>