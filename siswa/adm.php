<?php

include 'conn.php';

$kd = @$_GET['user'];
$sql = mysqli_query($conn, "SELECT * FROM t_luser WHERE user = '$kd' ");
$data = mysqli_fetch_array($sql);

$pilih = $data['nama'];

 ?>

 <fieldset>
 	<legend>Upload Bukti</legend>
 	<style>
 		form input[type=text]{
 			width: 300px;
 			height: 25px;
 			margin-bottom: 5px;
 		}
 		form select{
 			width: 304px;
 			height: 25px;
 			margin-bottom: 5px;
 		}
 		form input[type=submit]{
 			width: 100px;
 			height: 25px;
 			cursor: pointer;
 		}
		.bukti table tr img{
			transition: 2s;
		}
		.bukti table tr img:hover{
			transform: scale(4) translate(-50px);
			text-align: center;
		}

 	</style>

 	<form action="" method="post" enctype="multipart/form-data">
 		<input type="text" name="nama" value="<?= $data['nama'] ?>" readonly /><br>
 		<select name="jenis" required>
 			<option value="">Pilih Jenis File</option>
 			<option value="Komite">Tanda Iuran Komite</option>
 			<option value="Pustaka">Tanda Bebas Pustaka</option>
 		</select><br>
 		<input type="file" name="bukti" required />
 		<input type="submit" name="upload" value="Upload"><br>
 		Hati-hati dalam mengupload, Karena File yang sudah di Upload Tidak Bisa di Rubah.<br>
 		File berukuran 3x4 atau ukuran maksimal 100kb.<br>
 		Upload File Secara Beurutan.
 	</form><br><br>

 	<div class="bukti">

 	<table width="100%" border="2px" style="border:1px solid #000; border:border-collapse;">

		<tr style="background-color:#fc0;">
			<th>No</th>
			<th>Nama</th>
			<th>Tanda Iuran Komite</th>
			<th>Tanda Bebas Pustaka</th>
						
		</tr>

		<?php

		$i = 0;

		$tb = mysqli_query($conn, "SELECT * FROM t_adm WHERE nama = '$pilih' " );

		$cek = mysqli_num_rows($tb);

		if($cek < 1 ){
			?>
				<tr>
					<td colspan="4" align="center" style="padding: 10px;">Data tidak di temukan</td>
				</tr>
			<?php
		}else{
			$data = mysqli_fetch_array($tb)

			?>

			<tr>
				<td align="center">1</td>
				<td align="center"><?= $data['nama']; ?></td>
				<td align="center"><img src="img/adm/<?= $data['komite']; ?>" width="80px" alt="bukti iuran komite" /></td>
				<td align="center"><img src="img/adm/<?= $data['pustaka']; ?>" width="80px" alt="bukti bebas pustaka" /></td>
			</tr>

			<?php
			}


		 ?>

	</table>	

	</div>

 	<?php

 	if(isset($_POST['upload'])){
 		$nama = $_POST['nama'];
 		$jenis = $_POST['jenis'];

 		$file_name = $_FILES['bukti']['name'];
 		$tmp_name = $_FILES['bukti']['tmp_name'];
 		$size = $_FILES['bukti']['size'];

 		if($size < 100000){
 			$upload = move_uploaded_file($tmp_name, "img/adm/".$file_name);	

	 		if($upload){
	 			if($jenis == 'Komite' ){
	 				mysqli_query($conn, "INSERT INTO t_adm VALUES('$nama', '$file_name', '' ) ");
	 			}else{
	 				mysqli_query($conn, "UPDATE t_adm SET pustaka = '$file_name' WHERE nama = '$nama' " );
	 			}

	 			echo "<script>
						alert('File Sudah Di Upload');
						document.location.href = '../beranda.php?page=adm&user=$_SESSION[user]';

					</script>
					";
	 		}else{
	 			echo "<script>
						alert('File Gagal Di Upload');
						document.location.href = '../beranda.php?page=adm&user=$_SESSION[user]';

					</script>
					";
	 		}
 		}else{
 			echo "<script>
					alert('Ukuran File Terlalu Besar');
					document.location.href = '../beranda.php?page=adm&user=$_SESSION[user]';

				</script>
					";
 		}

	 		
 	}


 	 ?>

 </fieldset>