<?php
    //koneksi ke database
    include "connection.php";

    //menangkap data yang dikirim dari file edit.php
    $id = $_POST['id'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $email = $_POST['email'];

    //update data ke database
    $query = "UPDATE `data_siswa` SET nik='$nik',nama='$nama',kelas='$kelas',
            jurusan='$jurusan',email='$email' WHERE id='$id'";
    $result = mysqli_query($conn, $query);


    if ($result) {
        // Jika berhasil, arahkan kembali ke halaman index.php
        header("Location: index.php");
    } else {
        // Jika gagal, tampilkan pesan kesalahan
        echo "Update gagal: " . mysqli_error($conn);
    }
?>