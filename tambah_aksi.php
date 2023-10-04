<?php 
    //menghubungkan ke database
    include 'connection.php';

    //inisialisasi data 
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];
    
     //memastikan bahwa tipe data `nik` adalah `integer`
     if(!is_numeric($nik)) {
        die("NIK harus berupa angka!");
    }

    /*memerika apakah data sudah ada dengan nik
    $query = "SELECT * FROM siswa WHERE nik = '$nik'";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) > 0) {
        die("data sudah ada");
    } */

    //menginput data ke database 
    $query = "INSERT INTO `data_siswa`(`nik`,`nama`, `kelas`,`jurusan`, `hobi`,`email`) values ('$nik','$nama','$kelas','$jurusan','$email')";
    $result = mysqli_query($conn, $query);
    
    //mengalihkann ke halaman utama
    header("Location:index.php");
?>