<?php
include 'conn.php';

?>

<fieldset>
	<legend>Data Nilai Siswa</legend>
	<a href="?page=d_nilai&action=tambah_n"> <button style="cursor: pointer;">Tambah</button></a>

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
			<th>No Peserta</th>
			<th>B. Indonesia</th>
			<th>B. Inggris</th>
			<th>Matematika</th>
			<th>Pilihan</th>
			<th>Aksi</th>
			
		</tr>

		<?php
			$i = 0;

			$pencarian = @$_POST['pencarian'];
			$cari = @$_POST['cari'];

			if($cari){
				if($pencarian != ""){
					$sql = mysqli_query($conn, "SELECT * FROM t_ln_siswa WHERE nama LIKE '%$pencarian%' ");
				}else{
					$sql = mysqli_query($conn, "SELECT * FROM t_ln_siswa ");
				}
			}else{	
				$sql = mysqli_query($conn, "SELECT * FROM t_ln_siswa ");
			}

			$cek = mysqli_num_rows($sql);
			if($cek < 1){
				?>
					<tr>
						<td colspan="8" align="center" style="padding: 10px;">Data tidak di temukan</td>
					</tr>
				<?php
			}else{
				while($data = mysqli_fetch_array($sql)){

					$i++;
			?>

			<tr>
				<td align="center"><?= $i; ?></td>
				<td><?= $data['nama']; ?></td>
				<td><?= $data['no_pes']; ?></td>
				<td align="center"><?= $data['bin']; ?></td>
				<td align="center"><?= $data['bing']; ?></td>
				<td align="center"><?= $data['mat']; ?></td>
				<td align="center"><?= $data['pil']; ?></td>
				<td align="center">
					<a href="?page=d_nilai&action=edit_n&nama=<?= $data['nama']; ?>"><button style="cursor: pointer;">Edit</button></a>
					<a onclick="return confirm('Yakin ingin menghapus nilai?')" href="?page=d_nilai&action=hapus_n&nama=<?= $data['nama']; ?>"><button style="cursor: pointer;">Hapus</button></a>
				</td>
			</tr>

			<?php
			}
		}
		?>

	</table>



</fieldset>