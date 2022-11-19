<?php

include 'conn.php';

session_start();


if(isset($_SESSION["lastActivity"])){
	if($_SESSION['lastActivity'] + 10 * 60 < time()){
		
		mysqli_query($conn, "DELETE FROM t_online WHERE user = '$_SESSION[user]' ");
		
		session_unset();		
		session_destroy();
		echo "
				<script>
					alert('Sesi anda sudah Habis. Silahkan login Kembali!');
					document.location.href = 'index.php';

				</script>
			 ";
	}
}

$_SESSION["lastActivity"] = time();


if(!isset($_SESSION['user'])){
	echo"
			<script>
				alert('Anda Belum Login. Silahkan Login Dahulu!!!');
				document.location.href = 'index.php';
			</script>
		";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Pengumuman Kelulusan SMAN 1 2x11 Enam Lingkung</title>
	<link rel="stylesheet" type="text/css" href="css/beranda.css">
	<link rel="icon" type="img/png" href="img/tetap/icon.png">

<head>

<body>

<div class="canvas">

	<div class="header">
		<center>
			<table style="text-align: center;">
			<tr>
				<td><img src="img/tetap/prov.png" alt="logo provinsi" width="80"/></td>
				<td>
				PEMERINTAH PROVINSI SUMATERA BARAT<br>
				DINAS PENDIDIKAN<br>
				SMAN 1 2x11 ENAM LINGKUNG<br>
				</td>
				<td><img src="img/tetap/pdd.png" alt="logo dinas pendidikan" width="100"/></td>
			</tr>
			</table>
		</center>
	</div>

	<div class="menu">
		<ul>
			<li class="utama"><a href="beranda.php">Beranda</a></li>
			
				<?php
				$level = $_SESSION['level'] == 'siswa';
				if($level){
				?>		

			<li><a href="?page=hasil">Hasil</a></li>
			<li><a href="?page=diri&user=<?= $_SESSION['user'];?>">Data Diri</a></li>
			<li><a href="?page=un&user=<?= $_SESSION['user'];?>">Nilai UN</a></li>
			<li><a href="?page=adm&user=<?= $_SESSION['user'];?>">Administrasi</a></li>

				<?php }else{ ?>

			<li class="utama"><a href="#">Siswa</a>
				<ul>
					<li><a href="?page=d_siswa">Data Siswa </a></li>
					<li><a href="?page=d_nilai">Data Nilai</a></li>
				</ul>	
			</li>
			<li class="utama"><a href="#">User</a>
				<ul>
					<li><a href="?page=d_user">Data User</a></li>
					<li><a href="?page=u_on">User Online</a></li>
				</ul>
			</li>
			<li class="utama"><a href="#">Info</a>
				<ul>
					<li><a href="?page=t_info">Tulis Info</a></li>
					<li><a href="?page=e_info">Kelola Info</a></li>
				</ul>
			</li>
			<li class="utama"><a href="#">Import</a>
				<ul>
					<li><a href="?page=i_data">Data Siswa</a></li>
					<li><a href="?page=i_nilai">Nilai Siswa</a></li>
					<li><a href="?page=i_user">User</a></li>
				</ul>
			</li>
			<li class="utama"><a href="#">Foto</a>
				<ul>
					<li><a href="?page=u_foto">Upload Foto</a></li>
					<li><a href="?page=b_adm">Tanda Iuran</a></li>
				</ul>
			</li>

				<?php } ?>
				
			<li class="utama right" style="background-color: #00ff00;"><a href="keluar.php">Keluar</a></li>
			<li class="utama right"><a href="#"> Assalamu'alaikum <span style="color: #a52a2a;"><i><?= $_SESSION['nama'];?> </i></span> </a>
				<ul>
					<li><a href="?page=g_pass&user=<?= $_SESSION['user'];?>">Ganti Password</a></li>
				</ul>
			</li>
		</ul>
	</div>

	<div class="content">
		<?php
		$page = @$_GET['page'];
		$action = @$_GET['action'];
		$level = $_SESSION['level'] == 'siswa';
		if($level){
				if($page == 'diri'){
					include 'siswa/d_diri.php';
				}else if($page == 'un'){
					include 'siswa/d_nilai.php';
				}else if($page == ''){
					include 'admin/info/info.php';
				}else if($page == 'g_pass'){
					include 'admin/g_pass.php';
				}else if ($page == 'hasil'){
					include 'siswa/hasil.php';
				}else if($page == 'adm'){
					include 'siswa/adm.php';
				}
			}else{	
				 if ($page == 'd_siswa'){
					if($action == ""){
						include 'admin/data_s/d_siswa.php';
					}else if($action == "tambah"){
						include 'admin/data_s/d_tsiswa.php';
					}else if($action == "edit"){
						include 'admin/data_s/d_esiswa.php';
					}else if($action == "hapus"){
						include 'admin/data_s/d_hsiswa.php';
					}
				}else if ($page == 'd_nilai'){
					if($action == ""){
						include 'admin/data_n/d_nilai.php';
					}else if($action == "tambah_n"){
						include 'admin/data_n/d_tnilai.php';
					}else if($action == "edit_n"){
						include 'admin/data_n/d_enilai.php';
					}else if($action == "hapus_n"){
						include 'admin/data_n/d_hnilai.php';
					}
				}else if($page == 'd_user'){
					if($action == ""){
						include 'admin/data_u/d_user.php';
					}else if($action == "tambah_u"){
						include 'admin/data_u/d_tuser.php';
					}else if($action == "edit_u"){
						include 'admin/data_u/d_euser.php';
					}else if($action == "hapus_u"){
						include 'admin/data_u/d_huser.php';
					}
				}else if($page == ''){
					include 'admin/info/info.php';
				}else if($page == 't_info'){
					include 'admin/info/t_info.php';
				}else if($page == 'e_info'){
					if($action == ''){
						include 'admin/info/e_info.php';
					}else if($action == 'edit'){
						include 'admin/info/edit.php';
					}else if($action == 'hapus'){
						include 'admin/info/hapus.php';
					}
				}else if($page == 'i_data'){
					include 'admin/impor/i_data.php';
				}else if($page == 'i_nilai'){
					include 'admin/impor/i_nilai.php';
				}else if($page == 'i_user'){
					include 'admin/impor/i_user.php';
				}else if($page == 'u_foto'){
					include 'admin/upload/u_foto.php';
				}else if($page == 'g_pass'){
					include 'admin/g_pass.php';
				}else if ($page == 'u_on'){
					include 'admin/u_on.php';
				}else if($page == 'b_adm'){
					if($action == ''){
						include 'admin/upload/b_adm.php';	
					}else if($action == 'hapus_b'){
						include 'admin/upload/h_adm.php';
					}
					
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

