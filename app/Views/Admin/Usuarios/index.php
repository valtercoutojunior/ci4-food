<?= $this->extend('Admin/layout/principal') ?>
<?= $this->section('titulo') ?><?= $titulo; ?><?= $this->endSection() ?>


<?= $this->section('estilos') ?>
<!-- estilos da pagina que vai extender -->
<link rel="stylesheet" href="<?= site_url('admin/assets/vendor/auto-complete/jquery-ui.css'); ?>">
<?= $this->endSection() ?>

<?= $this->section('breadcrumb') ?>
<div class="pagetitle">
    <h1>Listando Usuários</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?= site_url('admin/home'); ?>">
                    Dashboard
                </a>
            </li>
            <li class="breadcrumb-item active">Listar Usuários</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<?= $this->endSection() ?>


<?= $this->section('conteudo') ?>
<div class="container">

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <?= $titulo; ?>
                    </h5>

                    <div class="ui-widget">
                        <input class="form-control mb-5" placeholder="Pesquisar usuário..." id="query" name="query">
                    </div>


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
                                    <td>
                                        <a href="<?= site_url("admin/usuarios/show/$usuario->id"); ?>" class="text-dark list-unstyled">
                                            <?= $usuario->nome; ?>
                                        </a>
                                    </td>
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
</div>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<!-- aqui vai os scripts vai extender -->
<script src="<?= site_url('admin/assets/vendor/auto-complete/jquery-ui.js'); ?>"></script>
<script>
    $(function() {
        $("#query").autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "<?= site_url('admin/usuarios/procurar'); ?>",
                    dataType: "json",
                    data: {
                        term: request.term
                    },
                    success: function(data) {
                        if (data.length < 1) {
                            var data = [{
                                label: 'Usuário não encontrado',
                                value: -1
                            }];
                        } //Fim if data < 1
                        response(data); //retorna os dados retornados
                    },
                }); //Fim ajax
            },
            minLength: 1,
            select: function(event, ui) {
                if (ui.item.value == -1) {
                    $(this).val("");
                    return false;
                } else {
                    window.location.href = "<?= site_url('admin/usuarios/show/') ?>" + ui.item.id;
                }
            } //Fim select
        }); //fim function auto complete

    });
</script>

<?= $this->endSection() ?>