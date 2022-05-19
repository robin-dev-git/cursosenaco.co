<?php if (!empty($salida) && !empty($colorAlert2)) : ?>
    <div class="alert <?= $colorAlert2 ?> alert-dismissible fade show" role="alert">
        <?= $salida ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>
