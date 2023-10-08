<?= $this->extend('partials/base'); ?>

<?= $this->section('content'); ?>

<div class="container mt-5">
    <div class="glass-container p-4">
    
    <div class="container mt-4">
        <img src="<?= base_url('public/img/Primadaya-Banner.jpg'); ?>" class="img-fluid rounded" alt="Banner">
    </div>
    <br>
        <h2 class="text-center" style="color:#293773;">Selamat Datang di Halaman Beranda Primadaya Plastisindo</h2>
<br>
<br>
        <div class="w3-container w3-green">
  <h3 class="text-center">Website Form Demo</h3>
  <p class="text-center">Percobaan pertama</p>
</div>

<div class="container px-lg-5">
  <div class="row mx-lg-n5">
    <div class="col py-3 px-lg-5"> 
        <h4>London</h4>
    <p>London is the capital city of England.</p>
    <p>It is the most populous city in the United Kingdom,
    with a metropolitan area of over 13 million inhabitants.</p></div>
    <div class="col py-3 px-lg-5">
    <h4>Paris</h4>
    <p>Paris is the capital of France.</p>
    <p>The Paris area is one of the largest population centers in Europe,
    with more than 12 million inhabitants.</p>
    </div>
  </div>
</div>

    </div>
</div>
<?= $this->endSection(); ?>