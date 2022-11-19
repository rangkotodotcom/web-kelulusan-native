<?php
include 'conn.php';

?>


<fieldset>
	<legend><b>Pengumuman</b></legend>

			<?php
			$sql = mysqli_query($conn, "SELECT * FROM t_linfo ORDER BY id DESC");
			while ($data = mysqli_fetch_array($sql)){

			?>

		<table>
			<tr>
				<td>
					<span style="font-size: 20px;"><b><?= $data['subjek']; ?></b></span><br>
					<span style="font-size: 12px;"><?= $data['tanggal']; ?></span>
				</td>
			</tr>
			<tr>
				<td><div style="height: 100px; width: 850px; font-family: arial;
				font-size: 18px; background-color: white; overflow: auto;"><?= $data['info']; ?></div></td>
				<td align="center">
					<a href="?page=e_info&action=edit&id=<?= $data['id']; ?>"><button style="cursor: pointer;">Edit</button></a>
					<a onclick="return confirm('Hapus Pengumuman ?')" href="?page=e_info&action=hapus&id=<?= $data['id']; ?>"><button style="cursor: pointer;">Hapus</button></a>
				</td>
			</tr>
		</table>	

		<?php } ?> 

</fieldset>