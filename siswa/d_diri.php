<?php
include 'conn.php';

	$kd = @$_GET['user'];
	$sql = mysqli_query($conn, "SELECT * FROM t_ld_siswa WHERE no_pes = '$kd' ");
	$data = mysqli_fetch_array($sql);
?>

<fieldset>
	<legend>Data Diri</legend>

		<table style="font-size:30px; padding: 20px 0;" align="center">
			<tr>
				<td>Nama Lengkap</td>
				<td>  :  </td>
				<td><b><?= $data['nama']; ?></b></td>
			</tr>
			<tr>
				<td>Tempat, Tanggal Lahir</td>
				<td>  :  </td>
				<td><?= $data['t_lahir']; ?>, <?= $data['tgl_lhr']; ?></td>
			</tr>
			<tr>
				<td>Nama Orang Tua</td>
				<td>  :  </td>
				<td><?= $data['n_ortu']; ?></td>
			</tr>
			<tr>
				<td>NIS</td>
				<td>  :  </td>
				<td><?= $data['nis']; ?></td>
			</tr>
			<tr>
				<td>NISN</td>
				<td>  :  </td>
				<td><?= $data['nisn']; ?></td>
			</tr>
			<tr>
				<td>No Peserta</td>
				<td>  :  </td>
				<td><?= $data['no_pes']; ?></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><img src="img/siswa/<?= $data['foto']; ?>" width="180px" style="margin-top: 30px;" /></td>
			</tr>
			
		</table>
