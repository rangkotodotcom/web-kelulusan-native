<?php
include 'conn.php';

$kd = @$_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM t_linfo WHERE id = '$kd' ");
$data = mysqli_fetch_array($sql);

?>
<fieldset>
	<legend>Tulis Pengumuman</legend>

	<form action="" method="post">
		<table>
			<tr>
				<td><input type="text" name="subjek" value="<?= $data['subjek']; ?>"></td>
			</tr>
			<tr>
				<td><textarea style="height: 100px; width: 900px;" name="info"><?= $data['info']; ?></textarea></td>
			</tr>
			<tr>
				<td><input style="cursor: pointer;" type="submit" name="edit" value="Simpan"></td>
			</tr>
		</table>
	</form>

	<?php
	$subjek = ucwords(@$_POST['subjek']);
	$info = @$_POST['info'];

	$edit = @$_POST['edit'];

	if($edit){
		if($subjek == "" || $info == ""){
			?>
			<script type="text/javascript"> alert("Jangan Dikirim Kalau Kosong"); </script>

			<?php
		}else{
			mysqli_query($conn, "UPDATE t_linfo SET subjek = '$subjek', info = '$info', tanggal = NULL WHERE id = '$kd' ");
			?>
			<script type="text/javascript"> alert("Info Sudah Di Update"); window.location.href="beranda.php"; </script>

			<?php
		}
	}

	?>

</fieldset>