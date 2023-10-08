<?php $session = session(); ?>
<?php if ($session->getFlashdata('errors')) : ?>
    <div class="alert alert-danger" role="alert">
        <?php foreach ($session->getFlashdata('errors') as $error) : ?>
            <p><?= esc($error) ?></p>
        <?php endforeach ?>
    </div>
<?php elseif ($session->getFlashdata('error')) : ?>
    <div class="alert alert-danger" role="alert">
        <?= $session->getFlashdata('error'); ?>
    </div>
<?php elseif ($session->getFlashdata('success')) : ?>
    <div class="alert alert-success" role="alert">
        <?= $session->getFlashdata('success'); ?>
    </div>
<?php endif; ?>