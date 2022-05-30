<?= $this->extend('Admin/layout/principal') ?>
<?= $this->section('titulo') ?><?= $titulo; ?><?= $this->endSection() ?>


<?= $this->section('estilos') ?>
<!-- estilos da pagina que vai extender -->
<?= $this->endSection() ?>

<?= $this->section('breadcrumb') ?>
<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="<?= site_url('admin/home'); ?>">Dashboard</a></li>
            <!-- <li class="breadcrumb-item active">Dashboard</li> -->
        </ol>
    </nav>
</div><!-- End Page Title -->
<?= $this->endSection() ?>

<?= $this->section('conteudo') ?>
<section class="section dashboard">
    <h1>Home do Painel Administrativo</h1>
</section>
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<!-- aqui vai os scripts vai extender -->
<?= $this->endSection() ?>