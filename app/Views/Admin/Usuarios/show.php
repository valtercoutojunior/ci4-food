<?= $this->extend('Admin/layout/principal') ?>
<?= $this->section('titulo') ?><?= $titulo; ?><?= $this->endSection() ?>


<?= $this->section('estilos') ?>
<!-- estilos da pagina que vai extender -->
<?= $this->endSection() ?>

<?= $this->section('breadcrumb') ?>
<div class="pagetitle">
    <h1>Detalhes do Usuário</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('admin/home'); ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('admin/usuarios'); ?>">Listar Usuários</a></li>
            <li class="breadcrumb-item active">Detalhes do Usuário</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<?= $this->endSection() ?>

<?= $this->section('conteudo') ?>
<section class="section profile">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                        <h2><?= $usuario->nome; ?></h2>
                        <h3>Web Designer</h3>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Detalhes Gerais</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2">
                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <h3 class="card-title">Detalhes do Usuário</h3>
                                <hr>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Nome completo</div>
                                    <div class="col-lg-9 col-md-8"><b><?= esc($usuario->nome); ?></b></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">E-mail</div>
                                    <div class="col-lg-9 col-md-8"><?= esc($usuario->email); ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Situação</div>
                                    <div class="col-lg-9 col-md-8">
                                        <?= ($usuario->ativo == 1 ? 'Ativo' : 'Inativo'); ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Perfil de acesso</div>
                                    <div class="col-lg-9 col-md-8">
                                        <?= ($usuario->is_admin ? 'Administrador' : 'Cliente'); ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Criado em</div>
                                    <div class="col-lg-9 col-md-8"><?= $usuario->criado_em->humanize(); ?></div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Atualizado em</div>
                                    <div class="col-lg-9 col-md-8"><?= $usuario->criado_em->humanize(); ?></div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="d-flex justify-content-center justify-content-sm-between">

                                    <a href="<?= site_url('admin/usuarios'); ?>" class="btn btn-secondary">
                                        <i class="bi bi-arrow-counterclockwise me-1"></i>Voltar
                                    </a>

                                    <a href="<?= site_url("admin/usuarios/editar/$usuario->id"); ?>" class="btn btn-warning">
                                        <i class="bi bi-pencil me-1"></i>Editar
                                    </a>

                                    <a href="" class="btn btn-danger">
                                        <i class="bi bi-trash3 me-1"></i>Deletar
                                    </a>

                                </div>
                            </div>
                        </div><!-- End Bordered Tabs -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<!-- aqui vai os scripts vai extender -->
<?= $this->endSection() ?>