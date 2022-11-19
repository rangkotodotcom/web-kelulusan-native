<fieldset>
	<legend>Kelulusan</legend>

	
	<button onclick="lihat()" style="width: 200px; height: 50px; cursor: pointer; font-size: 30px;" >Lihat Hasil</button>
	<div id="hasil"></div>

	<script>

		function lihat() {
			document.getElementById("hasil").innerHTML = "<div style='margin:50px 0; padding:20px 0; font-size:20px; border:2px solid; background-color:#faebd7; border-radius:20px;'><h1 align='center'>Selamat Anda <span style='color:#b22222; font-size:60px;'>LULUS</span> Dari Sekolah Menengah Atas Negeri 1 2x11 Enam Lingkung.<br> Silahkan Cek Data Diri Anda Pada Menu Data Diri di Atas<br> Silahkan Cetak Surat Keterangan Kelulusan Pada Menu Nilai UN di Atas.</h1></div>";
		}
	</script>

</fieldset>