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
              <h3 class="name">Selamat Datang Admin</h3>
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
<?php
  include '../database/koneksi.php';

  $queryuser = mysqli_query($koneksi, "SELECT count(*) as total from user");
  $user=mysqli_fetch_assoc($queryuser);

  $querypegawai = mysqli_query($koneksi, "SELECT count(*) as total from pegawai");
  $pegawai=mysqli_fetch_assoc($querypegawai);

 ?>
<div class="row top_tiles">
   <div class="animated flipInY col-md-6 col-sm-6 col-xs-12">
     <div class="tile-stats">
       <div class="icon"><i class="fa fa-users"></i></div>
       <div class="count"><?php echo $user['total']; ?></div>
       <h3>Users</h3>
       <p>Jumlah users yang memakai aplikasi DPPA</p>
       <hr>
       <div class="text-center small-box">
         <a href="index.php?page=data_user" class="small-box-footer">Tampilkan lebih banyak <i class="fa fa-arrow-circle-right"></i></a>
       </div>
     </div>
   </div>
   <div class="animated flipInY col-md-6 col-sm-6 col-xs-12">
     <div class="tile-stats">
       <div class="icon"><i class="fa fa-database"></i></div>
       <div class="count"><?php echo $pegawai['total']; ?></div>
       <h3>Pegawai</h3>
       <p>Jumlah seluruh pegawai di Pengadilan Agama Karawang</p>
       <hr>
       <div class="text-center small-box">
         <a href="index.php?page=data_pegawai" class="small-box-footer">Tampilkan lebih banyak <i class="fa fa-arrow-circle-right"></i></a>
       </div>
     </div>
   </div>
