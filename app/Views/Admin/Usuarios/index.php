<?= $this->extend('Admin/layout/principal') ?>
<?= $this->section('titulo') ?><?= $titulo; ?><?= $this->endSection() ?>


<?= $this->section('estilos') ?>
<!-- estilos da pagina que vai extender -->
<link rel="stylesheet" href="<?= site_url('admin/plugins/auto-complete/jquery-ui.css'); ?>">
<?= $this->endSection() ?>

<?= $this->section('breadcrumb') ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Listagem de Usuários</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= site_url('admin/home/index'); ?>">Home</a></li>
                    <li class="breadcrumb-item active">Listar Usuários</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<?= $this->endSection() ?>

<?= $this->section('conteudo') ?>
<div class="container">

    <div class="card">
        <div class="card-header">

            <div class="row d-flex align-items-center bd-highlight">
                <div class="col-12 col-sm-6 my-2">
                    <h5 class="card-title"><?= $titulo; ?></h5>
                </div>

                <div class="col-12 col-sm-6 my-2">
                    <a href="#" class="btn btn-primary float-md-right">
                        <i class="fas fa-plus mr-2"></i>Novo
                    </a>
                </div>
            </div>

            <div class="row my-3">
                <div class="col-12">
                    <div class="ui-widget">
                        <input class="form-control" id="query" name="query" placeholder="Nome do usuário...">
                    </div>
                </div>
            </div>
        </div>

        <div class="card-body">
            <!-- Table with stripped rows -->
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nome completo</th>
                            <th class="d-none d-md-table-cell">E-mail</th>
                            <th class="d-none d-sm-table-cell">CPF</th>
                            <th class="d-none d-xl-table-cell">Situação</th>
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
                                <td class="d-none d-md-table-cell"><?= $usuario->email; ?></td>
                                <td class="d-none d-sm-table-cell"><?= $usuario->cpf; ?></td>
                                <td class="d-none d-xl-table-cell"><?= ($usuario->ativo ? '<span class="badge bg-success px-3 py-2"><i class="far fa-thumbs-up mr-1"></i>Ativo</span>' : '<span class="badge bg-danger px-3 py-2"><i class="far fa-thumbs-down mr-1"></i>Inativo</span>'); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <!-- End Table with stripped rows -->
            </div>
        </div>
        <div class="card-footer bg-transparent">
            footer aqui
        </div>
    </div>



</div>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<!-- aqui vai os scripts vai extender -->
<script src="<?= site_url('admin/plugins/auto-complete/jquery-ui.js'); ?>"></script>

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