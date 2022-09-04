<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1> <?= $title; ?></h1>
    </div>

    <?= $this->session->flashdata('message');?>

    <div class="card mb-4 mt-3">
      <div class="card-header">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahBerkas" >
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
                <td>Judul Berkas</td>
                <td>Nama Bem & Ormawa</td>
                <td>Jemis Berkas</td>
                <td>Berkas</td>
                <td>Upload</td>
                <td>Aksi</td>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1 ?>
              <?php foreach($berkas as $data): ?>
              <tr>
                <td><?= $no ?></td>
                <td><?= $data['judul_berkas']; ?></td>
                <td><?= $data['nama_ormawa']; ?></td>
                <td><?= $data['jenis_berkas']; ?></td>
                <td> <a href="<?= base_url(); ?>admin/download_berkas/<?= $data['berkas']; ?>"><img style="width: 50px" src="<?= base_url(); ?>assets/images/pdf.png" title="<?= $data['berkas']; ?>"></a></td>
                <td><?= date('d-m-Y', $data['create_at']); ?></td>
                <td>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#UbahModal<?php echo $data['id_berkas'];?>">
                    <span class="icon text-white-50">
                      <i class="far fa-edit"></i>
                    </span>
                  </button> <br><br>
                  <a href="" onclick="$('#modalHapus #formDelete').attr('action','<?= base_url() ;?>admin/hapus_berkas/<?= $data['id_berkas']; ?>')" class="btn btn-danger" data-toggle="modal" data-target="#modalHapus"> 
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
<div class="modal fade" id="tambahBerkas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/tambah_berkas');?>
        <div class="form-group">
          <label>Judul Berkas</label>
          <input type="text" name="judul_berkas" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Nama Bem dan Ormawa</label>
          <div class="input-group mb-3">
            <select name="nama_ormawa" class="custom-select" id="inputGroupSelect01" required="">
              <option value=" " selected>Choose...</option>
              <option value="Bem U">BEM U</option>
              <option value="Bem FEB">BEM FEB</option>
              <option value="Bem FBS">BEM FBS</option>
              <option value="Bem FT">BEM FT</option>
              <option value="Bem F.Psi">BEM F.Psi</option>
              <option value="Bem FH">BEM FH</option>
              <option value="Bem fisip">BEM fisip</option>
              <option value="Bem Faperta">BEM Faperta</option>

              <option value="UKM Terafo">UKM Terafo</option>
              <option value="UKM KSR">UKM KSR</option>
              <option value="UKM UKKI">UKM UKKI</option>
              <option value="UKM UKKK">UKM UKKK</option>
              <option value="UKM Himapa">UKM Himapa</option>
              <option value="UKM PSM">UKM PSM</option>
              <option value="UKM Himmpis">UKM Himmpis</option>
              <option value="UKM Voli smart">UKM Voli smart</option>
              <option value="UKM Soccer">UKM Soccer</option>
              <option value="UKM Basket Squad">UKM Basket Squad</option>
              <option value="UKM Ju jitsu">UKM Ju jitsu</option>
              <option value="UKM PSHT">UKM PSHT</option>
              <option value="UKM Himmada">UKM Himmada</option>
              <option value="UKM Himmaga">UKM Himmaga</option>
              <option value="UKM Mapala">UKM Mapala</option>
              <option value="UKM Menwa 831">UKM Menwa 831</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label>Jenis Berkas</label>
          <div class="input-group mb-3">
            <select name="jenis_berkas" class="custom-select" id="inputGroupSelect01" required="">
              <option value=" " selected>Choose...</option>
              <option value="Proposal">Proposal</option>
              <option value="LPJ">LPJ</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label>File Berkas</label>
          <input type="file" name="berkas" class="form-control" size="30" required="">
          <small class="text-danger"> Disarankan ukuran file max 3MB.</small>
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
  foreach ($berkas as $data) : $no++; ?>
  <div class="modal fade" id="UbahModal<?php echo $data['id_berkas'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Ubah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php echo form_open_multipart('admin/ubah_berkas');?>
          <input type="hidden" name="id_berkas" value="<?= $data['id_berkas'];?>">
          <div class="form-group">
            <label>Judul Berkas</label>
            <input type="text" name="judul_berkas" class="form-control" required="" value="<?=$data['judul_berkas']; ?>">
          </div>
          <div class="form-group">
            <label>Nama Bem dan Ormawa</label>
            <div class="input-group mb-3">
              <select name="nama_ormawa" class="custom-select" id="inputGroupSelect01" required="">
                <option value=" " selected>Choose...</option>
                <option <?=  $data['nama_ormawa'] ==  "Bem U" ? 'selected' : ''; ?> value="Bem U">BEM U</option>
                <option <?=  $data['nama_ormawa'] ==  "Bem FEB" ? 'selected' : ''; ?> value="Bem FEB">BEM FEB</option>
                <option <?=  $data['nama_ormawa'] ==  "Bem FBS" ? 'selected' : ''; ?> value="Bem FBS">BEM FBS</option>
                <option <?=  $data['nama_ormawa'] ==  "Bem FT" ? 'selected' : ''; ?> value="Bem FT">BEM FT</option>
                <option <?=  $data['nama_ormawa'] ==  "Bem F.Psi" ? 'selected' : ''; ?> value="Bem F.Psi">BEM F.Psi</option>
                <option <?=  $data['nama_ormawa'] ==  "Bem FH" ? 'selected' : ''; ?> value="Bem FH">BEM FH</option>
                <option <?=  $data['nama_ormawa'] ==  "Bem fisip" ? 'selected' : ''; ?> value="Bem fisip">BEM fisip</option>
                <option <?=  $data['nama_ormawa'] ==  "Bem Faperta" ? 'selected' : ''; ?> value="Bem Faperta">BEM Faperta</option>

                <option <?=  $data['nama_ormawa'] ==  "UKM Terafo" ? 'selected' : ''; ?> value="UKM Terafo">UKM Terafo</option>
                <option <?=  $data['nama_ormawa'] ==  "UKM KSR" ? 'selected' : ''; ?> value="UKM KSR">UKM KSR</option>
                <option <?=  $data['nama_ormawa'] ==  "UKM UKKI" ? 'selected' : ''; ?> value="UKM UKKI">UKM UKKI</option>
                <option <?=  $data['nama_ormawa'] ==  "UKM UKKK" ? 'selected' : ''; ?> value="UKM UKKK">UKM UKKK</option>
                <option <?=  $data['nama_ormawa'] ==  "UKM Himapa" ? 'selected' : ''; ?> value="UKM Himapa">UKM Himapa</option>
                <option <?=  $data['nama_ormawa'] ==  "UKM PSM" ? 'selected' : ''; ?> value="UKM PSM">UKM PSM</option>
                <option <?=  $data['nama_ormawa'] ==  "UKM Himmpis" ? 'selected' : ''; ?> value="UKM Himmpis">UKM Himmpis</option>
                <option <?=  $data['nama_ormawa'] ==  "UKM Voli smart" ? 'selected' : ''; ?> value="UKM Voli smart">UKM Voli smart</option>
                <option <?=  $data['nama_ormawa'] ==  "UKM Soccer" ? 'selected' : ''; ?> value="UKM Soccer">UKM Soccer</option>
                <option <?=  $data['nama_ormawa'] ==  "UKM Basket Squad" ? 'selected' : ''; ?> value="UKM Basket Squad">UKM Basket Squad</option>
                <option <?=  $data['nama_ormawa'] ==  "UKM Ju jitsu" ? 'selected' : ''; ?> value="UKM Ju jitsu">UKM Ju jitsu</option>
                <option <?=  $data['nama_ormawa'] ==  "KM PSHT" ? 'selected' : ''; ?> value="UKM PSHT">UKM PSHT</option>
                <option <?=  $data['nama_ormawa'] ==  "UKM Himmada" ? 'selected' : ''; ?> value="UKM Himmada">UKM Himmada</option>
                <option <?=  $data['nama_ormawa'] ==  "UKM Himmaga" ? 'selected' : ''; ?> value="UKM Himmaga">UKM Himmaga</option>
                <option <?=  $data['nama_ormawa'] ==  "UKM Mapala" ? 'selected' : ''; ?> value="UKM Mapala">UKM Mapala</option>
                <option <?=  $data['nama_ormawa'] ==  "UKM Menwa 831" ? 'selected' : ''; ?> value="UKM Menwa 831">UKM Menwa 831</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label>Jenis Berkas</label>
            <div class="input-group mb-3">
              <select name="jenis_berkas" class="custom-select" id="inputGroupSelect01" required="">
                <option value=" " selected>Choose...</option>
                <option <?=  $data['jenis_berkas'] ==  "Proposal" ? 'selected' : ''; ?> value="Proposal">Proposal</option>
                <option <?=  $data['jenis_berkas'] ==  "LPJ" ? 'selected' : ''; ?> value="LPJ">LPJ</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label>File Berkas</label>
            <div class="row">
              <div class="col-sm-4">
                <a href="<?= base_url(); ?>admin/download_berkas/<?= $data['berkas']; ?>"><img style="width: 50px" src="<?= base_url(); ?>assets/images/pdf.png"></a>
               </p><?= $data['berkas']; ?></p>
              </div>
              <div class="col-sm-8">
                <input type="file" name="berkas" class="form-control" size="30">
                <small class="text-danger"> Disarankan ukuran file max 3MB.</small>
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
