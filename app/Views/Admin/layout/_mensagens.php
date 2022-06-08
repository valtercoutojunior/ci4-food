<div class="container">
    <?php if (session()->has('sucesso')) : ?>
        <div class="alert alert-success bg-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check mr-3"></i>
            <?= session('sucesso') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <?php if (session()->has('erro')) : ?>
        <div class="alert alert-danger bg-danger alert-dismissible fade show" role="alert">
            <i class="fas fa-times mr-3"></i>
            <?= session('erro'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <?php if (session()->has('informacao')) : ?>
        <div class="alert alert-info bg-info alert-dismissible fade show" role="alert">
            <i class="fas fa-info mr-3"></i>
            <?= session('informacao') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <?php if (session()->has('atencao')) : ?>

        <div class="alert alert-info bg-info alert-dismissible fade show" role="alert">
            <i class="fas fa-info mr-3"></i>
            <?= session('atencao') ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>


    <?php if ($mensagem = session()->has('error')) : ?>
        <div class="alert alert-danger bg-danger alert-dismissible fade show" role="alert">
            <i class="fas fa-times mr-3"></i>
            <?= session('error'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
</div>