<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1> <?= $title; ?></h1>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fas fa-image"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Banner</h4>
            </div>
            <div class="card-body">
              <?= $totalBanner;?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="far fa-newspaper"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Berita</h4>
            </div>
            <div class="card-body">
              <?= $totalBerita;?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="fas fa-copy"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Berkas</h4>
            </div>
            <div class="card-body">
              <?= $totalBerkas;?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-images"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Foto Kegiatan</h4>
            </div>
            <div class="card-body">
              <?= $totalFotoKegiatan;?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fas fa-bullhorn"></i> 
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Informasi</h4>
            </div>
            <div class="card-body">
              <?= $totalInformasi;?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="fas fa-bullhorn"></i> 
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Informasi Kesejahteraan</h4>
            </div>
            <div class="card-body">
              <?= $totalInformasiKesejahteraan;?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="fas fa-file-pdf"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Pengajuan Kesejahteraan</h4>
            </div>
            <div class="card-body">
              <?= $totalPengajuanKesejahteraan;?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-atom"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Prestasi</h4>
            </div>
            <div class="card-body">
              <?= $totalPrestasi;?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-primary">
            <i class="fas fa-users"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Akun</h4>
            </div>
            <div class="card-body">
              <?= $totalAkun;?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-danger">
            <i class="fas fa-users"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Pengunjung Hari Ini</h4>
            </div>
            <div class="card-body">
              <?=$pengunjunghariini;?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-warning">
            <i class="fas fa-users"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Pengunjung</h4>
            </div>
            <div class="card-body">
              <?=$totalpengunjung;?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
          <div class="card-icon bg-success">
            <i class="fas fa-users"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Total Pengunjung Online</h4>
            </div>
            <div class="card-body">
              <?=$pengunjungonline;?>
            </div>
          </div>
        </div>
      </div>
    </div>


    <style type="text/css">
      /*.text2 {
        color: #f5eded;
      }*/
      @import url('https://fonts.googleapis.com/css?family=Supermercado+One');
      @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');
      * {margin: 0; padding: 0}

      h2 {
        font-family: 'Supermercado One', cursive;
      }

      .text {
        position: relative;
        display: inline-block;
        font-size: 6rem;
        text-transform: uppercase;
        color: #b30000;
        text-shadow: 3px 3px 0px #D7DACC, 8px 8px 0px rgba(0, 0, 0, 0.1);
      }
    </style>
    <!-- <div>
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <h2 class="text" id="wrapper"> SIAWAN - UWP </h2> <br><br>
        <h4 class="text2"> SIstem Absensi karyaWAN Universitas Wijaya Putra dengan barcode.</h4>
      </div>
    </div> -->
  </section>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script>
  Highcharts.chart('container', {
      chart: {
          type: 'line'
      },
      title: {
          text: 'Monthly Average Temperature'
      },
      subtitle: {
          text: 'Source: WorldClimate.com'
      },
      xAxis: {
          categories: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31']
      },
      yAxis: {
          title: {
              text: 'Jumlah Karyawan (Orang)'
          }
      },
      plotOptions: {
          line: {
              dataLabels: {
                  enabled: true
              },
              enableMouseTracking: false
          }
      },
      series: [{
          name: 'Tokyo',
          data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6, 9, 0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0]
      }, {
          name: 'London',
          data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
      }, {
          name: 'Nganjuk',
          data: [1, 2, 6, 9, 30, 20, 19, 12, 22, 30, 33, 2]
      }]
  });
</script>
