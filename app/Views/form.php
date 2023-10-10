<?= $this->extend('partials/base'); ?>

<?= $this->section('content'); ?>
<div class="container mt-5">
  <div class="glass-container p-4">
    <h1 class="text-center">Ini ada form yang dapat didownload sesaui kebutuhan</h1>
    <br>
    <br>
    <div class="list-group">
      <a class="list-group-item list-group-item-action active">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">Download file form untuk kebutuhan anda</h5>
        </div>
        <p class="mb-1">Some placeholder content in a paragraph.</p>
        <small>And some small print.</small>
      </a>

      <br>
      <br>

      <a class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">1. Employee Request</h5>
        </div>
        <br>

        <div class="container">
          <div class="row">
            <div class="col">
              <object data="public/pdf/Employee Request.pdf" type="public/pdf" width="100%" height="500px">
                <p>Tampilan file pdf dan akses download. <a class="btn btn-primary" href="public/pdf/contoh.pdf" role="button">Unduh PDF</a> <br> <br> Bisa juga langsung mengisi pada tampilan.</p>
              </object>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col">
              <!-- Embed PDF using iframe -->
              <iframe src="<?= base_url('public/pdf/Employee Request.pdf'); ?>" width="100%" height="500px"></iframe>

              <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                <iframe width="560" <!-- Lebar iframe jika skala browser sangat kecil -->
                  height="315" <!-- Tinggi iframe jika skala browser sangat kecil -->
                  src="https://www.youtube.com/watch?v=f3nh9GzQ1ZM"
                  frameborder="0"
                  allowfullscreen
                  style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                  ></iframe>
              </div>

            </div>
          </div>
        </div>



        <p class="mb-1">Berikan file berkas yang telah diisi keatasan dan HRD.</p>
        <small class="text-muted">Terimakasih Goodluck. ✨</small>
      </a>

      <a class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">2. form cuti</h5>
        </div>
        <br>

        <div class="container">
          <div class="row">
            <div class="col">
              <object data="public/pdf/Employee Request.pdf" type="public/pdf" width="100%" height="500px">
                <p>Tampilan file pdf dan akses download. <a class="btn btn-primary" href="public/pdf/contoh.pdf" role="button">Unduh PDF</a> <br> <br> Bisa juga langsung mengisi pada tampilan.</p>
              </object>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col">
              <!-- Embed PDF using iframe -->
              <iframe src="<?= base_url('public/pdf/Employee Request.pdf'); ?>" width="100%" height="500px"></iframe>
            </div>
          </div>
        </div>



        <p class="mb-1">Berikan file berkas yang telah diisi keatasan dan HRD.</p>
        <small class="text-muted">Terimakasih Goodluck. ✨</small>
      </a>

      <a class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">3. form cuti</h5>
        </div>
        <br>

        <div class="container">
          <div class="row">
            <div class="col">
              <object data="public/pdf/contoh.pdf" type="public/pdf" width="100%" height="500px">
                <p>Tampilan file pdf dan akses download. <a class="btn btn-primary" href="public/pdf/contoh.pdf" role="button">Unduh PDF</a> <br> <br> Bisa juga langsung mengisi pada tampilan.</p>
              </object>
            </div>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col">
              <!-- Embed PDF using iframe -->
              <iframe src="<?= base_url('public/pdf/contoh.pdf'); ?>" width="100%" height="500px"></iframe>
            </div>
          </div>
        </div>



        <p class="mb-1">Berikan file berkas yang telah diisi keatasan dan HRD.</p>
        <small class="text-muted">Terimakasih Goodluck. ✨</small>
      </a>

      <a class="list-group-item list-group-item-action">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">List group item heading</h5>
          <small class="text-muted">3 days ago</small>
        </div>
        <p class="mb-1">Some placeholder content in a paragraph.</p>
        <small class="text-muted">And some muted small print.</small>
      </a>
    </div>

  </div>
</div>
<?= $this->endSection(); ?>