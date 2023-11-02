<header>
    <h3>Excluir Resgate</h3>
</header>
<?php 
    $idResgatar = mysqli_real_escape_string($conexao,$_GET["idResgatar"]);
    $sql = "DELETE FROM tbresgatar WHERE idResgatar = '{$idResgatar}'";

    mysqli_query($conexao,$sql) or die("Erro ao excluir o registro. " . mysqli_error($conexao));
    echo "Registro excluido com sucesso!";
?>