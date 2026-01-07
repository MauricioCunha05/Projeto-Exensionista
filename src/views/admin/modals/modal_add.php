<div class="modal" tabindex="-1" id="addModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="actions/add.php" method="post" class="fs-5" id="addform">
        
                <div class="modal-header">
                    <h5 class="modal-title">Novo Evento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            
                <div class="modal-body">
                    <input type="hidden" name="csrf" value="<?= $_SESSION['csrf'] ?>">
                    <div class="input-group">
                        <span class="input-group-text col-md-3">Data</span>
                        <input type="date" class="form-control" id="inputData" name="data" min="<?= date('Y-m-d') ?>" max="<?= date('Y-12-31', strtotime('+5 years')) ?>" value="<?= date('Y-m-d') ?>" >
                    </div>
                
                    <div class="input-group">
                        <span class="input-group-text col-md-3">Título</span>
                        <input type="text" class="form-control" id="inputTitulo" name="titulo" maxlength="35" required>
                    </div>
                
                    <div class="input-group">
                        <span class="input-group-text col-md-3">Descrição</span>
                        <textarea class="form-control" name="descricao" required></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Criar evento</button>
                </div>
        
            </form>
        </div>
    </div>
</div>
