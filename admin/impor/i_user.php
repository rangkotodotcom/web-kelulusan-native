<fieldset>
	<legend>Import User</legend>
				
		<!-- Content -->
		<div style="padding: 0 15px;">
						
			<!-- Buat sebuah tag form dan arahkan action nya ke file ini lagi -->
			<form method="post" action="" enctype="multipart/form-data">
				<button style="width:130px; height:25px; "><a style="text-decoration: none; color: black;" href="admin/impor/f_user.xlsx">
					Download Format
				</a></button><br><br>
				
				<!-- 
				-- Buat sebuah input type file
				-- class pull-left berfungsi agar file input berada di sebelah kiri
				-->
				<input type="file" name="file">
				
				<button style="cursor: pointer; width:100px; height:25px;" type="submit" name="preview">
					Preview
				</button><br>

                Pastikan Data Sudah Lengkap Sebelum di Impor.

			</form><br><br>
			
			
			<!-- Buat Preview Data -->
			<?php
			// Jika user telah mengklik tombol Preview
			if(isset($_POST['preview'])){
				//$ip = ; // Ambil IP Address dari User
				$nama_file_baru = 'user.xlsx';
				
				// Cek apakah terdapat file data.xlsx pada folder tmp
				if(is_file('admin/impor/tmp/'.$nama_file_baru)) // Jika file tersebut ada
					unlink('admin/impor/tmp/'.$nama_file_baru); // Hapus file tersebut
				
				$tipe_file = $_FILES['file']['type']; // Ambil tipe file yang akan diupload
				$tmp_file = $_FILES['file']['tmp_name'];
				
				// Cek apakah file yang diupload adalah file Excel 2007 (.xlsx)
				if($tipe_file == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){
					// Upload file yang dipilih ke folder tmp
					// dan rename file tersebut menjadi data{ip_address}.xlsx
					// {ip_address} diganti jadi ip address user yang ada di variabel $ip
					// Contoh nama file setelah di rename : data127.0.0.1.xlsx
					move_uploaded_file($tmp_file, 'admin/impor/tmp/'.$nama_file_baru);
					
					// Load librari PHPExcel nya
					require_once 'PHPExcel/PHPExcel.php';
					
					$excelreader = new PHPExcel_Reader_Excel2007();
					$loadexcel = $excelreader->load('admin/impor/tmp/'.$nama_file_baru); // Load file yang tadi diupload ke folder tmp
					$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
					
					// Buat sebuah tag form untuk proses import data ke database
					echo "<form method='post' action='admin/impor/impor_u.php'>";
					
					echo "<table width='100%' border='2px' style='border:1px solid #000; border:border-collapse;'>
					<tr style='background-color:#fc0' >
						<th colspan='5' class='text-center'>Preview Data</th>
					</tr>
					<tr style='background-color:#fc0'>
						<th>Nama</th>
						<th>Username</th>
						<th>Pass</th>
						<th>Status</th>
						<th>Level</th>
					</tr>";
					
					$numrow = 1;
					$kosong = 0;
					foreach($sheet as $row){ // Lakukan perulangan dari data yang ada di excel
						// Ambil data pada excel sesuai Kolom
						$nama = $row['A']; // Ambil data Nama
						$user = $row['B']; // Ambil data User
						$pass = $row['C']; // Ambil data Pass
						$status = $row['D']; // Ambil data Status
						$level = $row['E']; // Ambil data Level
						
						// Cek jika semua data tidak diisi
						if(empty($nama) && empty($pass) && empty($pass) && empty($level) && empty($status))
							continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
						
						// Cek $numrow apakah lebih dari 1
						// Artinya karena baris pertama adalah nama-nama kolom
						// Jadi dilewat saja, tidak usah diimport
						if($numrow > 1){
							// Validasi apakah semua data telah diisi
							$nama_td = ( ! empty($nama))? "" : " style='background: red;'"; // Jika NIS kosong, beri warna merah
							$user_td = ( ! empty($user))? "" : " style='background: red;'"; // Jika Nama kosong, beri warna merah
							$pass_td = ( ! empty($pass))? "" : " style='background: red;'"; // Jika Jenis Kelamin kosong, beri warna merah
							$status_td = ( ! empty($status))? "" : " style='background: red;'"; // Jika Telepon kosong, beri warna merah
							$level_td = ( ! empty($level))? "" : " style='background: red;'"; // Jika Alamat kosong, beri warna merah
							
							// Jika salah satu data ada yang kosong
							if(empty($nama) or empty($pass) or empty($pass) or empty($status) or empty($level)){
								$kosong++; // Tambah 1 variabel $kosong
							}
							
							echo "<tr>";
							echo "<td".$nama_td.">".$nama."</td>";
							echo "<td".$user_td.">".$user."</td>";
							echo "<td".$pass_td.">".$pass."</td>";
							echo "<td".$status_td.">".$status."</td>";
							echo "<td".$level_td.">".$level."</td>";
							echo "</tr>";
						}
						
						$numrow++; // Tambah 1 setiap kali looping
					}
					
					echo "</table>";
					
					// Cek apakah variabel kosong lebih dari 1
					// Jika lebih dari 1, berarti ada data yang masih kosong
					if($kosong > 1){
					?>	
						<script>
						$(document).ready(function(){
							// Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
							$("#jumlah_kosong").html('<?php echo $kosong; ?>');
							
							$("#kosong").show(); // Munculkan alert validasi kosong
						});
						</script>
					<?php
					}else{ 
						echo "<br>";

                        echo "<input type=checkbox name='drop' value='1' /> <b> Kosongkan Data Terlebih Dahulu </b> ";

                        echo "<br><br>";
						
						// Buat sebuah tombol untuk mengimport data ke database
						echo "<button style='width:100px; height:25px; cursor:pointer;' type='submit' name='import'> Import</button>";
					}
					
					echo "</form>";
				}else{ // Jika file yang diupload bukan File Excel 2007 (.xlsx)
					// Munculkan pesan validasi
					echo "
						<script>
							alert('Hanya File excel 2007 (.xlsx) yang Diperbolehkan');
							document.location.href = '?page=i_user';

						</script>
					
					";
				}
			}
			?>
		</div>



</fieldset>