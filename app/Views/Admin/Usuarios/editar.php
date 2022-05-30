<?= $this->extend('Admin/layout/principal') ?>
<?= $this->section('titulo') ?><?= $titulo; ?><?= $this->endSection() ?>


<?= $this->section('estilos') ?>
<!-- estilos da pagina que vai extender -->
<?= $this->endSection() ?>

<?= $this->section('breadcrumb') ?>
<div class="pagetitle">
    <h1>Editar o Usuário</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= site_url('admin/home'); ?>">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url('admin/usuarios'); ?>">Listar Usuários</a></li>
            <li class="breadcrumb-item"><a href="<?= site_url("admin/usuarios/show/$usuario->id"); ?>">Detalhes do Usuário</a></li>
            <li class="breadcrumb-item active">Editar Usuário</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<?= $this->endSection() ?>

<?= $this->section('conteudo') ?>
<section class="section dashboard">
    <div class="container">

        <?= $this->include("Admin/Usuarios/_formulario"); ?>
    </div>
</section>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<!-- aqui vai os scripts vai extender -->
<?= $this->endSection() ?>