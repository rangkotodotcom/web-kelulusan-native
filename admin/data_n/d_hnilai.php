<?php
include 'conn.php';

?>

<?php

$kd = @$_GET['nama'];

mysqli_query($conn, "DELETE FROM t_ln_siswa WHERE nama = '$kd' ");

?>

<script type="text/javascript">
	window.location.href="?page=d_nilai";
</script>