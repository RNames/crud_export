<?php
require('FPDF/fpdf.php'); // Mengimpor pustaka FPDF

include 'connection.php';

// check apakah tombol export sudah ditekan
if(isset($_POST["export"]))  
{  
    // Membuat objek PDF dengan ukuran halaman A4
    $pdf = new FPDF();
    $pdf->AddPage();
    
    // Menambahkan judul ke PDF
    $pdf->SetFont('Arial', 'B', 16);
    $pdf->Cell(0, 10, 'Data Siswa', 0, 1, 'C');
    
    // Mengatur header tabel
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(25, 10, 'NIK', 1);
    $pdf->Cell(60, 10, 'Nama', 1);
    $pdf->Cell(15, 10, 'Kelas', 1);
    $pdf->Cell(40, 10, 'Jurusan', 1);
    $pdf->Cell(50, 10, 'Email', 1);
    $pdf->Ln(); // Pindah ke baris berikutnya
    
    // Mengambil data dari database
    $query = "SELECT * from `data_siswa`";  
    $result = mysqli_query($conn, $query);  
    
    while($row = mysqli_fetch_assoc($result))  
    {  
        // Menambahkan data ke tabel dalam PDF
        $pdf->Cell(25, 10, $row['nik'], 1);
        $pdf->Cell(60, 10, $row['nama'], 1);
        $pdf->Cell(15, 10, $row['kelas'], 1);
        $pdf->Cell(40, 10, $row['jurusan'], 1);
        $pdf->Cell(50, 10, $row['email'], 1);
        $pdf->Ln(); // Pindah ke baris berikutnya
    }  
    
    // Output file PDF ke browser
    $pdf->Output('data_siswa.pdf', 'D'); // 'D' akan men-download file PDF ke browser
}
?>
