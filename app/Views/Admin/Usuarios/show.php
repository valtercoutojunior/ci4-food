<?= $this->extend('Admin/layout/principal') ?>
<?= $this->section('titulo') ?><?= $titulo; ?><?= $this->endSection() ?>


<?= $this->section('estilos') ?>
<!-- estilos da pagina que vai extender -->
<?= $this->endSection() ?>

<?= $this->section('breadcrumb') ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Detalhes do Usuário</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= site_url('admin/home'); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= site_url('admin/usuarios'); ?>">Listar Usuários</a></li>
                    <li class="breadcrumb-item active">Detalhes do Usuário</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<?= $this->endSection() ?>

<?= $this->section('conteudo') ?>
<!-- Main content -->
<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- Profile Image -->
                <div class="card card-info card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="Usuário sem foto" style="width: 360px;">
                        </div>

                        <h3 class="profile-username text-center mt-5">
                            <?= $usuario->nome; ?>
                        </h3>

                        <!-- <p class="text-muted text-center">Software Engineer</p> -->
                        <a href="#" class="btn btn-primary btn-block"><b>Alterar Imagem</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card card-info card-outline">

                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link active" href="#activity" data-toggle="tab">
                                    Dados Gerais
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="activity">
                                <!-- Post -->
                                <div class="post">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Nome completo</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputName" placeholder="Name" value="<?= $usuario->nome; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">E-mail</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="<?= $usuario->email; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Perfil</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName2" placeholder="Name" value="<?= $usuario->perfil; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-2 col-form-label">Situação</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-2 col-form-label">Criado em</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputSkills" placeholder="Skills" value="<?= $usuario->criado_em->humanize(); ?>">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-2 col-form-label">Atualizado em</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputSkills" placeholder="Skills" value="<?= $usuario->atualizado_em->humanize(); ?>">
                                            </div>
                                        </div>

                                    </form>
                                </div>
                                <!-- /.post -->
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <div class="d-flex justify-content-center justify-content-sm-between">

                            <a href="<?= site_url('admin/usuarios'); ?>" class="btn btn-secondary">
                                <i class="fas fa-undo-alt mr-2"></i>Voltar
                            </a>

                            <a href="<?= site_url("admin/usuarios/editar/$usuario->id"); ?>" class="btn btn-warning">
                                <i class="fas fa-pencil-alt mr-2"></i>Editar
                            </a>

                            <a href="<?= site_url("admin/usuarios/excluir/$usuario->id"); ?>" class="btn btn-danger">
                                <i class="far fa-trash-alt mr-2"></i>Excluir
                            </a>

                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<!-- aqui vai os scripts vai extender -->
<?= $this->endSection() ?>