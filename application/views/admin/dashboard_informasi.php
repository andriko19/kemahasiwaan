<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1> <?= $title; ?></h1>
    </div>

    <div class="card mb-4 mt-3">
      <div class="card-header">
        <h3><?= $informasi['judul_informasi'];?></h3>
      </div>
      <div class="card-body">
        <div>
          <p><?= $informasi['isi_informasi'];?></p>
        </div>
        <div>
          <a href="<?= base_url(); ?>admin/download_informasi/<?= $informasi['file']; ?>" class="btn btn-primary">Download PDF</a>
        </div>
        <br>
        <div>
          <p>Tanggal Publikasi : <?= date('d-m-Y', $informasi['create_at']); ?></p>
        </div>
        
      </div>
    </div>
  </section>
</div>

