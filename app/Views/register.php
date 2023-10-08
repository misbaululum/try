<?= $this->extend('partials/base'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h2 class="text-center">Register</h2>

            <?= $this->include('partials/message'); ?>

            <form action="<?= base_url('register'); ?>" method="post">
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" id="nik" name="nik" placeholder="Masukkan NIK" value="<?= old('nik'); ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                </div>
                <div class="form-group">
                    <label for="password_confirm">Konfimasi Password</label>
                    <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Konfimasi Password">
                </div>
                <div class="form-group">
                    <label for="cabang">Cabang</label>
                    <select class="form-control" id="cabang" name="cabang">
                        <?php foreach ($cabang as $cb) { ?>
                            <option value="<?php echo $cb; ?>"><?php echo $cb; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>