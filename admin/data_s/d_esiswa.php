<?php
include 'conn.php';

?>

<?php
	$kd = @$_GET['nisn'];
	$sql = mysqli_query($conn, "SELECT * FROM t_ld_siswa WHERE nisn= '$kd' ");
	$data = mysqli_fetch_array($sql);
?>

<fieldset>
	<legend>Edit Data Siswa</legend>
	<link rel="stylesheet" type="text/css" href="css/tambah.css">

	<form action="" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Nama Lengkap</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?= $data['nama']; ?>" /></td>
			</tr>
			<tr>
				<td>Tempat Lahir</td>
				<td>:</td>
				<td><input type="text" name="t_lahir" value="<?= $data['t_lahir']; ?>" /></td>
			</tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="text" name="tgl_lhr" value="<?= $data['tgl_lhr']; ?>" /></td>
			</tr>
			<tr>
				<td>Nama Orang Tua</td>
				<td>:</td>
				<td><input type="text" name="n_ortu" value="<?= $data['n_ortu']; ?>" /></td>
			</tr>
			<tr>
				<td>NIS</td>
				<td>:</td>
				<td><input type="text" name="nis" value="<?= $data['nis']; ?>" /></td>
			</tr>
			<tr>
				<td>NISN</td>
				<td>:</td>
				<td><input type="text" name="nisn" value="<?= $data['nisn']; ?>" /></td>
			</tr>
			<tr>
				<td>No Peserta</td>
				<td>:</td>
				<td><input type="text" name="no_pes" value="<?= $data['no_pes']; ?>" /></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td>:</td>
				<td><input type="file" name="foto" /></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input style="cursor: pointer;" type="submit" name="edit" value="Simpan" /> </td>
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

	$edit = @$_POST['edit'];

	if($edit){
		if($nama == "" || $t_lahir == "" || $tgl_lhr == "" || $n_ortu == "" || $nis == "" || $nisn == "" || $no_pes == "" ){
			?>
			<script type="text/javascript"> alert("Data tidak boleh ada yang kosong"); </script>

			<?php
		}else{
			if($nama_foto == ""){
				mysqli_query($conn, "UPDATE t_ld_siswa SET nama = '$nama', t_lahir = '$t_lahir', tgl_lhr = '$tgl_lhr', n_ortu = '$n_ortu', nis = '$nis', nisn = '$nisn', no_pes = '$no_pes' WHERE nisn = '$kd' ");
					?>
					<script type="text/javascript"> alert("Data sudah di edit"); window.location.href="?page=d_siswa"; </script>

					<?php 
			}else{
				$upload = move_uploaded_file($sumber, $target.$nama_foto);

				if($upload){
					mysqli_query($conn, "UPDATE t_ld_siswa SET nama = '$nama', tgl_lhr = '$t_lahir', tgl_lhr = '$tgl_lhr', n_ortu = '$n_ortu', nis = '$nis', nisn = '$nisn', no_pes = '$no_pes', foto = '$nama_foto' WHERE nisn = '$kd' ");
					?>
					<script type="text/javascript"> alert("Data sudah di edit"); window.location.href="?page=d_siswa"; </script>

					<?php
				}else{
					?>
					<script type="text/javascript"> alert("Foto Gagal di upload"); </script>

					<?php
				}
			}	
		}
	}


	?>


</fieldset>