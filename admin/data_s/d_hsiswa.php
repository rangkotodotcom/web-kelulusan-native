<?php
include 'conn.php';

?>

<?php

$kd = @$_GET['nisn'];

mysqli_query($conn, "DELETE FROM t_ld_siswa WHERE nisn = '$kd' ");

?>

<script type="text/javascript">
	window.location.href="?page=d_siswa";
</script>