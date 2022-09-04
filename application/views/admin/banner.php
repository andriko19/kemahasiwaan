<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1> <?= $title; ?></h1>
    </div>

    <?= $this->session->flashdata('message');?>

    <div class="card mb-4 mt-3">
      <div class="card-header">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahBanner" >
          <span class="icon text-white-50">
            <i class="far fa-edit"></i>
            Tambah <?= $title;?> 
          </span>
        </button>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped text-center" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <td>No.</td>
                <td>Judul Banner</td>
                <td>Deskripsi Banner</td>
                <td>Gambar Banner</td>
                <td>Aksi</td>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1 ?>
              <?php foreach($banner as $data): ?>
              <tr>
                <td><?= $no ?></td>
                <td><?= $data['judul_banner']; ?></td>
                <td><?= $data['deskripsi']; ?></td>
                <td><img style="width: 300px" src="<?= base_url(); ?>assets/images/banner/<?= $data['gambar_banner']; ?>"></td>
                <td>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#UbahModal<?php echo $data['id_banner'];?>">
                    <span class="icon text-white-50">
                      <i class="far fa-edit"></i>
                    </span>
                  </button> <br><br>
                  <a href="" onclick="$('#modalHapus #formDelete').attr('action','<?= base_url() ;?>admin/hapus_banner/<?= $data['id_banner']; ?>')" class="btn btn-danger" data-toggle="modal" data-target="#modalHapus"> 
                    <span class="icon text-white-50">
                      <i class="fas fa-trash-alt"></i>
                    </span>
                  </a>
                </td>
              </tr>
              <?php $no++ ?>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- modal tambah -->
<div class="modal fade" id="tambahBanner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/tambah_banner');?>
        <div class="form-group">
          <label>Judul Banner</label>
          <input type="text" name="judul_banner" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Deskripsi Banner</label>
          <textarea name="deskripsi_banner" class="form-control" required="" style="height: 250px"></textarea>
        </div>
        <div class="form-group">
          <label>Gambar Banner</label>
          <input type="file" name="gambar_banner" class="form-control" size="30" required="">
          <small class="text-danger"> Disarankan ukuran file max 2MB.</small>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
        <button type="reset" class="btn btn-success">Reset</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      <?php echo form_close();?>
    </div>
  </div>
</div>
<!-- and modal tambah -->

<!-- modal ubah -->
<?php $no = 0;
  foreach ($banner as $data) : $no++; ?>
  <div class="modal fade" id="UbahModal<?php echo $data['id_banner'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Ubah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php echo form_open_multipart('admin/ubah_banner');?>
          <input type="hidden" name="id_banner" value="<?= $data['id_banner'];?>">
          <div class="form-group">
            <label>Judul Banner</label>
            <input type="text" name="judul_banner" class="form-control" value="<?= $data['judul_banner'];?>" required="">
          </div>
          <div class="form-group">
            <label>Deskripsi Banner</label>
            <textarea type="text" name="deskripsi" class="form-control" required="" style="height: 250px"><?= $data['deskripsi'];?></textarea>
          </div>
          <div class="form-group">
            <label>Gambar Banner</label>
            <div class="row">
              <div class="col-sm-4">
                <img src="<?= base_url(); ?>assets/images/banner/<?= $data['gambar_banner']; ?>" class="img-thumbnail">
              </div>
              <div class="col-sm-8">
                <input type="file" name="gambar_banner" class="form-control" size="30">
                <small class="text-danger"> Disarankan Ukuran Gambar : 1280px x 570px.</small>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
        <?php echo form_close();?>
      </div>
    </div>
  </div>
<?php endforeach; ?>
<!-- and modal ubah -->

<!-- Modal hapus-->
  <div class="modal fade" id="modalHapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Hapus Data</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Apakah anda ingin meghapus data ini?. Klik <strong>Ya</strong> jika ingin menghapusnya.</div>
        <div class="modal-footer">
          <form id="formDelete" action="" method="post">
            <button class="btn btn-warning" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-danger" type="submit">Ya</button>
          </form>
          <!-- <a class="btn btn-primary" href="<?= base_url(); ?>admin/logout">Ya</a> -->
        </div>
      </div>
    </div>
  </div>
  <!-- Modal hapus-->
