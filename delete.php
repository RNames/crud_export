<?php 
    //connect database  
    include 'connection.php';

    //menangkap data yg dikirim dari URL 
    $id = $_GET['id'];

    //query untuk menghapus data dengan id 
    $query = "DELETE FROM `data_siswa` WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    //mengalihkan halaman langsung ke index.php
    header("Location: index.php");
?>