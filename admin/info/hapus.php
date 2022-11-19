<?php
include 'conn.php';

$kd = @$_GET['id'];
mysqli_query($conn, "DELETE FROM t_linfo WHERE id = '$kd' ");

?>

<script type="text/javascript">
	window.location.href="beranda.php";
</script>