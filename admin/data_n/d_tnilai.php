<?php
include 'conn.php';

?>

<fieldset>
	<legend>Masukan Nilai</legend>
	<link rel="stylesheet" type="text/css" href="css/tambah.css">

	<form action="" method="post">
		<table>
			<tr>
				<td>Nama Siswa</td>
				<td>:</td>
				<td><input type="text" name="nama" autocomplete="off" /></td>
			</tr>
			<tr>
				<td>No Peserta</td>
				<td>:</td>
				<td><input type="text" name="no_pes" placeholder="12-004-001-9" /></td>
			</tr>
			<tr>
				<td>B. Indonesia</td>
				<td>:</td>
				<td><input type="text" name="bin" /></td>
			</tr>
			<tr>
				<td>B. Inggris</td>
				<td>:</td>
				<td><input type="text" name="bing" /></td>
			</tr>
			<tr>
				<td>Matematika</td>
				<td>:</td>
				<td><input type="text" name="mat" /></td>
			</tr>
			<tr>
				<td>Pilihan</td>
				<td>:</td>
				<td><input type="text" name="pil" /></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="tambah" value="Tambah" /> <input type="reset" value="Reset" /></td>
			</tr>
		</table>

	</form>

	<?php

	$nama = ucwords(@$_POST['nama']);
	$no_pes = @$_POST['no_pes'];
	$bin = @$_POST['bin'];
	$bing = @$_POST['bing'];
	$mat = @$_POST['mat'];
	$pil  = @$_POST['pil'];

	$tambah = @$_POST['tambah'];

	if($tambah){
		if($nama == "" || $no_pes == "" || $bin == "" || $bing == "" || $mat == "" || $pil == ""){
			?>
			<script type="text/javascript"> alert("Data tidak boleh ada yang kosong"); </script>

			<?php
		}else{
				mysqli_query($conn, "INSERT INTO t_ln_siswa VALUES('$nama', '$no_pes', '$bin', '$bing', '$mat', '$pil')");
				?>
				<script type="text/javascript"> alert("Nilai sudah di tambah"); window.location.href="?page=d_nilai"; </script>

				<?php
			}
		}		
	?>



</fieldset>