</div>
<div class="row top_tiles">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data Pegawai <small>Daftar pegawai pengadilan agama karawang</small></h2>
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
              <th>NIP</th>
              <th>Jabatan</th>
              <th>Golongan</th>
              <th>Cuti</th>
              <th>KNP</th>
              <th>KGB</th>
            </tr>
          </thead>



          <tbody>
            <?php
              include '../database/koneksi.php';
              $query = mysqli_query($koneksi,"SELECT * FROM pegawai");
              $i = 1;
              while ($row = mysqli_fetch_array($query)) {
             ?>
             <tr>
               <td><?php echo $i ?></td>
               <td><?php echo $row['nama_pegawai'] ?></td>
               <td><?php echo $row['nip'] ?></td>
               <td><?php echo $row['jabatan'] ?></td>
               <td><?php echo $row['gol'] ?></td>
               <td><a href="index.php?page=viewcutipegawai&nip=<?php echo $row['nip'] ?>" class="label label-success">Lihat Detail</a> </td>
               <td><a href="index.php?page=viewknppegawai&nip=<?php echo $row['nip'] ?>"  class="label label-success">Lihat Detail</a> </td>
               <td><a href="index.php?page=viewkgbpegawai&nip=<?php echo $row['nip'] ?>"  class="label label-success">Lihat Detail</a> </td>
             </tr>

             <div class="modal fade" id="modaleditpegawai<?php echo $row['nip']; ?>">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h4 class="modal-title">Form Edit Pegawai</h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
                   <div class="modal-body">
                     <form class="" action="edit_pegawai.php" method="get">
                       <div class="form-group">
                         <label>Nama Pegawai</label>
                         <input type="hidden" name="nip" value="<?php echo $row['nip']; ?>">
                         <input type="text" class="form-control" name="pegawai" value="<?php echo $row['nama_pegawai']; ?>">
                       </div>
                       <div class="form-group">
                         <label>Jabatan</label>
                         <select class="form-control" name="jabatan">
                           <option selected disabled>-- Pilih Jabatan--</option>
                           <option value="KETUA">KETUA</option>
                           <option value="HAKIM UTAMA MUD">HAKIM UTAMA MUDA</option>
                           <option value="HAKIM MADYA UTAMA">HAKIM MADYA UTAMA</option>
                           <option value="PANITERA">PANITERA</option>
                           <option value="SEKRETARIS">SEKRETARIS</option>
                           <option value="PANMUD HUKUM">PANMUD HUKUM</option>
                           <option value="PANMUD GUGATAN">PANMUD GUGATAN</option>
                           <option value="PANMUD PERMOHONAN">PANMUD PERMOHONAN</option>
                           <option value="PANITERA PENGGANTI">PANITERA PENGGANTI</option>
                           <option value="KASUB KEPEGAWAIAN DAN ORTALA">KASUB KEPEGAWAIAN DAN ORTALA</option>
                           <option value="KASUB PERNCANAAN, IT DAN PELAPORAN">KASUB PERNCANAAN, IT DAN PELAPORAN</option>
                           <option value="KASUBAG UMUM DAN KEUANGAN">KASUBAG UMUM DAN KEUANGAN</option>
                           <option value="JURU SITA">JURU SITA</option>
                           <option value="JURU SITA PENGGANTI">JURU SITA PENGGANTI</option>
                           <option value="PELAKSANA">PELAKSANA</option>
                         </select>
                       </div>
                       <div class="form-group">
                          <label>Golongan</label>
                         <select class="form-control" name="golongan">
                           <option selected disabled>-- Pilih Golongan--</option>
                           <option value="III/a">III/a</option>
                           <option value="III/b">III/b</option>
                           <option value="III/c">III/c</option>
                           <option value="III/d">III/d</option>
                           <option value="IV/a">IV/a</option>
                           <option value="IV/c">IV/c</option>
                           <option value="IV/d">IV/d</option>
                         </select>
                       </div>
                       <div class="form-group">
                         <button type="submit" class="btn btn-primary">Save changes</button>
                       </div>
                     </form>
                   </div>
                 </div>
               </div>
             </div>

             <div class="modal fade" id="modalviewpegawai<?php echo $row['nip']; ?>">
               <div class="modal-dialog">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h4 class="modal-title">View Pegawai <?php echo $row['nama_pegawai']; ?></h4>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
                   <div class="modal-body">
                     <strong>Nama Lengkap</strong>
                     <p class="text-muted"><?php echo $row['nama_pegawai']; ?></p>
                     <hr>
                     <strong>NIP</strong>
                     <p class="text-muted"><?php echo $row['nip']; ?></p>
                     <hr>
                     <strong>Jabatan</strong>
                     <p class="text-muted"><?php echo $row['jabatan']; ?></p>
                     <hr>
                     <strong>Golongan</strong>
                     <p class="text-muted"><?php echo $row['gol']; ?></p>
                     <hr>
                   </div>
                 </div>
               </div>
             </div>

             <?php
             $i++;
            }
              ?>
          </tbody>
        </table>
        <div class="modal fade btn-tambah-pegawai" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Form Tambah Pegawai </h4>
              </div>
              <div class="modal-body">
                <form data-parsley-validate class="form-horizontal form-label-left" method="POST">

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Lengkap</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input class="form-control col-md-7 col-xs-12" type="text" name="nama_lengkap" placeholder="Masukkan Nama">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">NIP</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input class="form-control col-md-7 col-xs-12" type="text" name="nip" placeholder="Masukkan NIP">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select class="form-control" name="jabatan">
                        <option selected disabled>-- Pilih Jabatan--</option>
                        <option value="KETUA">KETUA</option>
                        <option value="HAKIM UTAMA MUD">HAKIM UTAMA MUDA</option>
                        <option value="HAKIM MADYA UTAMA">HAKIM MADYA UTAMA</option>
                        <option value="PANITERA">PANITERA</option>
                        <option value="SEKRETARIS">SEKRETARIS</option>
                        <option value="PANMUD HUKUM">PANMUD HUKUM</option>
                        <option value="PANMUD GUGATAN">PANMUD GUGATAN</option>
                        <option value="PANMUD PERMOHONAN">PANMUD PERMOHONAN</option>
                        <option value="PANITERA PENGGANTI">PANITERA PENGGANTI</option>
                        <option value="KASUB KEPEGAWAIAN DAN ORTALA">KASUB KEPEGAWAIAN DAN ORTALA</option>
                        <option value="KASUB PERNCANAAN, IT DAN PELAPORAN">KASUB PERNCANAAN, IT DAN PELAPORAN</option>
                        <option value="KASUBAG UMUM DAN KEUANGAN">KASUBAG UMUM DAN KEUANGAN</option>
                        <option value="JURU SITA">JURU SITA</option>
                        <option value="JURU SITA PENGGANTI">JURU SITA PENGGANTI</option>
                        <option value="PELAKSANA">PELAKSANA</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Golongan</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select class="form-control" name="golongan">
                        <option selected disabled>-- Pilih Golongan--</option>
                        <option value="III/a">III/a</option>
                        <option value="III/b">III/b</option>
                        <option value="III/c">III/c</option>
                        <option value="III/d">III/d</option>
                        <option value="IV/a">IV/a</option>
                        <option value="IV/c">IV/c</option>
                        <option value="IV/d">IV/d</option>
                      </select>
                    </div>
                  </div>

                  <div class="ln_solid"></div>
                  <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                    </div>
                  </div>

                </form>
              </div>

            </div>
          </div>
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
