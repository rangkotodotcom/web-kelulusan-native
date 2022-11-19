<?php
session_start();
include 'conn.php';

?>

<!DOCTYPE html>
<html>

<head>
	<title>Pengumuman Kelulusan SMAN 1 2x11 Enam Lingkung</title>
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="icon" type="img/png" href="img/tetap/icon.png">
	<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>

</head>

<body>

	<div class="canvas">

		<div class="header">
			<center>
				<table style="text-align:center; margin:1px auto;">
					<tr>
						<td><img src="img/tetap/prov.png" alt="logo provinsi" width="80" /></td>
						<td>
							PEMERINTAH PROVINSI SUMATERA BARAT<br>
							DINAS PENDIDIKAN<br>
							SMAN 1 2x11 ENAM LINGKUNG<br>
						</td>
						<td><img src="img/tetap/pdd.png" alt="logo dinas pendidikan" width="100" /></td>
					</tr>
				</table>
			</center>
		</div>

		<div class="content">
			<center>
				<h3>Silahkan Login Dibawah ini!!!</h3>
			</center>
			<form action="" method="post">
				<table align="center">
					<tr>
						<td><input type="text" name="user" placeholder="12-004-001-9" autocomplete="off" required></td>
					</tr>
					<tr>
						<td><input type="password" id="pwd" name="pass" placeholder="Tanggal lahir (hhbbtttt)" required></td>
						<td><span style="position: relative; color: #999; cursor: pointer; font-size: 20px;"><i id="icon" class="fa fa-eye-slash"></i></span></td>
					</tr>
					<tr>
						<td><input type="submit" name="login" value="Login" /></td>
					</tr>

					<script type="text/javascript">
						var input = document.getElementById('pwd'),
							icon = document.getElementById('icon');

						icon.onclick = function() {

							if (input.className == 'active') {
								input.setAttribute('type', 'text');
								icon.className = 'fa fa-eye';
								input.className = '';

							} else {
								input.setAttribute('type', 'password');
								icon.className = 'fa fa-eye-slash';
								input.className = 'active';
							}

						}
					</script>

				</table>
			</form>

			<?php
			if (isset($_POST['login'])) {
				$user = $_POST['user'];
				$pass = $_POST['pass'];
				$data_user = mysqli_query($conn, "SELECT * FROM t_luser WHERE user = '$user' AND pass = '$pass' ");
				$r = mysqli_fetch_array($data_user);
				$nama = $r['nama'];
				$username = $r['user'];
				$password = $r['pass'];
				$level = $r['level'];

				$online = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM t_online WHERE level = 'siswa' "));

				if ($online < 100) {

					if ($user == $username && $pass == $password) {
						$_SESSION['nama'] = $nama;
						$_SESSION['user'] = $username;
						$_SESSION['level'] = $level;

						mysqli_query($conn, "INSERT INTO t_online VALUES('$_SESSION[nama]', '$_SESSION[user]', '$_SESSION[level]', 'ONLINE', NULL) ");

						echo "
							<script>
							alert('Login Sukses');
							document.location.href = 'beranda.php';
							</script>
						";
					} else {
						echo "
							<script>
							alert('Username / password salah');
							document.location.href = 'index.php';
							</script>
						";
					}
				} else {
					echo "
						<script>
						alert('Harap Bersabar, Server Lagi Penuh');
						document.location.href = 'index.php';
						</script>
					";
				}
			}

			?>


		</div>

		<div class="footer">
			Copyright &copy 2018 <i> Teknisi SMAN 1 2x11 ENAM LINGKUNG </i>
		</div>

	</div>


</body>

</html>