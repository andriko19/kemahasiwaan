<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1> <?= $title; ?></h1>
    </div>

    <?= $this->session->flashdata('message');?>

    <div class="card mb-4 mt-3">
      <div class="card-header">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahPengajuanKesejahteraan" >
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
                <td>Nama</td>
                <td>NPM</td>
                <td>Prodi</td>
                <td>Semester</td>
                <td>Fakultas</td>
                <td>KTM</td>
                <td>KTP</td>
                <td>KHS</td>
                <td>Surat Aktif</td>
                <td>SKTM</td>
                <td>Surat Pernyataan Terdampak Covid</td>
                <td>Bidang Kesejahteraan</td>
                <td>Upload</td>
                <td>Aksi</td>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1 ?>
              <?php foreach($pengajuan_kesejahteraan as $data): ?>
              <tr>
                <td><?= $no ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['npm']; ?></td>
                <td><?= $data['prodi']; ?></td>
                <td><?= $data['semester']; ?></td>
                <td><?= $data['fakultas']; ?></td>
                <td><a href="<?= base_url(); ?>admin/download_ktm/<?= $data['ktm']; ?>"><img style="width: 50px" src="<?= base_url(); ?>assets/images/pdf.png" title="<?= $data['ktm']; ?>"></a></td>
                <td><a href="<?= base_url(); ?>admin/download_ktp/<?= $data['ktp']; ?>"><img style="width: 50px" src="<?= base_url(); ?>assets/images/pdf.png" title="<?= $data['ktp']; ?>"></a></td>
                <td><a href="<?= base_url(); ?>admin/download_khs/<?= $data['khs']; ?>"><img style="width: 50px" src="<?= base_url(); ?>assets/images/pdf.png" title="<?= $data['khs']; ?>"></a></td>
                <td><a href="<?= base_url(); ?>admin/download_surat_aktif/<?= $data['surat_aktif']; ?>"><img style="width: 50px" src="<?= base_url(); ?>assets/images/pdf.png" title="<?= $data['surat_aktif']; ?>"></a></td>
                <td><a href="<?= base_url(); ?>admin/download_sktm/<?= $data['sktm']; ?>"><img style="width: 50px" src="<?= base_url(); ?>assets/images/pdf.png" title="<?= $data['sktm']; ?>"></a></td>
                <td><a href="<?= base_url(); ?>admin/download_surat_pernyataan_terdampak_covid/<?= $data['surat_pernyataan_terdampak_covid']; ?>"><img style="width: 50px" src="<?= base_url(); ?>assets/images/pdf.png" title="<?= $data['surat_pernyataan_terdampak_covid']; ?>"></a></td>
                <td><?= $data['bidang_kesejahteraan']; ?></td>
                <td><?= date('d-m-Y', $data['create_at']); ?></td>
                <td>
                  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#UbahModal<?php echo $data['id_pengajuan_kesejahteraan'];?>">
                    <span class="icon text-white-50">
                      <i class="far fa-edit"></i>
                    </span>
                  </button> <br><br>
                  <a href="" onclick="$('#modalHapus #formDelete').attr('action','<?= base_url() ;?>admin/hapus_pengajuan_kesejahteraan/<?= $data['id_pengajuan_kesejahteraan']; ?>')" class="btn btn-danger" data-toggle="modal" data-target="#modalHapus"> 
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
<div class="modal fade" id="tambahPengajuanKesejahteraan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/tambah_pengajuan_kesejahteraan');?>
        <div class="form-group">
          <label>Nama Mahasiswa</label>
          <input type="text" name="nama" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>NPM</label>
          <input type="text" name="npm" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Prodi</label>
          <div class="input-group mb-3">
            <select name="prodi" class="custom-select" id="inputGroupSelect01" required="">
              <option value=" " selected>Choose...</option>
              <option value="Ekonomi Pembangunan">Ekonomi Pembangunan</option>
              <option value="Manajemen">Manajemen</option>
              <option value="Akuntansi">Akuntansi</option>
              <option value="Agribisnis">Agribisnis</option>
              <option value="Administrasi Negara">Administrasi Negara</option>
              <option value="Ilmu Hukum">Ilmu Hukum</option>
              <option value="Teknik Mesin">Teknik Mesin</option>
              <option value="Teknik Industri">Teknik Industri</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Sastra Inggris">Sastra Inggris</option>
              <option value="Psikologi">Psikologi</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label>Semester</label>
          <div class="input-group mb-3">
            <select name="semester" class="custom-select" id="inputGroupSelect01" required="">
              <option value=" " selected>Choose...</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label>Fakultas</label>
          <div class="input-group mb-3">
            <select name="fakultas" class="custom-select" id="inputGroupSelect01" required="">
              <option value=" " selected>Choose...</option>
              <option value="Fakultas Ekomoni dan Bisnis">Fakultas Ekomoni dan Bisnis</option>
              <option value="Fakultas Pertanian">Fakultas Pertanian</option>
              <option value="Fakultas Ilmu Sosial dan Politik">Fakultas Ilmu Sosial dan Politik</option>
              <option value="Fakultas Teknik">Fakultas Teknik</option>
              <option value="Fakultas Bahasa dan Sastra">Fakultas Bahasa dan Sastra</option>
              <option value="Fakultas Psikologi">Fakultas Psikologi</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label>KTM</label>
          <input type="file" name="ktm" class="form-control" size="30" required="">
          <small class="text-danger"> Disarankan ukuran file max 3MB. Format File <strong>Pdf</strong>.</small>
        </div>        
        <div class="form-group">
          <label>KTP</label>
          <input type="file" name="ktp" class="form-control" size="30" required="">
          <small class="text-danger"> Disarankan ukuran file max 3MB.Format File <strong>Pdf</strong>.</small>
        </div>
        <div class="form-group">
          <label>KHS</label>
          <input type="file" name="khs" class="form-control" size="30" required="">
          <small class="text-danger"> Disarankan ukuran file max 3MB.Format File <strong>Pdf</strong>.</small>
        </div>
        <div class="form-group">
          <label>Surat Aktif</label>
          <input type="file" name="surat_aktif" class="form-control" size="30" required="">
          <small class="text-danger"> Disarankan ukuran file max 3MB.Format File <strong>Pdf</strong>.</small>
        </div>
        <div class="form-group">
          <label>SKTM</label>
          <input type="file" name="sktm" class="form-control" size="30" required="">
          <small class="text-danger"> Disarankan ukuran file max 3MB.Format File <strong>Pdf</strong>.</small>
        </div>
        <div class="form-group">
          <label>Surat Pernyataan Terdampak Covid</label>
          <input type="file" name="surat_pernyataan_terdampak_covid" class="form-control" size="30" required="">
          <small class="text-danger"> Disarankan ukuran file max 3MB.Format File <strong>Pdf</strong>.</small>
        </div>
        <div class="form-group">
          <label>Bidang Kesejahteraan</label>
          <div class="input-group mb-3">
            <select name="bidang_kesejahteraan" class="custom-select" id="inputGroupSelect01" required="">
              <option value=" " selected>Choose...</option>
              <option value="LLDIKTI">LLDIKTI</option>
              <option value="Internal">Internal</option>
              <option value="Bank Jatim">Bank Jatim</option>
            </select>
          </div>
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
  foreach ($pengajuan_kesejahteraan as $data) : $no++; ?>
  <div class="modal fade" id="UbahModal<?php echo $data['id_pengajuan_kesejahteraan'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Ubah Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php echo form_open_multipart('admin/ubah_pengajuan_kesejahteraan');?>
          <input type="hidden" name="id_pengajuan_kesejahteraan" value="<?= $data['id_pengajuan_kesejahteraan'];?>">
          <div class="form-group">
            <label>Nama Mahasiswa</label>
            <input type="text" name="nama" class="form-control" required="" value="<?=$data['nama']; ?>">
          </div>
          <div class="form-group">
            <label>NPM</label>
            <input type="text" name="npm" class="form-control" required="" value="<?=$data['npm']; ?>">
          </div>
          <div class="form-group">
            <label>Prodi</label>
            <div class="input-group mb-3">
              <select name="prodi" class="custom-select" id="inputGroupSelect01" required="">
                <option value=" " selected>Choose...</option>
                <option <?= $data['prodi'] ==  "Ekonomi Pembangunan" ? 'selected' : ''; ?> value="Ekonomi Pembangunan">Ekonomi Pembangunan</option>
                <option <?= $data['prodi'] ==  "Manajemen" ? 'selected' : ''; ?> value="Manajemen">Manajemen</option>
                <option <?= $data['prodi'] ==  "Akuntansi" ? 'selected' : ''; ?> value="Akuntansi">Akuntansi</option>
                <option <?= $data['prodi'] ==  "Agribisnis" ? 'selected' : ''; ?> value="Agribisnis">Agribisnis</option>
                <option <?= $data['prodi'] ==  "Administrasi Negara" ? 'selected' : ''; ?> value="Administrasi Negara">Administrasi Negara</option>
                <option <?= $data['prodi'] ==  "Ilmu Hukum" ? 'selected' : ''; ?> value="Ilmu Hukum">Ilmu Hukum</option>
                <option <?= $data['prodi'] ==  "Teknik Mesin" ? 'selected' : ''; ?> value="Teknik Mesin">Teknik Mesin</option>
                <option <?= $data['prodi'] ==  "Teknik Industri" ? 'selected' : ''; ?> value="Teknik Industri">Teknik Industri</option>
                <option <?= $data['prodi'] ==  "Teknik Informatika" ? 'selected' : ''; ?> value="Teknik Informatika">Teknik Informatika</option>
                <option <?= $data['prodi'] ==  "Sastra Inggris" ? 'selected' : ''; ?> value="Sastra Inggris">Sastra Inggris</option>
                <option <?= $data['prodi'] ==  "Psikologi" ? 'selected' : ''; ?> value="Psikologi">Psikologi</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label>Semester</label>
            <div class="input-group mb-3">
              <select name="semester" class="custom-select" id="inputGroupSelect01" required="">
                <option value=" " selected>Choose...</option>
                <option <?= $data['semester'] ==  "1" ? 'selected' : ''; ?> value="1">1</option>
                <option <?= $data['semester'] ==  "2" ? 'selected' : ''; ?> value="2">2</option>
                <option <?= $data['semester'] ==  "3" ? 'selected' : ''; ?> value="3">3</option>
                <option <?= $data['semester'] ==  "4" ? 'selected' : ''; ?> value="4">4</option>
                <option <?= $data['semester'] ==  "5" ? 'selected' : ''; ?> value="5">5</option>
                <option <?= $data['semester'] ==  "6" ? 'selected' : ''; ?> value="6">6</option>
                <option <?= $data['semester'] ==  "7" ? 'selected' : ''; ?> value="7">7</option>
                <option <?= $data['semester'] ==  "8" ? 'selected' : ''; ?> value="8">8</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label>Fakultas</label>
            <div class="input-group mb-3">
              <select name="fakultas" class="custom-select" id="inputGroupSelect01" required="">
                <option value=" " selected>Choose...</option>
                <option <?= $data['fakultas'] ==  "Fakultas Ekomoni dan Bisnis" ? 'selected' : ''; ?> value="Fakultas Ekomoni dan Bisnis">Fakultas Ekomoni dan Bisnis</option>
                <option <?= $data['fakultas'] ==  "Fakultas Pertanian" ? 'selected' : ''; ?> value="Fakultas Pertanian">Fakultas Pertanian</option>
                <option <?= $data['fakultas'] ==  "Fakultas Ilmu Sosial dan Politik" ? 'selected' : ''; ?> value="Fakultas Ilmu Sosial dan Politik">Fakultas Ilmu Sosial dan Politik</option>
                <option <?= $data['fakultas'] ==  "Fakultas Teknik" ? 'selected' : ''; ?> value="Fakultas Teknik">Fakultas Teknik</option>
                <option <?= $data['fakultas'] ==  "Fakultas Bahasa dan Sastra" ? 'selected' : ''; ?> value="Fakultas Bahasa dan Sastra">Fakultas Bahasa dan Sastra</option>
                <option <?= $data['fakultas'] ==  "Fakultas Psikologi" ? 'selected' : ''; ?> value="Fakultas Psikologi">Fakultas Psikologi</option>
              </select>
            </div>
          </div>
          
          <div class="form-group">
            <label>KTM</label>
            <div class="row">
              <div class="col-sm-4">
                <a href="<?= base_url(); ?>admin/download_ktm/<?= $data['ktm']; ?>"><img style="width: 50px" src="<?= base_url(); ?>assets/images/pdf.png"></a>
               </p><?= $data['ktm']; ?></p>
              </div>
              <div class="col-sm-8">
                <input type="file" name="ktm" class="form-control" size="30">
                <small class="text-danger"> Disarankan ukuran file max 3MB. Format File <strong>Pdf</strong>.</small>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>KTP</label>
            <div class="row">
              <div class="col-sm-4">
                <a href="<?= base_url(); ?>admin/download_ktp/<?= $data['ktp']; ?>"><img style="width: 50px" src="<?= base_url(); ?>assets/images/pdf.png"></a>
               </p><?= $data['ktp']; ?></p>
              </div>
              <div class="col-sm-8">
                <input type="file" name="ktp" class="form-control" size="30">
                <small class="text-danger"> Disarankan ukuran file max 3MB. Format File <strong>Pdf</strong>.</small>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>KHS</label>
            <div class="row">
              <div class="col-sm-4">
                <a href="<?= base_url(); ?>admin/download_khs/<?= $data['khs']; ?>"><img style="width: 50px" src="<?= base_url(); ?>assets/images/pdf.png"></a>
               </p><?= $data['khs']; ?></p>
              </div>
              <div class="col-sm-8">
                <input type="file" name="khs" class="form-control" size="30">
                <small class="text-danger"> Disarankan ukuran file max 3MB. Format File <strong>Pdf</strong>.</small>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Kurat Aktif</label>
            <div class="row">
              <div class="col-sm-4">
                <a href="<?= base_url(); ?>admin/download_surat_aktif/<?= $data['surat_aktif']; ?>"><img style="width: 50px" src="<?= base_url(); ?>assets/images/pdf.png"></a>
               </p><?= $data['surat_aktif']; ?></p>
              </div>
              <div class="col-sm-8">
                <input type="file" name="surat_aktif" class="form-control" size="30">
                <small class="text-danger"> Disarankan ukuran file max 3MB. Format File <strong>Pdf</strong>.</small>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>SKTM</label>
            <div class="row">
              <div class="col-sm-4">
                <a href="<?= base_url(); ?>admin/download_sktm/<?= $data['sktm']; ?>"><img style="width: 50px" src="<?= base_url(); ?>assets/images/pdf.png"></a>
               </p><?= $data['sktm']; ?></p>
              </div>
              <div class="col-sm-8">
                <input type="file" name="sktm" class="form-control" size="30">
                <small class="text-danger"> Disarankan ukuran file max 3MB. Format File <strong>Pdf</strong>.</small>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Surat Pernyataan Terdampak Covid</label>
            <div class="row">
              <div class="col-sm-4">
                <a href="<?= base_url(); ?>admin/download_surat_pernyataan_terdampak_covid/<?= $data['surat_pernyataan_terdampak_covid']; ?>"><img style="width: 50px" src="<?= base_url(); ?>assets/images/pdf.png"></a>
               </p><?= $data['surat_pernyataan_terdampak_covid']; ?></p>
              </div>
              <div class="col-sm-8">
                <input type="file" name="surat_pernyataan_terdampak_covid" class="form-control" size="30">
                <small class="text-danger"> Disarankan ukuran file max 3MB. Format File <strong>Pdf</strong>.</small>
              </div>
            </div>
          </div>
          <div class="form-group">
          <label>Bidang Kesejahteraan</label>
          <div class="input-group mb-3">
            <select name="bidang_kesejahteraan" class="custom-select" id="inputGroupSelect01" required="">
              <option value=" " selected>Choose...</option>
              <option value="LLDIKTI">LLDIKTI</option>
              <option value="Internal">Internal</option>
              <option value="Bank Jatim">Bank Jatim</option>
            </select>
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
