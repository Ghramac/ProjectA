<header>
    <h3><i class="bi bi-hourglass"></i> Cadastro Resgate</h3>
</header>
<div>
    <form class="needs-validation" action="index.php?menuop=inserir-resgatar" method="post" novalidate>
        <div class="row">
        <div class="mb-3 col-3">
            <label class="form-label" for="especieResgatar">Especie</label>
            <select class="form-control" name="especieResgatar" id="especieResgatar" required>
                <option selected value="">Selecione a especie</option>
                <option value="C">Cachorro</option>
                <option value="G">Gato</option>
            </select>
            <div class="invalid-feedback">
                Por favor, informe o campo.
            </div>
        </div>
        <div class="mb-3 col-3">
            <label class="form-label" for="quantResgatar">Quantidade</label>
            <input class="form-control" type="text" name="quantResgatar" required>
            <div class="invalid-feedback">
                Por favor, informe a quantidade.
            </div>
        </div>    
        </div>
        <div class="row">
         <div class="mb-3 col-3">
            <label class="form-label" for="ruaResgatar">Rua</label>
            <input class="form-control" type="text" name="ruaResgatar" required>
            <div class="invalid-feedback">
                Por favor, informe a rua.
            </div>
        </div>   
        <div class="mb-3 col-3">
            <label class="form-label" for="numResgatar">Numero</label>
            <input class="form-control" type="text" name="numResgatar" required>
            <div class="invalid-feedback">
                Por favor, informe o numero.
            </div>
        </div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="bairroResgatar">Bairro</label>
            <input class="form-control" type="text" name="bairroResgatar" required>
            <div class="invalid-feedback">
                Por favor, informe o bairro.
            </div>
        </div>
        <div class="mb-3">
            <input class="btn btn-primary" type="submit" value="Adicionar" name="btnAdicionar">
        </div>
    </form>
</div>