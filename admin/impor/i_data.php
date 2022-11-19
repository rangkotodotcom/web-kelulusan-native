<fieldset>
    <legend>Import Data Siswa</legend>
                
        <!-- Content -->
        <div style="padding: 0 15px;">
                        
            <!-- Buat sebuah tag form dan arahkan action nya ke file ini lagi -->
            <form method="post" action="" enctype="multipart/form-data">
                <button style="width:130px; height:25px; "><a style="text-decoration: none; color: black;" href="admin/impor/f_data.xlsx">
                    Download Format
                </a></button><br><br>
                
                <!-- 
                -- Buat sebuah input type file
                -- class pull-left berfungsi agar file input berada di sebelah kiri
                -->
                <input type="file" name="file">
                
                <button style="width:100px; height:25px; cursor:pointer;" type="submit" name="preview">
                    Preview
                </button><br>

                Pastikan Data Sudah Lengkap Sebelum di Impor.

            </form><br><br>
            
            
            <!-- Buat Preview Data -->
            <?php
            // Jika user telah mengklik tombol Preview
            if(isset($_POST['preview'])){
                    //$ip = ; // Ambil IP Address dari User
                    $nama_file_baru = 'data.xlsx';
                    
                    // Cek apakah terdapat file data.xlsx pada folder tmp
                    if(is_file('admin/impor/tmp/'.$nama_file_baru)) // Jika file tersebut ada
                        unlink('admin/impor/tmp/'.$nama_file_baru); // Hapus file tersebut
                    
                    $tipe_file = $_FILES['file']['type']; // Ambil tipe file yang akan diupload
                    $tmp_file = $_FILES['file']['tmp_name'];
                    
                    // Cek apakah file yang diupload adalah file Excel 2007 (.xlsx)
                    if($tipe_file == "application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){
                            move_uploaded_file($tmp_file, 'admin/impor/tmp/'.$nama_file_baru);
                            
                            // Load librari PHPExcel nya
                            require_once 'PHPExcel/PHPExcel.php';
                            
                            $excelreader = new PHPExcel_Reader_Excel2007();
                            $loadexcel = $excelreader->load('admin/impor/tmp/'.$nama_file_baru); // Load file yang tadi diupload ke folder tmp
                            $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
                            
                            // Buat sebuah tag form untuk proses import data ke database
                            echo "<form method='post' action='admin/impor/impor_d.php'>";
                            
                            echo "<table width='100%' border='2px' style='border:1px solid #000; border:border-collapse;'>
                            <tr style='background-color:#fc0' >
                                <th colspan='8' class='text-center'>Preview Data</th>
                            </tr>
                            <tr style='background-color:#fc0'>
                                <th>Nama</th>
                                <th>T Lahir</th>
                                <th>Tanggal L</th>
                                <th>Nama Ortu</th>
                                <th>NIS</th>
                                <th>NISN</th>
                                <th>No Peserta</th>
                                <th>Foto</th>
                            </tr>";
                            
                            $numrow = 1;
                            $kosong = 0;
                                foreach($sheet as $row){ // Lakukan perulangan dari data yang ada di excel
                                    // Ambil data pada excel sesuai Kolom
                                    $nama = $row['A']; // Ambil data Nama
                                    $t_lahir = $row['B']; // Ambil data User
                                    $tgl_lhr = $row['C']; // Ambil data Pass
                                    $n_ortu = $row['D']; // Ambil data Status
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
                                        // Validasi apakah semua data telah diisi
                                            $nama_td = ( ! empty($nama))? "" : " style='background: red;'"; // Jika NIS kosong, beri warna merah
                                            $t_lahir_td = ( ! empty($t_lahir))? "" : " style='background: red;'"; // Jika Nama kosong, beri warna merah
                                            $tgl_lhr_td = ( ! empty($tgl_lhr))? "" : " style='background: red;'"; // Jika Jenis Kelamin kosong, beri warna merah
                                            $n_ortu_td = ( ! empty($n_ortu))? "" : " style='background: red;'"; // Jika Telepon kosong, beri warna merah
                                            $nis_td = ( ! empty($nis))? "" : " style='background: red;'"; // Jika Alamat kosong, beri warna merah
                                            $nisn_td = ( ! empty($nisn))? "" : " style='background: red;'"; // Jika Alamat kosong, beri warna merah
                                            $no_pes_td = ( ! empty($no_pes))? "" : " style='background: red;'"; // Jika Alamat kosong, beri warna merah
                                            $foto_td = ( ! empty($foto))? "" : " style='background: red;'"; // Jika Alamat kosong, beri warna merah
                                            
                                            // Jika salah satu data ada yang kosong
                                                if(empty($nama) or empty($t_lahir) or empty($tgl_lhr) or empty($n_ortu) or empty($nis) or empty($nisn) or empty($no_pes) or empty($foto)){
                                                    $kosong++; // Tambah 1 variabel $kosong
                                                }
                                            
                                            echo "<tr>";
                                            echo "<td".$nama_td.">".$nama."</td>";
                                            echo "<td".$t_lahir_td.">".$t_lahir."</td>";
                                            echo "<td".$tgl_lhr_td.">".$tgl_lhr."</td>";
                                            echo "<td".$n_ortu_td.">".$n_ortu."</td>";
                                            echo "<td".$nis_td.">".$nis."</td>";
                                            echo "<td".$nisn_td.">".$nisn."</td>";
                                            echo "<td".$no_pes_td.">".$no_pes."</td>";
                                            echo "<td".$foto_td.">".$foto."</td>";
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
                                }else{ // Jika semua data sudah diisi
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
                                document.location.href = '?page=i_data';

                            </script>
                        
                        ";
                    }
            }
            ?>
        </div>



</fieldset>