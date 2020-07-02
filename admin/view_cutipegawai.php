<div class="page-title">
  <div class="title_left">
    <h3>View Cuti Pegawai</h3>
  </div>
</div>

<div class="clearfix"></div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>View Cuti Pegawai <small>Daftar Cuti pegawai</small></h2>
        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Settings 1</a>
              </li>
              <li><a href="#">Settings 2</a>
              </li>
            </ul>
          </li>
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <table id="datatable" class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Jabatan</th>
              <th>Golongan</th>
              <th>Cuti tahunan</th>
              <th>Cuti sakit</th>
              <th>Cuti bersalin</th>
              <th>Cuti bersalin anak ke-3</th>
              <th>Cuti musibah</th>
              <th>Keterangan cuti musibah</th>
              <th>Cuti selain musibah</th>
              <th>Keterangan cuti selain musibah</th>
              <th>Cuti besar</th>
              <th>Cuti diluar tanggungan negara</th>
            </tr>
          </thead>



          <tbody>
            <?php
            include "../database/koneksi.php";

              $nip = $_GET['nip'];
              $i = 1;

              $selectpegawai = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE nip='$nip'");

              $hasilselect = mysqli_fetch_array($selectpegawai);

              $idpegawai = $hasilselect['id_pegawai'];

              $query = mysqli_query($koneksi, "SELECT * FROM cuti_pegawai cuti, pegawai pg where cuti.id_pegawai = pg.id_pegawai and cuti.id_pegawai='$idpegawai'");

              while ($row = mysqli_fetch_array($query) ) {

                ?>

                <tr>
                  <td><?php echo $i ?></td>
                  <td><?php echo $row['nama_pegawai'] ?></td>
                  <td><?php echo $row['jabatan'] ?></td>
                  <td><?php echo $row['gol'] ?></td>
                  <td><?php echo $row['cuti_tahunan'] ?></td>
                  <td><?php echo $row['cuti_sakit'] ?></td>
                  <td><?php echo $row['cuti_bersalin']; ?></td>
                  <td><?php echo $row['cuti_bersalin_anakketiga']; ?></td>
                  <td><?php echo $row['cuti_musibah']; ?></td>
                  <td><?php echo $row['ket_cuti_musibah']; ?></td>
                  <td><?php echo $row['cuti_selain_musibah']; ?></td>
                  <td><?php echo $row['ket_cuti_selain_musibah']; ?></td>
                  <td><?php echo $row['cuti_besar']; ?></td>
                  <td><?php echo $row['cuti_diluar_tanggungan_negara']; ?></td>
                </tr>

                <?php
                $i++;
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
