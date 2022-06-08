<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VCSjunior | <?= $this->renderSection('titulo'); ?></title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= site_url('admin/plugins/fontawesome-free/css/all.min.css'); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= site_url('admin/dist/css/adminlte.min.css'); ?>">

    <?php
    //Renderizará os estilos especificos de cada página que extender esse layout
    echo $this->renderSection('estilos');
    ?>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php
        echo $this->include('Admin/layout/topbar');
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        echo $this->include('Admin/layout/sidebar');
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php
            echo $this->renderSection('breadcrumb');
            ?>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <?php
                    echo $this->include('Admin/layout/_mensagens');
                    //Essa parte vai renderizar o conteudo de cada página que extendere o layout
                    echo $this->renderSection('conteudo');
                    ?>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- footer -->
        <?php
        echo $this->include('Admin/layout/footer');
        ?>
        <!-- end footer -->


        <!-- Control Sidebar -->
        <?php
        echo $this->include('Admin/layout/control_sidebar');
        ?>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= site_url('admin/plugins/jquery/jquery.min.js'); ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= site_url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= site_url('admin/dist/js/adminlte.min.js'); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= site_url('admin/dist/js/demo.js'); ?>"></script>

    <?php
    //Aqui será renderezidado os scripts 
    echo $this->renderSection('scripts');
    ?>
</body>

</html>