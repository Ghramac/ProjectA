<header>
    <h3>Resgate</h3>
</header>
<div>
    <a href="index.php?menuop=cad-resgatar">Novo Cadastro</a>
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
        </tr>
    </thead>
    <tbody>
        <?php 
        $sql = "SELECT * FROM tbresgatar";
        $rs = mysqli_query($conexao, $sql) or die("Erro ao executar a consulta!" . mysqli_error($conexao));
        while ($dados = mysqli_fetch_assoc($rs)) {

        ?>
        <tr>
            <td><?$dados["idResgatar"] ?></td>
            <td><?$dados["especieResgatar"] ?></td>
            <td><?$dados["quantResgatar"] ?></td>
            <td><?$dados["ruaResgatar"] ?></td>
            <td><?$dados["numResgatar"] ?></td>
            <td><?$dados["bairroResgatar"] ?></td>
            
        </tr>
        <?php 
        }
        ?>
    </tbody>
</table>
