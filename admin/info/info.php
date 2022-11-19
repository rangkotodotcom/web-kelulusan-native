<?php
include 'conn.php';

?>


<fieldset>
	<legend><b>Pengumuman</b></legend>
	<style>
		.isi{
			width: 900px;
			display: block;
		    padding: 9.5px;
		    margin: 0 0 10px;
		    font-size: 16px;
		    color: #333;
		    background-color: #f5f5f5;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    overflow: auto;
		}
	</style>

			<?php
			$sql = mysqli_query($conn, "SELECT * FROM t_linfo ORDER BY id DESC");
			while ($data = mysqli_fetch_array($sql)){

			?>

		<p align="left">
			<b style="font-size: 20px"><?= $data['subjek']; ?></b><br>
			<span style="font-size: 12px;">Di tulis pada tanggal <?= $data['tanggal']; ?></span>
		</p>
		<p align="left">
			<div class="isi"><?= $data['info']; ?></div>
		</p>

		<?php } ?> 

</fieldset>