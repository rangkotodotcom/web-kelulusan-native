<fieldset>
	<legend>Upload Foto Siswa</legend>

	<form action="" method="post" enctype="multipart/form-data">
		<input type="file" name="foto[]" multiple>
		<br><br>
		<input style="width: 100px; height: 25px; cursor: pointer;" type="submit" name="upload" value="Upload">

	</form>

<?php 

	if (isset($_POST["upload"])) {
		$jumlah = count($_FILES['foto']['name']);
		if ($jumlah > 0) {
			for ($i=0; $i < $jumlah; $i++) { 
				$file_name = $_FILES['foto']['name'][$i];
				$tmp_name = $_FILES['foto']['tmp_name'][$i];				
				move_uploaded_file($tmp_name, "img/siswa/".$file_name);				
			}
			echo "
				<script>
					alert('Foto Berhasil Di Upload');
					document.location.href = '../../beranda.php?page=d_siswa';

				</script>
				 ";
		}
		else{
			echo "
				<script>
					alert('Foto Gagal Di Upload');
					document.location.href = '../../beranda.php?page=u_foto';

				</script>
				 ";
		}
	}
?>

</fieldset>