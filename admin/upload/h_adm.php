<?php
include 'conn.php';



$kd = @$_GET['nama'];

mysqli_query($conn, "DELETE FROM t_adm WHERE nama = '$kd' ");

?>

<script type="text/javascript">
	window.location.href="?page=b_adm";
</script>