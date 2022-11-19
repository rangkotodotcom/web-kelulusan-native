<?php
include 'conn.php';

?>

<fieldset>
	<legend>Masukan Data Siswa</legend>
	<link rel="stylesheet" type="text/css" href="css/tambah.css">

	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" /></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td><input type="text" name="t_lahir" /></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="text" name="tgl_lhr" placeholder="22 September 1998" /></td>
			</tr>
			<tr>
				<td>Nama Orang Tua</td>
				<td>:</td>
				<td><input type="text" name="n_ortu" /></td>
			</tr>
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type="text" name="nis" /></td>
			</tr>
			<tr>
				<td>NISN</td>
				<td>:</td>
				<td><input type="text" name="nisn" /></td>
			</tr>
			<tr>
				<td>No Peserta</td>
				<td>:</td>
				<td><input type="text" name="no_pes" placeholder="12-004-001-9" /></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td>:</td>
				<td><input type="file" name="foto" /></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah" /> <input type="reset" value="Reset" /></td>
			</tr>
		</table>

	</form>

	<?php

	$nama = ucwords (@$_POST['nama']);
	$t_lahir = ucwords(@$_POST['t_lahir']);
	$tgl_lhr = ucwords(@$_POST['tgl_lhr']);
	$n_ortu = ucwords(@$_POST['n_ortu']);
	$nis = @$_POST['nis'];
	$nisn = @$_POST['nisn'];
	$no_pes = @$_POST['no_pes'];

	$sumber = @$_FILES['foto']['tmp_name'];
	$target = 'img/siswa/';
	$nama_foto = @$_FILES['foto']['name'];

	$tambah = @$_POST['tambah'];

	if($tambah){
		if($nama == "" || $t_lahir == "" || $tgl_lhr == "" || $n_ortu == "" || $nis == "" || $nisn == "" || $no_pes == "" || $nama_foto == "" ){
			?>
			<script type="text/javascript"> alert("Data tidak boleh ada yang kosong"); </script>

			<?php
		}else{
			$upload = move_uploaded_file($sumber, $target.$nama_foto);

			if($upload){
				mysqli_query($conn, "INSERT INTO t_ld_siswa VALUES('$nama', '$t_lahir', '$tgl_lhr', '$n_ortu', '$nis', '$nisn',  '$no_pes', '$nama_foto')");
				?>
				<script type="text/javascript"> alert("Data sudah di tambah"); window.location.href="?page=d_siswa"; </script>

				<?php
			}else{
				?>
				<script type="text/javascript"> alert("Foto Gagal di upload"); </script>

				<?php
			}
		}
	}
	

	?>



</fieldset>