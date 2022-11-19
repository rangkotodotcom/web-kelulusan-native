<?php
// Load file koneksi.php
include "../../conn.php";

if(isset($_POST['import'])){ // Jika user mengklik tombol Import

	$drop = isset($_POST['drop']) ? $_POST['drop'] : 0 ;
	if($drop == 1 ){
		$truncate = "TRUNCATE TABLE t_ln_siswa";
		mysqli_query($conn, $truncate);
	}

	$nama_file_baru = 'nilai.xlsx';
	
	// Load librari PHPExcel nya
	require_once 'PHPExcel/PHPExcel.php';
	
	$excelreader = new PHPExcel_Reader_Excel2007();
	$loadexcel = $excelreader->load('tmp/'.$nama_file_baru); // Load file excel yang tadi diupload ke folder tmp
	$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
	
	// Buat query Insert
	$query = "INSERT INTO t_ln_siswa VALUES";
	
	$numrow = 1;
	foreach($sheet as $row){
		// Ambil data pada excel sesuai Kolom
		$nama = $row['A']; // Ambil data Nama
        $no_pes = $row['B']; // Ambil data User
        $bin = $row['C']; // Ambil data Pass
        $bing = $row['D']; // Ambil data Status
        $mat = $row['E']; // Ambil data Level
        $pil = $row['F']; // Ambil data Level 
		
		// Cek jika semua data tidak diisi
		if(empty($nama) && empty($no_pes) && empty($bin) && empty($bing) && empty($mat) && empty($pil))
			continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
		
		// Cek $numrow apakah lebih dari 1
		// Artinya karena baris pertama adalah nama-nama kolom
		// Jadi dilewat saja, tidak usah diimport
		if($numrow > 1){
			// Tambahkan value yang akan di insert ke variabel $query
			$query .= "('".$nama."','".$no_pes."','".$bin."','".$bing."','".$mat."','".$pil."'),";
		}
		
		$numrow++; // Tambah 1 setiap kali looping
	}
	
	$query = substr($query, 0, strlen($query) - 1).";";
	
	// Eksekusi $query
	$hasil = mysqli_query($conn, $query);

	if($hasil){
		echo "
				<script>
					alert('Nilai Berhasil Di import');
					window.location.href = '../../beranda.php?page=d_nilai';

				</script>

			";
	}else{
		echo "
				<script>
					alert('Nilai Gagal Di import');
					window.location.href = '../../beranda.php?page=i_nilai';

				</script>

			";
	}
}

				
?>
