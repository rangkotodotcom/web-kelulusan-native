<?php
include 'conn.php';

?>
<fieldset>
	<legend>Tulis Pengumuman</legend>

	<form action="" method="post">
		<table>
			<tr>
				<td><input type="text" name="subjek" placeholder="subjek"></td>
			</tr>
			<tr>
				<td><textarea style="height: 100px; width: 900px;" name="info" placeholder="isi"></textarea></td>
			</tr>
			<tr>
				<td><input style="cursor: pointer;" type="submit" name="kirim" value="Kirim"></td>
			</tr>
		</table>
	</form>

	<?php
	$subjek = ucwords(@$_POST['subjek']);
	$info = @$_POST['info'];

	$kirim = @$_POST['kirim'];

	if($kirim){
		if($subjek == "" || $info == ""){
			?>
			<script type="text/javascript"> alert("Jangan Dikirim Kalau Kosong"); </script>

			<?php
		}else{
			mysqli_query($conn, "INSERT INTO t_linfo VALUES('', '$subjek', '$info', NULL) ");
			?>
			<script type="text/javascript"> alert("Info Sudah Dikirim"); window.location.href="beranda.php"; </script>

			<?php
		}
	}

	?>

</fieldset>