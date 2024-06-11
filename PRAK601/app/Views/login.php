<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

<?php if(session()->getFlashdata('msg')):?>
    <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
<?php endif;?>

<?= form_open('login'); ?>
<form action="/login/auth" method="post" id="text-editor">
    <div class="form-group">
        <label for="email">E-Mail</label>
        <input type="email" name="email" class="form-control" placeholder="E-Mail" value="<?= set_value('email') ?>" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-secondary">Login</button>
    </div>
</form>
<?= form_close(); ?>

<?= $this->endSection() ?>