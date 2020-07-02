<!DOCTYPE html>
<html>
<head>
	<title>Export Data Pegawai</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
  <?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Pegawai.xls");
	?>

	<table border="1">
		<tr>
      <th>No</th>
      <th>Nama</th>
      <th>Jabatan</th>
      <th>Golongan</th>
      <th>KNP terakhir</th>
      <th>KNP yang akan datang</th>
      <th>Keterangan KNP</th>
      <th>Pensiun</th>
      <th>KGB terakhir</th>
      <th>KGB yang akan datang</th>
      <th>Keterangan KGB</th>
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
    <?php
      include '../database/koneksi.php';
      $query = mysqli_query($koneksi,"SELECT * FROM pegawai");
      $i = 1;
      while ($row = mysqli_fetch_array($query)) {
        $id = $row['id_pegawai']
     ?>
     <tr>
       <td><?php echo $i ?></td>
       <td><?php echo $row['nama_pegawai'] ?></td>
       <td><?php echo $row['jabatan'] ?></td>
       <td><?php echo $row['gol'] ?></td>
       <td>
         <?php
            $query1 = mysqli_query($koneksi,"SELECT * FROM pegawai pg, knp_pegawai knp where pg.id_pegawai = knp.id_pegawai and knp.id_pegawai='$id'");

            while ($row1 = mysqli_fetch_array($query1)) {
              echo $row1['knp_terakhir'];
              ?>
              <br><br>
              <?php
            }
          ?>
       </td>
       <td>
         <?php
            $query1 = mysqli_query($koneksi,"SELECT * FROM pegawai pg, knp_pegawai knp where pg.id_pegawai = knp.id_pegawai and knp.id_pegawai='$id'");

            while ($row1 = mysqli_fetch_array($query1)) {
              echo $row1['knp_datang'];
              ?>
              <br><br>
              <?php
            }
          ?>
       </td>
       <td>
         <?php
            $query1 = mysqli_query($koneksi,"SELECT * FROM pegawai pg, knp_pegawai knp where pg.id_pegawai = knp.id_pegawai and knp.id_pegawai='$id'");

            while ($row1 = mysqli_fetch_array($query1)) {
              echo $row1['keterangan'];
              ?>
              <br><br>
              <?php
            }
          ?>
       </td>
       <td>
         <?php
            $query1 = mysqli_query($koneksi,"SELECT * FROM pegawai pg, knp_pegawai knp where pg.id_pegawai = knp.id_pegawai and knp.id_pegawai='$id'");

            while ($row1 = mysqli_fetch_array($query1)) {
              echo $row1['pensiun'];
              ?>
              <br><br>
              <?php
            }
          ?>
       </td>
       <td>
         <?php
            $query1 = mysqli_query($koneksi,"SELECT * FROM pegawai pg, kgb_pegawai kgb where pg.id_pegawai = kgb.id_pegawai and kgb.id_pegawai='$id'");

            while ($row1 = mysqli_fetch_array($query1)) {
              echo $row1['kgb_terakhir'];
              ?>
              <br><br>
              <?php
            }
          ?>
       </td>
       <td>
         <?php
            $query1 = mysqli_query($koneksi,"SELECT * FROM pegawai pg, kgb_pegawai kgb where pg.id_pegawai = kgb.id_pegawai and kgb.id_pegawai='$id'");

            while ($row1 = mysqli_fetch_array($query1)) {
              echo $row1['kgb_datang'];
              ?>
              <br><br>
              <?php
            }
          ?>
       </td>
       <td>
         <?php
            $query1 = mysqli_query($koneksi,"SELECT * FROM pegawai pg, kgb_pegawai kgb where pg.id_pegawai = kgb.id_pegawai and kgb.id_pegawai='$id'");

            while ($row1 = mysqli_fetch_array($query1)) {
              echo $row1['keterangan'];
              ?>
              <br><br>
              <?php
            }
          ?>
       </td>
       <td>
         <?php
            $query1 = mysqli_query($koneksi,"SELECT * FROM pegawai pg, cuti_pegawai cuti where pg.id_pegawai = cuti.id_pegawai and cuti.id_pegawai='$id'");

            while ($row1 = mysqli_fetch_array($query1)) {
              echo $row1['cuti_tahunan'];
              ?>
              <br><br>
              <?php
            }
          ?>
       </td>
       <td>
         <?php
            $query1 = mysqli_query($koneksi,"SELECT * FROM pegawai pg, cuti_pegawai cuti where pg.id_pegawai = cuti.id_pegawai and cuti.id_pegawai='$id'");

            while ($row1 = mysqli_fetch_array($query1)) {
              echo $row1['cuti_sakit'];
              ?>
              <br><br>
              <?php
            }
          ?>
       </td>
       <td>
         <?php
            $query1 = mysqli_query($koneksi,"SELECT * FROM pegawai pg, cuti_pegawai cuti where pg.id_pegawai = cuti.id_pegawai and cuti.id_pegawai='$id'");

            while ($row1 = mysqli_fetch_array($query1)) {
              echo $row1['cuti_bersalin'];
              ?>
              <br><br>
              <?php
            }
          ?>
       </td>
       <td>
         <?php
            $query1 = mysqli_query($koneksi,"SELECT * FROM pegawai pg, cuti_pegawai cuti where pg.id_pegawai = cuti.id_pegawai and cuti.id_pegawai='$id'");

            while ($row1 = mysqli_fetch_array($query1)) {
              echo $row1['cuti_bersalin_anakketiga'];
              ?>
              <br><br>
              <?php
            }
          ?>
       </td>
       <td>
         <?php
            $query1 = mysqli_query($koneksi,"SELECT * FROM pegawai pg, cuti_pegawai cuti where pg.id_pegawai = cuti.id_pegawai and cuti.id_pegawai='$id'");

            while ($row1 = mysqli_fetch_array($query1)) {
              echo $row1['cuti_musibah'];
              ?>
              <br><br>
              <?php
            }
          ?>
       </td>
       <td>
         <?php
            $query1 = mysqli_query($koneksi,"SELECT * FROM pegawai pg, cuti_pegawai cuti where pg.id_pegawai = cuti.id_pegawai and cuti.id_pegawai='$id'");

            while ($row1 = mysqli_fetch_array($query1)) {
              echo $row1['ket_cuti_musibah'];
              ?>
              <br><br>
              <?php
            }
          ?>
       </td>
       <td>
         <?php
            $query1 = mysqli_query($koneksi,"SELECT * FROM pegawai pg, cuti_pegawai cuti where pg.id_pegawai = cuti.id_pegawai and cuti.id_pegawai='$id'");

            while ($row1 = mysqli_fetch_array($query1)) {
              echo $row1['cuti_selain_musibah'];
              ?>
              <br><br>
              <?php
            }
          ?>
       </td>
       <td>
         <?php
            $query1 = mysqli_query($koneksi,"SELECT * FROM pegawai pg, cuti_pegawai cuti where pg.id_pegawai = cuti.id_pegawai and cuti.id_pegawai='$id'");

            while ($row1 = mysqli_fetch_array($query1)) {
              echo $row1['ket_cuti_selain_musibah'];
              ?>
              <br><br>
              <?php
            }
          ?>
       </td>
       <td>
         <?php
            $query1 = mysqli_query($koneksi,"SELECT * FROM pegawai pg, cuti_pegawai cuti where pg.id_pegawai = cuti.id_pegawai and cuti.id_pegawai='$id'");

            while ($row1 = mysqli_fetch_array($query1)) {
              echo $row1['cuti_besar'];
              ?>
              <br><br>
              <?php
            }
          ?>
       </td>
       <td>
         <?php
            $query1 = mysqli_query($koneksi,"SELECT * FROM pegawai pg, cuti_pegawai cuti where pg.id_pegawai = cuti.id_pegawai and cuti.id_pegawai='$id'  ");

            while ($row1 = mysqli_fetch_array($query1)) {
              echo $row1['cuti_diluar_tanggungan_negara'];
              ?>
              <br><br>
              <?php
            }
          ?>
       </td>

     </tr>

     <?php
     $i++;
   }
      ?>
	</table>
</body>
</html>
