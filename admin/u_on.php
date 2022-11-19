<fieldset>
	<legend>User Yang Online</legend><br>

	<table width="100%" border="2px" style="border:1px solid #000; border:border-collapse;">

		<tr style="background-color:#fc0;">
			<th>No</th>
			<th>Nama</th>
			<th>User</th>
			<th>Online</th>
			<th>Login</th>
			
		</tr>

		<?php

		include 'conn.php';

		$i = 0;

		$sql = mysqli_query($conn, "SELECT * FROM t_online WHERE level = 'siswa' ");

		$cek = mysqli_num_rows($sql);

		if($cek < 1 ){
			?>
				<tr>
					<td colspan="5" align="center" style="padding: 10px;">Tidak Ada User Yang Online</td>
				</tr>
			<?php
		}else{
			while($data = mysqli_fetch_array($sql)){

				$i++;
		?>

		<tr>
			<td align="center"><?= $i; ?></td>
			<td align="center"><?= $data['nama']; ?></td>
			<td align="center"><?= $data['user']; ?></td>
			<td align="center" style="background-color: green; "><?= $data['online']; ?></td>
			<td align="center"><?= $data['login']; ?></td>
			
		</tr>

		<?php
		}
	}
	?>


	</table>	
</fieldset>