<?php
include 'conn.php';

?>

<fieldset>
	<legend>Data Diri Siswa</legend>
	<style>
		.siswa table tr img{
			transition: 2s;
		}
		.siswa table tr img:hover{
			transform: scale(4) translate(-100px);
			text-align: center;
		}
	</style>

	<a href="?page=d_siswa&action=tambah"> <button style="cursor: pointer;">Tambah</button></a>

	<div style="margin-bottom: 10px;" align="right" >
		<form action="" method="post">
		<input type="text" name="pencarian" placeholder="masukan nama siswa" align="right" style="width:200px; padding:3px" autocomplete="off" />
		<input style="cursor: pointer;" type="submit" name="cari" value="Search" style="padding: 3px;" />
	</form>
		
	</div>

	<div class="siswa">

	<table width="100%" border="2px" style="border:1px solid #000; border:border-collapse;">

		<tr style="background-color:#fc0;">
			<th>No</th>
			<th>Nama</th>
			<th>TTL</th>
			<th>Nama Ortu</th>
			<th>NIS</th>
			<th>NISN</th>
			<th>No Peserta</th>
			<th>Foto</th>
			<th>Aksi</th>
			
		</tr>

		<?php
			$i = 0;

			$pencarian = @$_POST['pencarian'];
			$cari = @$_POST['cari'];

			if($cari){
				if($pencarian != ""){
					$sql = mysqli_query($conn, "SELECT * FROM t_ld_siswa WHERE nama LIKE '%$pencarian%' ");
				}else{
					$sql = mysqli_query($conn, "SELECT * FROM t_ld_siswa");
				}
			}else{	
				$sql = mysqli_query($conn, "SELECT * FROM t_ld_siswa");
			}

			$cek = mysqli_num_rows($sql);
			if($cek < 1){
				?>
					<tr>
						<td colspan="9" align="center" style="padding: 10px;">Data tidak di temukan</td>
					</tr>
				<?php
			}else{
				while($data = mysqli_fetch_array($sql)){

					$i++;
			?>

			<tr>
				<td align="center"><?= $i; ?></td>
				<td><?= $data['nama']; ?></td>
				<td><?= $data['t_lahir']; ?>, <?= $data['tgl_lhr'];  ?></td>
				<td><?= $data['n_ortu']; ?></td>
				<td><?= $data['nis']; ?></td>
				<td><?= $data['nisn']; ?></td>
				<td><?= $data['no_pes']; ?></td>
				<td align="center"><img src="img/siswa/<?= $data['foto']; ?>" alt="foto siswa" width="60px" /></td>
				<td align="center">
					<a href="?page=d_siswa&action=edit&nisn=<?= $data['nisn']; ?>"><button style="cursor: pointer;">Edit</button></a>
					<a onclick="return confirm('Yakin ingin menghapus data?')" href="?page=d_siswa&action=hapus&nisn=<?= $data['nisn']; ?>"><button style="cursor: pointer;">Hapus</button></a>
				</td>
			</tr>

			<?php
			}
		}
		?>

	</table>

	</div>



</fieldset>