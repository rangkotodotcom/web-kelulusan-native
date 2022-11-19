<?php
// Load file koneksi.php
include "../../conn.php";

if(isset($_POST['import'])){ // Jika user mengklik tombol Import

	$drop = isset($_POST['drop']) ? $_POST['drop'] : 0 ;
	if($drop == 1 ){
		$truncate = "TRUNCATE TABLE t_ld_siswa";
		mysqli_query($conn, $truncate);
	}
	
	$nama_file_baru = 'data.xlsx';
	
	// Load librari PHPExcel nya
	require_once 'PHPExcel/PHPExcel.php';
	
	$excelreader = new PHPExcel_Reader_Excel2007();
	$loadexcel = $excelreader->load('tmp/'.$nama_file_baru); // Load file excel yang tadi diupload ke folder tmp
	$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
	
	// Buat query Insert
	$query = "INSERT INTO t_ld_siswa VALUES";
	
	$numrow = 1;
	foreach($sheet as $row){
		// Ambil data pada excel sesuai Kolom
		$nama = ucwords ($row['A']); // Ambil data Nama
        $t_lahir = ucwords ($row['B']); // Ambil data User
        $tgl_lhr = ucwords ($row['C']); // Ambil data Pass
        $n_ortu = ucwords ($row['D']); // Ambil data Status
        $nis = $row['E']; // Ambil data Level
        $nisn = $row['F']; // Ambil data Level
        $no_pes = $row['G']; // Ambil data Level
        $foto = $row['H']; // Ambil data Level
		
		// Cek jika semua data tidak diisi
		if(empty($nama) && empty($t_lahir) && empty($tgl_lhr) && empty($n_ortu) && empty($nis) && empty($nisn) && empty($no_pes) && empty($foto))
            continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
                        
		// Cek $numrow apakah lebih dari 1
		// Artinya karena baris pertama adalah nama-nama kolom
		// Jadi dilewat saja, tidak usah diimport
		if($numrow > 1){
			// Tambahkan value yang akan di insert ke variabel $query
			$query .= "('".$nama."','".$t_lahir."','".$tgl_lhr."','".$n_ortu."','".$nis."','".$nisn."','".$no_pes."','".$foto."'),";
		}
		
		$numrow++; // Tambah 1 setiap kali looping
	}
	
	$query = substr($query, 0, strlen($query) - 1).";";
	
	// Eksekusi $query
	$hasil = mysqli_query($conn, $query);

	if($hasil){
		echo "
				<script>
					alert('Data Berhasil Di import');
					window.location.href = '../../beranda.php?page=d_siswa';

				</script>

			";
	}else{
		echo "
				<script>
					alert('Data Gagal Di import');
					window.location.href = '../../beranda.php?page=i_data';

				</script>

			";
	}
}

				
?>
