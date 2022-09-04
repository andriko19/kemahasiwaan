<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1> <?= $title; ?></h1>
    </div>

    <?= $this->session->flashdata('message');?>

    <div class="card mb-4 mt-3">
      <div class="card-header">
        <h2>Form Tambah Akun Baru</h2>
      </div>
      <div class="card-body">
        <form method="post" action="<?= base_url('admin/akun_ormawa');?>">
          <div class="row">
            <div class="form-group col-6">
              <label for="nama_depan">Nama Depan</label>
              <input id="nama_depan" type="text" class="form-control" name="nama_depan" autofocus value="<?= set_value('nama_depan');?>"> <?= form_error('nama_depan', '<small class="text-danger">', '</small>');?>
            </div>
            <div class="form-group col-6">
              <label>Nama Bem dan Ormawa</label>
              <div class="input-group mb-3">
                <select name="nama_belakang" class="custom-select" id="inputGroupSelect01" required="">
                  <option value=" " selected>Choose...</option>
                  <option value="Bem U">BEM U</option>
                  <option value="Bem FEB">BEM FEB</option>
                  <option value="Bem FBS">BEM FBS</option>
                  <option value="Bem FT">BEM FT</option>
                  <option value="Bem F.Psi">BEM F.Psi</option>
                  <option value="Bem FH">BEM FH</option>
                  <option value="BEM fisip">BEM fisip</option>
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
          </div>

          <div class="row">
            <div class="form-group col-6">
              <label for="username">Username</label>
              <input id="username" type="text" class="form-control" name="username" value="<?= set_value('username');?>"> <?= form_error('username', '<small class="text-danger">', '</small>');?>
            </div>
            <div class="form-group col-6">
              <label>Role</label>
              <select class="custom-select" name="role">
                <option value="bem">BEM</option>
                <option value="ormawa">Ormawa</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="form-group col-6">
              <label for="password1" class="d-block">Password</label>
              <input id="password1" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password1"><?= form_error('password1', '<small class="text-danger">', '</small>');?>
            </div>
            <div class="form-group col-6">
              <label for="password2" class="d-block">Password Confirmation</label>
              <input id="password2" type="password" class="form-control" name="password2">
            </div>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">
              Register
            </button>
          </div>
        </form>
      </div>
    </div>

    <div class="card mb-4 mt-3">
      <div class="card-header">
        <h2>Akun Ormawa Yang Terdaftar</h2>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped text-center" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <td>No.</td>
                <td>Nama Depan</td>
                <td>Nama Belakang</td>
                <td>Username</td>
                <td>Password</td>
                <td>Role</td>
                <td>Avatar</td>
                <td>Aksi</td>
              </tr>
            </thead>
            <tbody>
              <?php $no = 1 ?>
              <?php foreach($akun_ormawa as $data): ?>
              <tr>
                <td><?= $no ?></td>
                <td><?= $data['nama_depan']; ?></td>
                <td><?= $data['nama_belakang']; ?></td>
                <td><?= $data['username']; ?></td>
                <td><?= $data['password']; ?></td>
                <td><?= $data['role']; ?></td>
                <td><img style="width: 80px" src="<?= base_url(); ?>assets/img/<?= $data['foto']; ?>"></td>
                <td>
                  <?php 
                    if ($data['role'] == "administrator") : ?>
                      
                    <?php else : ?>
                      <a href="" onclick="$('#modalHapus #formDelete').attr('action','<?= base_url() ;?>admin/hapus_users/<?= $data['id_users']; ?>')" class="btn btn-danger" data-toggle="modal" data-target="#modalHapus"> 
                        <span class="icon text-white-50">
                          <i class="fas fa-trash-alt"></i>
                        </span>
                      </a>
                    <?php endif;?>
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
<div class="modal fade" id="tambahAkunOrmawa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Tambah Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo form_open_multipart('admin/tambah_berita');?>
        <div class="form-group">
          <label>Nama Depan</label>
          <input type="text" name="nama_depan" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Nama Belakang</label>
          <input type="text" name="nama_belakang" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="username" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Role</label>
          <div class="input-group mb-3">
            <select name="role" class="custom-select" id="inputGroupSelect01" required="">
              <option value=" " selected>Choose...</option>
              <option value="BEM">BEM</option>
              <option value="Ormawa">Ormawa</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="text" name="password1" class="form-control" required="">
        </div>
        <div class="form-group">
          <label>Password Confrimation</label>
          <input type="text" name="password2" class="form-control" required="">
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
