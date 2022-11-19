<?php
include 'conn.php';
?>

<?php
	$kd = @$_GET['user'];
	$sql = mysqli_query($conn, "SELECT * FROM t_ln_siswa WHERE no_pes = '$kd' ");
	$sql1 = mysqli_query($conn, "SELECT * FROM t_luser WHERE user = '$kd' ");
	$data = mysqli_fetch_array($sql);
	$data1 = mysqli_fetch_array($sql1);
?>

<fieldset>
	<legend>Data Nilai</legend>

	<style type="text/css">
		table tr a{
			text-decoration: none;
			border:2px solid;
			padding: 5px;
			width: 20px;
			text-align: center;
			color: black;
			background-color: #ff5a00;
			border-radius: 10px;
		}
	</style>

		<table style="font-size:30px; padding: 20px 0;" align="center">
			<tr>
				<td>Nama Lengkap</td>
				<td>  :  </td>
				<td><b><?= $data['nama']; ?></b></td>
			</tr>
			<tr>
				<td>No Peserta</td>
				<td>  :  </td>
				<td><?= $data['no_pes']; ?></td>
			</tr>
			<tr>
				<td>B. Indonesia</td>
				<td>  :  </td>
				<td><?= $data['bin']; ?></td>
			</tr>
			<tr>
				<td>B. Inggris</td>
				<td>  :  </td>
				<td><?= $data['bing']; ?></td>
			</tr>
			<tr>
				<td>Matematika</td>
				<td>  :  </td>
				<td><?= $data['mat']; ?></td>
			</tr>
			<tr>
				<td>Pilihan</td>
				<td>  :  </td>
				<td><?= $data['pil']; ?></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td></td>
			</tr>

			<?php
				$status = $data1['status'] == 'aktif';
				if($status){
				 ?>

			<tr>
				<td colspan="3" align="center"><a href="cetak_skl.php?user=<?= $data['no_pes']; ?>" target="blank"> Cetak Surat Kelulusan </a></td>
			</tr>
			<?php }else{ ?>

			<tr>
				<td colspan="3" align="center"><a onclick="return confirm('Status Anda Belum Aktif. Silahkan Hubungi Admin')" href="?page=un&user=<?= $_SESSION['user'];?>"> Cetak Surat Kelulusan </a></td>
			</tr>

			<?php } ?>

		</table>

		

</fieldset>		