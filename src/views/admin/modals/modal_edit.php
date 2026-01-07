<div class="modal" tabindex="-1" id="editModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="actions/edit.php" method="post" class="fs-5" id="editform">
        
                <div class="modal-header">
                    <h5 class="modal-title">Editar Evento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body">
                    <input type="hidden" name="csrf" value="<?= $_SESSION['csrf'] ?>">
                    <input type="hidden" name="id">
                    <div class="input-group">
                        <span class="input-group-text col-md-3">Data</span>
                        <input type="date" class="form-control" id="inputData" name="data" min="<?= date('Y-m-d') ?>" max="<?= date('Y-12-31', strtotime('+5 years')) ?>" value="<?= date('Y-m-d', strtotime('+5 years'))  ?>" >
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
                    <button type="submit" class="btn btn-primary">Confirmar edição</button>
                </div>
        
            </form>
        </div>
    </div>
</div>