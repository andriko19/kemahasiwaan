<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?= base_url('admin');?>"> <img src="<?= base_url(); ?>assets/images/kemahasiswaan.png" alt="logo" width="200" height="55"></a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="index.html">K-UWP</a>
    </div>

    <?php if ($user['role'] == 'administrator') { ?>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>

        <li <?= $this->uri->segment(2) == 'index' || $this->uri->segment(2) == '' ? 'class="nav-item active"' : '' ?> class="nav-item">
          <a href="<?= base_url('admin');?>"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>

        <li class="menu-header">Starter</li>

        <li <?= $this->uri->segment(2) == 'profil' ? 'class="nav-item active"' : '' ?> class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/profil');?>"><i class="fas fa-clipboard-list"></i> <span>Profile</span></a>
        </li>

        <li <?= $this->uri->segment(2) == 'banner' ? 'class="nav-item active"' : '' ?> class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/banner');?>"><i class="fas fa-image"></i> <span>Banner</span></a>
        </li>

        <li <?= $this->uri->segment(2) == 'berita' ? 'class="nav-item active"' : '' ?> class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/berita');?>"><i class="far fa-newspaper"></i> <span>Berita</span></a>
        </li>

        <li <?= $this->uri->segment(2) == 'berkas' ? 'class="nav-item active"' : '' ?> class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/berkas');?>"><i class="fas fa-copy"></i> <span>Berkas</span></a>
        </li>
        
        <li <?= $this->uri->segment(2) == 'foto_kegiatan' ? 'class="nav-item active"' : '' ?> class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/foto_kegiatan');?>"><i class="fas fa-images"></i> <span>Foto Kegiatan</span></a>
        </li>

        <li <?= $this->uri->segment(2) == 'informasi' ? 'class="nav-item active"' : '' ?> class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/informasi');?>"><i class="fas fa-bullhorn"></i> <span>Informasi</span></a>
        </li>

        <li <?= $this->uri->segment(2) == 'informasi_kesejahteraan' ? 'class="nav-item active"' : '' ?> class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/informasi_kesejahteraan');?>"><i class="fas fa-bullhorn"></i> <span>Informasi Kesejahteraan</span></a>
        </li>

        <li <?= $this->uri->segment(2) == 'pengajuan_kesejahteraan' ? 'class="nav-item active"' : '' ?> class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/pengajuan_kesejahteraan');?>"><i class="fas fa-file-pdf"></i> <span>Pengajuan Kesejahteraan</span></a>
        </li>

        <li <?= $this->uri->segment(2) == 'prestasi' ? 'class="nav-item active"' : '' ?> class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/prestasi');?>"><i class="fas fa-atom"></i> <span>Prestasi</span></a>
        </li>

        <li <?= $this->uri->segment(2) == 'akun_ormawa' ? 'class="nav-item active"' : '' ?> class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/akun_ormawa');?>"><i class="fas fa-users"></i> <span>Akun Ormawa</span></a>
        </li>
      </ul>
    <?php } else if ($user['role'] == 'ormawa' || $user['role'] == 'bem')  { ?>
      <ul class="sidebar-menu">
        <li class="menu-header">Dashboard</li>

        <li <?= $this->uri->segment(2) == 'dashboard_informasi' || $this->uri->segment(2) == '' ? 'class="nav-item active"' : '' ?> class="nav-item">
          <a href="<?= base_url('admin/dashboard_informasi');?>"><i class="fas fa-fire"></i><span>Dashboard</span></a>
        </li>

        <li class="menu-header">Starter</li>

        <li <?= $this->uri->segment(2) == 'berkas' ? 'class="nav-item active"' : '' ?> class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/berkas');?>"><i class="fas fa-copy"></i> <span>Berkas</span></a>
        </li>
        
        <li <?= $this->uri->segment(2) == 'foto_kegiatan' ? 'class="nav-item active"' : '' ?> class="nav-item">
          <a class="nav-link" href="<?= base_url('admin/foto_kegiatan');?>"><i class="fas fa-images"></i> <span>Foto Kegiatan</span></a>
        </li>
        
      </ul>
    <?php  } ?>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
      <a href=# class="btn btn-primary btn-lg btn-block btn-icon-split">
        BIRO KEMAHASISWAAN UWP
      </a>
    </div>
  </aside>
</div>
