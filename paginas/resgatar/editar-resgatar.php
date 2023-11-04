<?php 
$idResgatar = $_GET["idResgatar"];

$sql = "SELECT * FROM tbresgatar WHERE idResgatar= {$idResgatar}";
$rs = mysqli_query($conexao,$sql) or die("Erro ao recuperar os dados do registro." . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);
?>

<header>
    <h3>Editar Resgate</h3>
</header>

<div class="row">


<div class="col-6">
    <form class="needs-validation" action="index.php?menuop=atualizar-resgatar" method="post" novalidate>
        
        <div class="row">
        <div class="mb-3 col-4">
            <label class="form-label" for="idResgatar">ID</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-key"></i>
                </span>
            <input class="form-control" type="text" name="idResgatar" value="<?=$dados["idResgatar"]?>" readonly>
            </div>
        </div>    
        <div class="mb-3 col-4">
            <label class="form-label" for="especieResgatar">Especie</label>
            <select class="form-control" name="especieResgatar" id="especieResgatar" required>
                <option <?php echo ($dados["especieResgatar"]=='')?'selected':'' ?> value="">Selecione a especie</option>
                <option <?php echo ($dados["especieResgatar"]=='C')?'selected':''?> value="C">Cachorro</option>
                <option <?php echo ($dados["especieResgatar"]=='G')?'selected':''?> value="G">Gato</option>
            </select>
            <div class="invalid-feedback">
                Por favor, informe o campo.
            </div>
        </div>
        <div class="mb-3 col-4">
            <label class="form-label" for="quantResgatar">Quantidade</label>
            <input class="form-control" type="text" name="quantResgatar" value="<?=$dados["quantResgatar"]?>" required>
            <div class="invalid-feedback">
                Por favor, informe o campo.
            </div>
        </div>    
        </div>
        <div class="row">
        <div class="mb-3 col-9">
            <label class="form-label" for="ruaResgatar">Rua</label>
            <input class="form-control" type="text" name="ruaResgatar" value="<?=$dados["ruaResgatar"]?>" required>
            <div class="invalid-feedback">
                Por favor, informe o campo.
            </div>
        </div>
        <div class="mb-3 col-3">
            <label class="form-label" for="numResgatar">Numero</label>
            <input class="form-control" type="text" name="numResgatar" value="<?=$dados["numResgatar"]?>" required>
            <div class="invalid-feedback">
                Por favor, informe o campo.
            </div>
        </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="bairroResgatar">Bairro</label>
            <input class="form-control" type="text" name="bairroResgatar" value="<?=$dados["bairroResgatar"]?>" required>
            <div class="invalid-feedback">
                Por favor, informe o campo.
            </div>
        </div> 
        <div class="mb-3">
            <input class="btn btn-primary" type="submit" value="Atualizar" name="btnAtualizar">
        </div>
    </form>
</div>
<div class="col-6">

</div>
</div>