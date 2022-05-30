<div class="card">
    <div class="card-header border-0">
        <h5 class="card-title">
            <?= $usuario->nome; ?>
        </h5>
    </div>

    <form>
        <div class="card-body">

            <div class="row">
                <div class="col-md col-md-8">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nome" id="inputNome" placeholder="Nome completo" value="<?= esc($usuario->nome); ?>">
                        <label for="inputNome">Nome completo</label>
                    </div>
                </div>
                <div class="col-md col-md-4">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="cpf" id="inputCpf" placeholder="CPF" value="<?= $usuario->cpf; ?>">
                        <label for="inputCpf">CPF</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md col-md-6">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="E-mail" value="<?= esc($usuario->email); ?>">
                        <label for="inputEmail">E-mail</label>
                    </div>
                </div>
                <div class="col-md col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="telefone" id="inputTelefone" placeholder="(11) 99999-8765" value="<?= esc($usuario->telefone); ?>">
                        <label for="inputTelefone">Telefone</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md col-md-6">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="E-mail" value="<?= esc($usuario->email); ?>">
                        <label for="inputEmail">E-mail</label>
                    </div>
                </div>
                <div class="col-md col-md-6">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="telefone" id="inputTelefone" placeholder="(11) 99999-8765" value="<?= esc($usuario->telefone); ?>">
                        <label for="inputTelefone">Telefone</label>
                    </div>
                </div>
            </div>



            <div class="form-floating mb-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;"></textarea>
                <label for="floatingTextarea">Comments</label>
            </div>

            <div class="form-floating mb-3">
                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <label for="floatingSelect">Works with selects</label>
            </div>

        </div>

        <div class="card-footer">
            <div class="d-flex justify-content-center justify-content-sm-between">

                <a href="<?= site_url("admin/usuarios/show/$usuario->id"); ?>" class="btn btn-secondary">
                    <i class="bi bi-arrow-counterclockwise me-1"></i>Voltar
                </a>

                <button type="submit" class="btn btn-success">
                    <i class="bi bi-save me-1"></i>Salvar
                </button>
            </div>
        </div>
    </form>
</div>