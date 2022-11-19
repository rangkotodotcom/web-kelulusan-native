<?php
include 'conn.php';

	session_start();

	mysqli_query($conn, "DELETE FROM t_online WHERE user = '$_SESSION[user]' ");

	session_unset();
	session_destroy();
?>
<script type="text/javascript"> 
	alert("Anda sudah keluar. Terima Kasih sudah berkunjung"); window.location.href="index.php"; 
</script>