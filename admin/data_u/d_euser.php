<?php
include 'conn.php';


	$kd = @$_GET['nama'];
	$sql = mysqli_query($conn, "SELECT * FROM t_luser WHERE nama = '$kd' ");
	$data = mysqli_fetch_array($sql);
?>

<fieldset>
	<legend>Edit Data User</legend>
	<link rel="stylesheet" type="text/css" href="css/tambah.css">

	<form action="" method="post">
		<table>
			<tr>
				<td>Nama Siswa</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?= $data['nama']; ?>" readonly/></td>
			</tr>
			<tr>
				<td>User</td>
				<td>:</td>
				<td><input type="text" name="user" value="<?= $data['user']; ?>" /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="text" name="pass" value="<?= $data['pass']; ?>" autocomplete="off" /></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>:</td>
				<td> 
					<input type="radio" name="status" value="aktif" <?php if($data['status'] == 'aktif') {echo "checked";} ?> />Aktif <br>
					<input type="radio" name="status" value="non-aktif" <?php if($data['status'] == 'non-aktif') {echo "checked";} ?> />Non-aktif
					
				</td>
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
	$user = @$_POST['user'];
	$pass = @$_POST['pass'];
	$status = @$_POST['status'];

	$edit = @$_POST['edit'];

	if($edit){
		if($nama == "" || $user == "" || $pass == ""){
			?>
			<script type="text/javascript"> alert("Data tidak boleh ada yang kosong"); </script>

			<?php
		}else{
				mysqli_query($conn, "UPDATE t_luser SET nama = '$nama', user = '$user', pass = '$pass', status = '$status', level = 'siswa' WHERE nama = '$kd' ");
				?>
				<script type="text/javascript"> alert("User sudah di Edit"); window.location.href="?page=d_user"; </script>

				<?php
			}
	}

	?>


</fieldset>