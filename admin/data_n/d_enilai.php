<?php
include 'conn.php';

?>

<?php
	$kd = @$_GET['nama'];
	$sql = mysqli_query($conn, "SELECT * FROM t_ln_siswa WHERE nama = '$kd' ");
	$data = mysqli_fetch_array($sql);
?>

<fieldset>
	<legend>Edit Nilai Siswa</legend>
	<link rel="stylesheet" type="text/css" href="css/tambah.css">

	<form action="" method="post">
		<table>
			<tr>
				<td>Nama Siswa</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?= $data['nama']; ?>" autocomplete="off" /></td>
			</tr>
			<tr>
				<td>No peserta</td>
				<td>:</td>
				<td><input type="text" name="no_pes" value="<?= $data['no_pes']; ?>" /></td>
			</tr>
			<tr>
				<td>B Indonesia</td>
				<td>:</td>
				<td><input type="text" name="bin" value="<?= $data['bin']; ?>" /></td>
			</tr>
			<tr>
				<td>B Inggris</td>
				<td>:</td>
				<td><input type="text" name="bing" value="<?= $data['bing']; ?>" /></td>
			</tr>
			<tr>
				<td>Matematika</td>
				<td>:</td>
				<td><input type="text" name="mat" value="<?= $data['mat']; ?>" /></td>
			</tr>
			<tr>
				<td>Pilihan</td>
				<td>:</td>
				<td><input type="text" name="pil" value="<?= $data['pil']; ?>" /></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input style="cursor: pointer;" type="submit" name="edit" value="Simpan" /></td>
			</tr>
		</table>

	</form>

	<?php

	$nama = ucwords(@$_POST['nama']);
	$no_pes = @$_POST['no_pes'];
	$bin = @$_POST['bin'];
	$bing = @$_POST['bing'];
	$mat = @$_POST['mat'];
	$pil = @$_POST['pil'];

	$edit = @$_POST['edit'];

	if($edit){
		if($nama == "" || $no_pes == "" || $bin == "" || $bing == "" || $mat == "" || $pil == ""){
			?>
			<script type="text/javascript"> alert("Data tidak boleh ada yang kosong"); </script>

			<?php
		}else{
				mysqli_query($conn, "UPDATE t_ln_siswa SET nama = '$nama', no_pes = '$no_pes', bin = '$bin', bing = '$bing', mat = '$mat', pil = '$pil' WHERE nama = '$kd' ");
				?>
				<script type="text/javascript"> alert("Nilai sudah di Edit"); window.location.href="?page=d_nilai"; </script>

				<?php
			}
	}

	?>


</fieldset>