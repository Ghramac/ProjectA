<header>
    <h3>Inserir Resgate</h3>
</header>
<?php 
    $especieResgatar = mysqli_real_escape_string($conexao,$_POST["especieResgatar"]);
    $quantResgatar = mysqli_real_escape_string($conexao,$_POST["quantResgatar"]);
    $ruaResgatar = mysqli_real_escape_string($conexao,$_POST["ruaResgatar"]);
    $numResgatar = mysqli_real_escape_string($conexao,$_POST["numResgatar"]);
    $bairroResgatar = mysqli_real_escape_string($conexao,$_POST["bairroResgatar"]);
    $sql = "INSERT INTO tbresgatar (
        especieResgatar, 
        quantResgatar, 
        ruaResgatar, 
        numResgatar, 
        bairroResgatar)
        VALUES(
            '{$especieResgatar}', 
            '{$quantResgatar}', 
            '{$ruaResgatar}', 
            '{$numResgatar}', 
            '{$bairroResgatar}')";
        mysqli_query($conexao,$sql) or die("Erro ao executar a consulta." . mysqli_error($conexao));
        echo"O registro foi inserido com sucesso!";
?>