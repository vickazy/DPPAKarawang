<!DOCTYPE html>
<html>
<head>
	<title>Export Data Cuti</title>
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
	header("Content-Disposition: attachment; filename=Data Cuti Pegawai.xls");
	?>
	<table border="1">
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
    <?php
      include '../database/koneksi.php';
      $query = mysqli_query($koneksi,"SELECT * FROM cuti_pegawai cuti, pegawai pg WHERE cuti.id_pegawai = pg.id_pegawai");
      $i = 1;
      while ($row = mysqli_fetch_array($query)) {
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
	</table>
</body>
</html>
