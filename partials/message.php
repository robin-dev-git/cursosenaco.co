<?php if (!empty($message) && !empty($colorAlert)) : ?>
    <div class="alert <?= $colorAlert ?> alert-dismissible fade show" role="alert">
        <?= $message ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>