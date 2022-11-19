<?php

include 'conn.php';

$kd = @$_GET['user'];
$sql = mysqli_query($conn, "SELECT * FROM t_luser WHERE user = '$kd' ");
$data = mysqli_fetch_array($sql);

 ?>
<fieldset>
	<legend>Ganti Password</legend>
	<style type="text/css">
		input[type=text]{
			width: 200px;
			height: 25px;
			margin-bottom: 5px;
		}
		input[type=password]{
			width: 200px;
			height: 25px;
			margin-bottom: 5px;
		}
		input[type=submit]{
			height: 25px;
			width: 100px;
			cursor: pointer;
		}	
	</style>

	<form action="" method="post" >
		Password Lama <br>
		<input type="text" value="<?= $data['pass']; ?>" autocomplete="off" readonly/><br>
		Password Baru <br>
		<input type="password" name="pass" /><br>
		<input type="submit" name="ganti" value="Ganti">

	</form>

	<?php

	$pass = @$_POST['pass'];

	if(isset($_POST['ganti'])){
		if(strlen($pass) > 15 || strlen($pass) < 8 ){
			echo "
					<script>
						alert('Password Minimal 8 karakter dan Maksimal 15 karakter');
						document.location.href = '?page=g_pass&user=$_SESSION[user]';

					</script>
				 ";
		}else{
			$edit = mysqli_query($conn, "UPDATE t_luser SET pass = '$pass' WHERE user = '$kd' " );

			if($edit){
				echo "
						<script>
							alert('Password Sudah Di Ganti');
							window.location.href = 'keluar.php';

						</script>
					 ";
			}else{
				echo "
						<script>
							alert('Gagal Mengganti Password');
							document.location.href = '?page=g_pass&user=$_SESSION[user]';

						</script>
					 ";
			}
		}	
	}

	 ?>
</fieldset>