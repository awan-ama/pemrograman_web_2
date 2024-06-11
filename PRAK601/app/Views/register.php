<?= $this->extend('layout/page_layout') ?>
<?= $this->section('content') ?>

<?php if(isset($validation)):?>
     <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
<?php endif;?>

<?= form_open('register'); ?>
<form action="" method="post" id="text-editor">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username" value="<?= set_value('username') ?>" required>
    </div>
    <div class="form-group">
        <label for="email">E-Mail</label>
        <input type="email" name="email" class="form-control" placeholder="E-Mail" value="<?= set_value('email') ?>" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
    </div>
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-secondary">Register</button>
    </div>
</form>
<?= form_open('register'); ?>
     
<?= $this->endSection() ?>