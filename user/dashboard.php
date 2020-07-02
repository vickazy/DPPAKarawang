<div class="row">
  <div class="ccol-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_content text-center">
        <div class="flex">
          <ul class="list-inline widget_profile_box">
            <li>
              <a>
                <i class="fa fa-lock"></i>
              </a>
            </li>
            <li>
              <?php
              include '../database/koneksi.php';

              $selectfoto = mysqli_query($koneksi, "SELECT * FROM user WHERE nip='$nip'");
              $row2 = mysqli_fetch_array($selectfoto);
              if (empty($row2['foto'])) {
              ?>
                  <img src="../build/images/user.png" class="img-circle profile_img">
              <?php
            } elseif (!empty($row2['foto'])) {
              ?>
                  <img src="../build/images/thump_<?php echo $row2['foto']; ?>" class="img-circle profile_img">
              <?php
              }
               ?>
            </li>
            <li>
              <a>
                <i class="fa fa-lock"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="flex">
          <ul class="list-inline count2">
            <li>
              <h3 class="name">Selamat Datang</h3>
              <?php
              include '../database/koneksi.php';
               $select = mysqli_query($koneksi,"SELECT * FROM pegawai WHERE nip='$nip'");

              $selectnama = mysqli_fetch_array($select);

              ?>
               <h3 class="name"><?php echo $selectnama['nama_pegawai'] ?></h3>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
<div class="ccol-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_content text-center">
      <h1><i class="fa fa-university"></i> DPPA</h1>
      <p>Data Pegawai Pengadilan Agama</p>
      <p></p>
      <p>©2020 Pengadilan Agama Karawang, All Rights Reserved.</p>
    </div>
  </div>
</div>
</div>
