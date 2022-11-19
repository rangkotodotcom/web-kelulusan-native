<?php
include 'conn.php';



$kd = @$_GET['nama'];

mysqli_query($conn, "DELETE FROM t_luser WHERE nama = '$kd' ");

?>

<script type="text/javascript">
	window.location.href="?page=d_user";
</script>