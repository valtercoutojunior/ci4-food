<?= $this->extend('Admin/layout/principal') ?>
<?= $this->section('titulo') ?><?= $titulo; ?><?= $this->endSection() ?>

<?= $this->section('estilos') ?>
<!-- estilos da pagina que vai extender -->
<?= $this->endSection() ?>

<?= $this->section('breadcrumb') ?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">
                    <?= $titulo; ?>
                </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= site_url('admin/home'); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= site_url('admin/usuarios'); ?>">Listar Usuários</a></li>
                    <li class="breadcrumb-item"><a href="<?= site_url("admin/usuarios/show/$usuario->id"); ?>">Detalhes do Usuário</a></li>
                    <li class="breadcrumb-item active">Excluir Usuário</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<?= $this->endSection() ?>

<?= $this->section('conteudo') ?>
<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="card card-danger card-outline">
            <div class="card-header">
                <h5 class="card-title">
                    <?= $titulo; ?>
                </h5>
            </div><!-- /.card-header -->

            <?= form_open("admin/usuarios/excluir/$usuario->id"); ?>

            <div class="card-body text-center">
                <div class="alert alert-danger" role="alert">
                    <h4 class="alert-heading">Confirme para excluir!</h4>
                    <p>Deseja realmente excluir o registro selecionado?</p>
                    <h5><b><?= $usuario->nome; ?></b></h5>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer bg-transparent border-top">
                <div class="d-flex justify-content-center justify-content-sm-between">
                    <a href="<?= site_url("admin/usuarios/show/$usuario->id"); ?>" class="btn btn-secondary">
                        <i class="fas fa-undo mr-3"></i>Voltar
                    </a>
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save mr-3"></i>Salvar
                    </button>
                </div>
            </div>
            <?= form_close(); ?>
        </div>
        <!-- /.card -->
    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<!-- aqui vai os scripts vai extender -->
<?= $this->endSection() ?>