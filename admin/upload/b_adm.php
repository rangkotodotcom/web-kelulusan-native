<?php

include 'conn.php';

 ?>

 <fieldset>
 	<legend>Bukti Bayar Iuran</legend>
 	<style>
 		.bukti table tr img{
			transition: 2s;
		}
		.bukti table tr img:hover{
			transform: scale(4) translate(-50px);
			text-align: center;
		}
 	</style>

 	<div style="margin-bottom: 10px;" align="right" >
		<form action="" method="post">
		<input type="text" name="pencarian" placeholder="masukan nama" align="right" style="width:200px; padding:3px" autocomplete="off" />
		<input style="cursor: pointer;" type="submit" name="cari" value="Search" style="padding: 3px;" />
	</form>
		
	</div>

	<div class="bukti">

	<table width="100%" border="2px" style="border:1px solid #000; border:border-collapse;">

		<tr style="background-color:#fc0;">
			<th>No</th>
			<th>Nama</th>
			<th>Tanda Iuran Komite</th>
			<th>Tanda Bebas Pustaka</th>
			<th>Aksi</th>
			
		</tr>

		<?php
			$i = 0;

			$pencarian = @$_POST['pencarian'];
			$cari = @$_POST['cari'];

			if($cari){
				if($pencarian != ""){
					$sql = mysqli_query($conn, "SELECT * FROM t_adm WHERE nama LIKE '%$pencarian%' ");
				}else{
					$sql = mysqli_query($conn, "SELECT * FROM t_adm ");
				}
			}else{	
				$sql = mysqli_query($conn, "SELECT * FROM t_adm ");
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
				<td align="center"><img src="img/adm/<?= $data['komite']; ?>" alt="bukti iuran komite" width="80px" /></td>
				<td align="center"><img src="img/adm/<?= $data['pustaka']; ?>" alt="bukti bebas pustaka" width="80px" /></td>
				<td align="center">
					<a onclick="return confirm('Yakin ingin menghapus Bukti Adm?')" href="?page=b_adm&action=hapus_b&nama=<?= $data['nama']; ?>"><button style="cursor: pointer;">Hapus</button></a>
				</td>
			</tr>

			<?php
			}
		}
		?>

	</table></div>

 </fieldset>