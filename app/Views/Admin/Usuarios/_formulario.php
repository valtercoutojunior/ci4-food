<div class="form-row">
    <div class="form-group col-md-9">
        <label for="inputNome">Nome completo</label>
        <input type="text" class="form-control" name="nome" id="inputNome" value="<?= old('nome',  esc($usuario->nome)); ?>">
    </div>
    <div class="form-group col-md-3">
        <label for="inputCpf">CPF</label>
        <input type="text" class="form-control cpf" name="cpf" id="inputCpf" value="<?= old('nome', esc($usuario->cpf)); ?>">
    </div>
</div>

<div class="form-row">
    <div class="form-group col-md-4">
        <label for="inputEmail">Email</label>
        <input type="email" class="form-control" name="email" id="inputEmail" value="<?= old('email', esc($usuario->email));  ?>">
    </div>

    <div class="form-group col-md-3">
        <label for="inputTelefone">Telefone</label>
        <input type="text" class="form-control sp_celphones" name="telefone" id="inputTelefone" placeholder="(11) 99999-8765" value="<?= old('telefone', esc($usuario->telefone)); ?>">
    </div>

    <div class="form-group col-md-3">
        <label for="inputIsAdmin">Perfil</label>
        <select id="inputIsAdmin" name="is_admin" class="form-control">
            <?php if ($usuario->id) : ?>
                <option value="0" <?= (!$usuario->is_admin ? 'selected' : ''); ?> <?= set_select('is_admin', '0'); ?>>Cliente</option>
                <option value="1" <?= ($usuario->is_admin ? 'selected' : ''); ?> <?= set_select('is_admin', '1'); ?>>Administrador</option>
            <?php else : ?>
                <option value="0" <?= set_select('is_admin', '0'); ?>>Cliente</option>
                <option value="1" <?= set_select('is_admin', '1'); ?>>Administrador</option>
            <?php endif; ?>
        </select>
    </div>

    <div class="form-group col-md-2">
        <label for="inputAtivo">Ativo</label>
        <select id="inputAtivo" name="ativo" class="form-control">
            <?php if ($usuario->id) : ?>
                <option value="0" <?= (!$usuario->ativo ? 'selected' : ''); ?> <?= set_select('ativo', '0'); ?>>Inativo</option>
                <option value="1" <?= ($usuario->ativo ? 'selected' : ''); ?> <?= set_select('ativo', '1'); ?>>Ativo</option>
            <?php else : ?>
                <option value="0" <?= set_select('is_admin', '0'); ?>>Inativo</option>
                <option value="1" <?= set_select('is_admin', '1'); ?>>Ativo</option>
            <?php endif; ?>
        </select>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="inputSenha">Senha</label>
        <input type="password" class="form-control" name="password" id="inputSenha">
    </div>
    <div class="form-group col-md-6">
        <label for="inputCofirmeSenha">Confirmar Senha</label>
        <input type="password" class="form-control" name="password_confirmation" id="inputCofirmeSenha">
    </div>
</div>