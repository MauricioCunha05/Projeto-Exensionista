
<?php

if (!defined('APP_BOOTSTRAPPED')) {
    http_response_code(403);
    exit('Forbidden');
}
?>

<div class="container d-flex  flex-column align-items-center">
    <form action="actions/add.php" method="post" class="fs-5 row g-3 border  mt-3 w-50" id="addform">
    
        <div class="col-md-4">
            <div class="input-group">
                <span class="input-group-text">Data</span>
                <input type="date" class="form-control" id="inputData" name="data" min="<?= date('Y-m-d') ?>" value="<?= date('Y-m-d') ?>" >
            </div>
        </div>
    
        <div class="col-md-8">
            <div class="input-group col-md-8">
                <span class="input-group-text">Título</span>
                <input type="text" class="form-control" id="inputTitulo" name="titulo" maxlength="35" required>
            </div>
        </div>
    
    
        <div class="input-group mw-10">
            <span class="input-group-text">Descrição</span>
            <textarea class="form-control" name="descricao" required></textarea>
        </div>
    
        <button type="submit">Salvar</button>
    </form>
</div>

