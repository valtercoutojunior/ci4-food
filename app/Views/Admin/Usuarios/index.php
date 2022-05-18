<?= $this->extend('Admin/layout/principal') ?>
<?= $this->section('titulo') ?><?= $titulo; ?><?= $this->endSection() ?>


<?= $this->section('estilos') ?>
<!-- estilos da pagina que vai extender -->
<?= $this->endSection() ?>


<?= $this->section('conteudo') ?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <?= $titulo; ?>
                </h5>

                <!-- Table with stripped rows -->
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome Completo</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Situação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $usuario) : ?>
                            <tr>
                                <td><?= $usuario->nome; ?></td>
                                <td><?= $usuario->email; ?></td>
                                <td><?= $usuario->cpf; ?></td>
                                <td><?= ($usuario->ativo ? '<span class="badge bg-success px-3 py-2">Ativo</span>' : '<span class="badge bg-danger px-3 py-2">Inativo</span>'); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->

            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<!-- aqui vai os scripts vai extender -->
<?= $this->endSection() ?>