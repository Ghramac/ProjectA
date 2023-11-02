<header>
    <h3>Atualizar Resgate</h3>
</header>
<?php 
    $idResgatar = mysqli_real_escape_string($conexao,$_POST["idResgatar"]);
    $especieResgatar = mysqli_real_escape_string($conexao,$_POST["especieResgatar"]);
    $quantResgatar = mysqli_real_escape_string($conexao,$_POST["quantResgatar"]);
    $ruaResgatar = mysqli_real_escape_string($conexao,$_POST["ruaResgatar"]);
    $numResgatar = mysqli_real_escape_string($conexao,$_POST["numResgatar"]);
    $bairroResgatar = mysqli_real_escape_string($conexao,$_POST["bairroResgatar"]);
    $sql = "UPDATE tbresgatar SET
        especieResgatar = '{$especieResgatar}', 
        quantResgatar = '{$quantResgatar}', 
        ruaResgatar = '{$ruaResgatar}', 
        numResgatar = '{$numResgatar}', 
        bairroResgatar = '{$bairroResgatar}'
        WHERE idResgatar = '{$idResgatar}'
        ";
        mysqli_query($conexao,$sql) or die("Erro ao executar a consulta." . mysqli_error($conexao));
        echo"O registro foi atualizado com sucesso!";
?>