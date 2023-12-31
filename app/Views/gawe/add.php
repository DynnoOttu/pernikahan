<?= $this->extend('layout/default') ?>

<?= $this->section('content') ?>
<title>Create Data Gawe</title>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<section class="section">
    <div class="section-header">
        <div class="section-header-button mr-3">
            <a href="<?= site_url('gawe') ?>" class="btn"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>Create Gawe</h1>
    </div>

    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4>Buat Data Gawe / Acara</h4>
            </div>
            <div class="card-body col-md-6">
                <form action="<?= site_url('gawe') ?>" method="post" autocomplete="off">
                    <?= csrf_field() ?>
                    <div class="form-group">
                        <label for="">Nama Acara *</label>
                        <input type="text" name="name_gawe" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Acara *</label>
                        <input type="date" name="date_gawe" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="">Info</label>
                        <textarea name="info_gawe" class="form-control"></textarea>
                    </div>
                    <div class="">
                        <button type="sumit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Save</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection() ?>