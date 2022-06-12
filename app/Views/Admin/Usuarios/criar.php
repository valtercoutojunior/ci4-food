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
                <h1 class="m-0"><?= $titulo; ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= site_url('admin/home'); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= site_url('admin/usuarios'); ?>">Listar Usuários</a></li>
                    <li class="breadcrumb-item active">Criar Usuário</li>
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
        <div class="card card-success card-outline">
            <div class="card-header">
                <h5 class="card-title">
                    <?= $titulo; ?>
                </h5>
            </div><!-- /.card-header -->

            <?= form_open("admin/usuarios/cadastrar"); ?>

            <div class="card-body">
                <?php if (session()->has('errors_model')) : ?>
                    <ul class="list-unstyled">
                        <?php foreach (session('errors_model') as $erro) : ?>
                            <li class="text-danger"><?= $erro; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <?= $this->include("Admin/Usuarios/_formulario"); ?>
            </div>
            <!-- /.card-body -->
            <div class="card-footer bg-transparent border-top">
                <div class="d-flex justify-content-center justify-content-sm-between">
                    <a href="<?= site_url("admin/usuarios"); ?>" class="btn btn-secondary">
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
<script src="<?= site_url("admin/plugins/mask/jquery.mask.min.js"); ?>"></script>
<script src="<?= site_url("admin/plugins/mask/app.js"); ?>"></script>




<?= $this->endSection() ?>