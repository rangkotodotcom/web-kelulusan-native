<?php
include 'conn.php';

?>

<fieldset>
	<legend>Data User</legend>
	<a href="?page=d_user&action=tambah_u"> <button style="cursor: pointer;">Tambah</button></a>
	<a href="cetak_u.php" target="blank"><button style="cursor: pointer;">Cetak</button></a>

	<div style="margin-bottom: 10px;" align="right" >
		<form action="" method="post">
		<input type="text" name="pencarian" placeholder="masukan nama" align="right" style="width:200px; padding:3px" autocomplete="off" />
		<input style="cursor: pointer;" type="submit" name="cari" value="Search" style="padding: 3px;" />
	</form>
		
	</div>

	<table width="100%" border="2px" style="border:1px solid #000; border:border-collapse;">

		<tr style="background-color:#fc0;">
			<th>No</th>
			<th>Nama</th>
			<th>Username</th>
			<th>Password</th>
			<th>Status</th>
			<th>Aksi</th>
			
		</tr>

		<?php
			$i = 0;

			$pencarian = @$_POST['pencarian'];
			$cari = @$_POST['cari'];

			if($cari){
				if($pencarian != ""){
					$sql = mysqli_query($conn, "SELECT * FROM t_luser WHERE nama LIKE '%$pencarian%' ");
				}else{
					$sql = mysqli_query($conn, "SELECT * FROM t_luser WHERE level = 'siswa' ");
				}
			}else{	
				$sql = mysqli_query($conn, "SELECT * FROM t_luser WHERE level = 'siswa' ");
			}

			$cek = mysqli_num_rows($sql);
			if($cek < 1){
				?>
					<tr>
						<td colspan="5" align="center" style="padding: 10px;">Data tidak di temukan</td>
					</tr>
				<?php
			}else{
				while($data = mysqli_fetch_array($sql)){

					$i++;
			?>

			<tr>
				<td align="center"><?= $i; ?></td>
				<td><?= $data['nama']; ?></td>
				<td><?= $data['user']; ?></td>
				<td><?= $data['pass']; ?></td>
				<td><?= $data['status']; ?></td>
				<td align="center">
					<a href="?page=d_user&action=edit_u&nama=<?= $data['nama']; ?>"><button style="cursor: pointer;">Edit</button></a>
					<a onclick="return confirm('Yakin ingin menghapus user?')" href="?page=d_user&action=hapus_u&nama=<?= $data['nama']; ?>"><button style="cursor: pointer;">Hapus</button></a>
				</td>
			</tr>

			<?php
			}
		}
		?>

	</table>



</fieldset>