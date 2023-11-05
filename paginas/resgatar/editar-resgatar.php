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
        <div class="mb-3">
            <label class="form-label" for="idResgatar">ID</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="bi bi-key"></i>
                </span>
            <input class="form-control" type="text" name="idResgatar" value="<?=$dados["idResgatar"]?>" readonly>
            </div>
        </div>
        <div class="row">
            
        <div class="mb-3 col-6">
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
        <div class="mb-3 col-6">
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
    <?php 
        if($dados["fotoResgatar"]== "" || !file_exists('./paginas/resgatar/fotos-resgatar/'. $dados["fotoResgatar"])){
            $nomeFoto = "sem-foto-resgatar.png";
        }else {
            $nomeFoto = $dados["fotoResgatar"];
        }
    ?>
    <div class="mb-3">
        <img class="img-fluid" width="500" src="./paginas/resgatar/fotos-resgatar/<?=$nomeFoto?>" alt="Foto">
    </div>

    <div class="editar-foto">
        <form id="form-upload-foto" class="mb-3" action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="idResgatar" value="<?=$idResgatar?>">

            <div class="input-group mb-3">
            <div class="input-group-prepend">
                <button class="btn btn-info" type="button" id="arquivo">Enviar</button>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="arquivo" aria-describedby="arquivo">
                <label class="custom-file-label" for="arquivo">Alterar imagem</label>
            </div>
            </div>
        </form>

        <div id="mensagem" class="mb-3 alert alert-primary">
            Mensagem!
        </div>
        <div id="preloader" class="progress">
            <div id="barra" class="progress-bar bg-danger" 
            role="progressbar" 
            style="width: 0%" 
            aria-valuenow="0" 
            aria-valuemin="0" 
            aria-valuemax="100">0%</div>
        </div>    
    </div>
    
</div>
</div>