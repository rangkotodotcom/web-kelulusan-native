<?php

require_once __DIR__ . '/vendor/autoload.php';
include 'conn.php';
$sql = mysqli_query($conn, "SELECT * FROM t_luser WHERE level = 'siswa' ");



$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P', 'margin_left' => 25, 'margin_right' =>25]);

$html = '<!DOCTYPE html>
<html>
<head>
	<title>Surat Keterangan Lulus</title>
</head>
<body>
	<div class="header">
		<center>
			<table style="text-align:center; width:100%; border-bottom:1px solid;">
				<tr>
					<td align="center"><img src="img/tetap/prov.png" width="70"/></td>
					<td style="font-size:16px;">
					PEMERINTAH PROVINSI SUMATERA BARAT<br>
					<span style="font-size:14px;">DINAS PENDIDIKAN</span><br>
					<span style="font-size:18x;">SMAN 1 2x11 ENAM LINGKUNG</span><br>
					KABUPATEN PADANG PARIAMAN<br>
					</td>
					<td align="center"><img src="img/tetap/pdd.png" width="80"/></td>
				</tr>
				<tr>
					<td colspan="3" style="font-size:10px; text-align:justify;">Alamat : jl. Bari Sicincin   Telp : 0751-675129   E-mail : smansa2x11el@gmail.com   Website : sman12x11el.sch.id   Kode Pos : 25584 </td>
				</tr>
			</table>
			

		</center>

	</div>

	<div class="content">

		<h3 style="text-align:center;"><u>Daftar User Kelulusan Siswa</u></h3><br>

		<table width="100%" cellspacing="0" cellpadding="0" border="1" style="text-align:center; border:2px solid;">
			<tr style="background-color:#fc0;">
				<th>No</th>
				<th>Nama</th>
				<th>Username</th>
				<th>Password</th>
			</tr>';

			$i=1;
			while($data = mysqli_fetch_array($sql)) {
			
			$html.= '<tr>
						<td>'. $i++ .'</td>
						<td>'. $data["nama"] .'</td>
						<td>'. $data["user"] .'</td>
						<td>'. $data["pass"] .'</td>
						
					</tr>';

			}

		$html.= ' </table><br><br>

	</div>
	<div class="footer">
		<table style="text-align:center; width:100%; ">
			<tr>
				<th align="right" style="padding-right:80px;"><img src="img/tetap/prov.png" width="130" /> </th>
			</tr>
		</table>
	</div>

</body>
</html>
';

$mpdf->WriteHTML($html);
$mpdf->Output('Daftar User.pdf', 'I');

?>