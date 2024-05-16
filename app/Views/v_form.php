<?= $this->extend('v_template'); ?>

<?= $this->section('header') ?>
<div class="page-header min-vh-75" style="background-image: url('<?= asset('img/scc-10.png') ?>');">
    <span class="mask bg-gradient-dark opacity-6"></span>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center mx-auto my-auto">
                <h2 class="text-white">Welcome To Squidward Community Shop! The Right Choice.</h2>
                <p class="lead mb-4 text-white opacity-8"></p>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<div class="card card-body shadow-xl mx-3 mx-md-4 mt-n6">

    <!-- Section with LATEST NEWS -->
    <section class="py-7">
        <div class="container">
            <h2>Checkout</h2>

            <?php helper('form'); ?>
            <?= form_open('c_validation/index'); ?>

            <div class="input-group input-group-dynamic mb-4">
                <label for="nama" class="col-sm-2 col-form-label">Nama:</label>
                <div class="col-sm-8">
                    <input type="text" name="nama" id="nama" value="<?php echo set_value('nama'); ?>"
                        class="form-control">
                    <?php if (isset($errors['nama'])): ?>
                        <small class="text-danger"><?= $errors['nama'] ?></small>
                    <?php endif; ?>
                </div>
            </div>

            <div class="input-group input-group-dynamic mb-4">
                <label for="no_hp" class="col-sm-2 col-form-label">Nomor HP:</label>
                <div class="col-sm-8">
                    <input type="text" name="no_hp" id="no_hp" value="<?php echo set_value('no_hp'); ?>"
                        class="form-control">
                    <?php if (isset($errors['no_hp'])): ?>
                        <small class="text-danger"><?= $errors['no_hp'] ?></small>
                    <?php endif; ?>
                </div>
            </div>

            <div class="input-group input-group-dynamic mb-4">
                <label for="kota" class="col-sm-2 col-form-label">Kota:</label>
                <div class="col-sm-8">
                    <input type="text" name="kota" id="kota" value="<?php echo set_value('kota'); ?>"
                        class="form-control">
                    <?php if (isset($errors['kota'])): ?>
                        <small class="text-danger"><?= $errors['kota'] ?></small>
                    <?php endif; ?>
                </div>
            </div>

            <div class="input-group input-group-dynamic mb-4">
                <label for="provinsi" class="col-sm-2 col-form-label">Provinsi:</label>
                <div class="col-sm-8">
                    <input type="text" name="provinsi" id="provinsi" value="<?php echo set_value('provinsi'); ?>"
                        class="form-control">
                    <?php if (isset($errors['provinsi'])): ?>
                        <small class="text-danger"><?= $errors['provinsi'] ?></small>
                    <?php endif; ?>
                </div>
            </div>

            <div class="input-group input-group-dynamic mb-4">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat Pengiriman:</label>
                <div class="col-sm-8">
                    <textarea name="alamat" id="alamat"
                        class="form-control"><?php echo set_value('alamat'); ?></textarea>
                    <?php if (isset($errors['alamat'])): ?>
                        <small class="text-danger"><?= $errors['alamat'] ?></small>
                    <?php endif; ?>
                </div>
            </div>

            <div class="input-group input-group-dynamic mb-4">
                <label for="kode_pos" class="col-sm-2 col-form-label">Kode Pos:</label>
                <div class="col-sm-8">
                    <input type="text" name="kode_pos" id="kode_pos" value="<?php echo set_value('kode_pos'); ?>"
                        class="form-control">
                    <?php if (isset($errors['kode_pos'])): ?>
                        <small class="text-danger"><?= $errors['kode_pos'] ?></small>
                    <?php endif; ?>
                </div>
            </div>

            <div class="input-group input-group-dynamic mb-4">
                <div class="col-sm-10 offset-sm-2">
                    <input type="submit" value="Submit" class="btn btn-primary">
                </div>
            </div>

            </form>
        </div>
    </section>
</div>

<?= $this->endSection() ?>