<?php
include 'conn.php';

?>

<fieldset>
	<legend>Masukan Data User</legend>
	<link rel="stylesheet" type="text/css" href="css/tambah.css">

	<form action="" method="post">
		<table>
			<tr>
				<td>Nama Siswa</td>
				<td>:</td>
				<td><input type="text" name="nama" autocomplete="off" /></td>
			</tr>
			<tr>
				<td>User</td>
				<td>:</td>
				<td><input type="text" name="user" /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="pass" autocomplete="off" /></td>
			</tr>
			<tr>
				<td>Status</td>
				<td>:</td>
				<td> 
					<input type="radio" name="status" value="aktif" />Aktif <br>
					<input type="radio" name="status" value="non-aktif"/>Non-aktif
				</td>
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
	$user = @$_POST['user'];
	$pass = @$_POST['pass'];
	$status = @$_POST['status'];

	$tambah = @$_POST['tambah'];

	if($tambah){
		if($nama == "" || $user == "" || $pass == "" || $status == ""){
			?>
			<script type="text/javascript"> alert("Data tidak boleh ada yang kosong"); </script>

			<?php
		}else{
				mysqli_query($conn, "INSERT INTO t_luser VALUES('$nama', '$user', '$pass', '$status', 'siswa')");
				?>
				<script type="text/javascript"> alert("User sudah di tambah"); window.location.href="?page=d_user"; </script>

				<?php
			}
		}		
	?>



</fieldset>