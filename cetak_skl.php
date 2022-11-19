<?php

require_once __DIR__ . '/vendor/autoload.php';
include 'conn.php';
$kd = @$_GET['user'];
$sql = mysqli_query($conn, "SELECT * FROM t_ld_siswa WHERE no_pes = '$kd' ");
$sql1 = mysqli_query($conn, "SELECT * FROM t_ln_siswa WHERE no_pes = '$kd' ");
$data = mysqli_fetch_array($sql);
$data1 = mysqli_fetch_array($sql1);

$bin = $data1['bin'];
$bing = $data1['bing'];
$mat = $data1['mat'];
$pil = $data1['pil'];
$ket = $data1['ket'];

$total = $bin + $bing + $mat + $pil ;
$rata_rata = $total/ 4 ;


$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P', 'margin_left' => 25, 'margin_right' =>25]);

$html = '<!DOCTYPE html>
<html>
<head>
	<title>Surat Keterangan Lulus</title>
</head>
<body>
	<div class="header">
		<center>
			<table style="text-align:center; width:100%; border-bottom:2px solid;">
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
		<h4 align="center"><u><b>SURAT KETERANGAN KELULUSAN</b></u><br><span style="font-size:12px;">NOMOR:543/765/SMAN.1-2x11 EL/2018</span></h4>
		<p style="font-size:13px;">Yang bertanda tangan dibawah ini, Kepala Sekolah Menengah Atas Negeri 1 2x11 Enam Lingkung Kabupaten Padang Pariaman:
			<table style="font-size:13px;">
				<tr>
					<td>Nomor Pokok Sekolah Nasional</td>
					<td> : </td>
					<td>10305549</td>
				</tr>
				<tr>
					<td>Kabupaten/<s>Kota</s></td>
					<td> : </td>
					<td>Padang Pariaman</td>
				</tr>
				<tr>
					<td>Provinsi</td>
					<td> : </td>
					<td>Sumatera Barat</td>
				</tr>
				<tr>
					<td>      </td>
				</tr>
				<tr>
					<td>      </td>
				</tr>
				<tr>
					<td colspan="3">Menerangkan Bahwa</td>
				</tr>
				<tr>
					<td>      </td>
				</tr>
				<tr>
					<td>      </td>
				</tr>
				<tr>
					<td>Nama</td>
					<td> : </td>';
					$html .=' 
					<td>'. $data["nama"] .'</td>
				</tr>
				<tr>
					<td>Tempat dan Tanggal Lahir</td>
					<td> : </td>';
					$html .=' 
					<td>'. $data["t_lahir"] .','.'  '. $data["tgl_lhr"] .'</td>
				</tr>
				<tr>
					<td>Nama Orang Tua/Wali</td>
					<td> : </td>';
					$html .=' 
					<td>'. $data["n_ortu"] .'</td>
				</tr>
				<tr>
					<td>Nomor Induk Siswa</td>
					<td> : </td>';
					$html .=' 
					<td>'. $data["nis"] .'</td>
				</tr>
				<tr>
					<td>Nomor Induk Siswa Nasional</td>
					<td> : </td>';
					$html .=' 
					<td>'. $data["nisn"] .'</td>
				</tr>
				<tr>
					<td>Nomor Peserta Ujian</td>
					<td> : </td>';
					$html .=' 
					<td>'. $data["no_pes"] .'</td>
				</tr>
				<tr>
					<td>Sekolah Penyelenggara Ujian Sekolah</td>
					<td> : </td>
					<td>SMAN 1 2x11 Enam Lingkung</td>
				</tr>
				<tr>
					<td>Sekolah Penyelenggara Ujian Nasional</td>
					<td> : </td>
					<td>SMAN 1 2x11 Enam Lingkung</td>
				</tr>
				<tr>
					<td>      </td>
				</tr>
				<tr>
					<td colspan="3">Nama yang tersebut diatas dinyatakan : </td>
				</tr>

			</table>

			<p align="center" style="font-size:25px;">'; $html .='<b>'. $ket .'</b>
			<p style="font-size:13px;">Dari Sekolah Menengah Atas setelah memenuhi seluruh kriteria sesuai dengan peraturan perundang-undangan dengan nilai sebagai berikut:

			<table width="100%" cellspacing="0" cellpadding="0" border="1" style="text-align:center; border:2px solid;">
				<tr>
					<th>Bahasa Indonesia</th>
					<th>Bahasa Inggris</th>
					<th>Matematika</th>
					<th>Pilihan</th>
					<th>Jumlah</th>
				</tr>';
						$html .='<tr>
						<td>'. $data1["bin"] .'</td>
						<td>'. $data1["bing"] .'</td>
						<td>'. $data1["mat"] .'</td>
						<td>'. $data1["pil"] .'</td>
						<td>'.  $total .'</td>
					</tr>
					<tr>
						<td colspan="4">Rata-Rata</td>
						<td>'. $rata_rata .'</td>
					</tr>';

$html .= '</table>

			<p style="font-size:13px;">Surat Keterangan ini berlaku sampai keluarnya ijazah/STTB di terbitkan.<br>
			Demikian Surat Keterangan ini diberikan agar di pergunakan sebagaimana mestinya.<br><br><br>
	</div>

	<div class="footer">
		<table style="text-align:center; width:100%; ">
			<tr>';
			$html .=' 
				<td align="left" style="padding-left:40px;"><img src="img/siswa/'. $data["foto"] .'" width="110" /> </td>
				<td align="left" style="padding-left:200px;">
					<p>Sicincin, 22 September 2018<br>Kepala Sekolah,</p><br><br><br><br>
					<p><b>SRI ASTUTI, S.Pd, M.M.</b><br>NIP. 19620414 198703 2 008</p>
				</td>
			</tr>
		</table>
	</div>

</body>
</html>
';

$mpdf->WriteHTML($html);
$mpdf->Output('SKL.pdf', 'I');

?>