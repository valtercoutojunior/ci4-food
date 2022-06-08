<?= $this->extend('Admin/layout/principal') ?>
<?= $this->section('titulo') ?><?= $titulo; ?><?= $this->endSection() ?>


<?= $this->section('estilos') ?>
<!-- estilos da pagina que vai extender -->
<link rel="stylesheet" href="<?= site_url('admin/assets/vendor/auto-complete/jquery-ui.css'); ?>">
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

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <!-- Table with stripped rows -->
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nome completo</th>
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

<script src="../../assets/vendor/libs/datatables/jquery.dataTables.js"></script>
<script src="../../assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script src="../../assets/vendor/libs/datatables-responsive/datatables.responsive.js"></script>
<script src="../../assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js"></script>
<script src="../../assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.js"></script>
<script src="../../assets/vendor/libs/datatables-buttons/datatables-buttons.js"></script>
<script src="../../assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js"></script>
<script src="../../assets/vendor/libs/jszip/jszip.js"></script>
<script src="../../assets/vendor/libs/pdfmake/pdfmake.js"></script>
<script src="../../assets/vendor/libs/datatables-buttons/buttons.html5.js"></script>
<script src="../../assets/vendor/libs/datatables-buttons/buttons.print.js"></script>


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