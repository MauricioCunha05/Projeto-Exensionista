<div class="modal" tabindex="-1" id="loginModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/actions/login_auth.php" method="post">

                <div class="modal-header text-center text-nowrap">
                    <h5 class="modal-title">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body text-break fs-5 text-center">
                    <div class="input-group">
                        <span class="input-group-text col-md-2">Senha</span>
                        <input type="text" class="form-control" id="inputTitulo" name="pass" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>

            </form>
        </div>
    </div>
</div>