<?php
include 'connection.php';

// Mengatur tipe konten header sebagai file CSV dengan UTF-8
header('Content-Type: text/csv; charset=utf-8');  

// Mengatur nama file CSV yang akan di-download
header('Content-Disposition: attachment; filename=data.csv');  

// Membuka file output dengan "php://output" untuk menulis data CSV.
$output = fopen("php://output", "w");  

// Menulis baris header ke dalam file CSV
fputcsv($output, array('NIK', 'Nama', 'Kelas', 'Jurusan', 'Email'));  

// Mengambil data dari database hanya untuk kolom yang diperlukan
$query = "SELECT nik, nama, kelas, jurusan, email from `data_siswa`";  
$result = mysqli_query($conn, $query);  

// Loop untuk menyimpan data ke dalam file CSV
while($row = mysqli_fetch_assoc($result))  
{  
    // Menulis baris ke file CSV 
    fputcsv($output, $row);  
}  

// Menutup file output setelah semua data ditulis
fclose($output);  
?>
