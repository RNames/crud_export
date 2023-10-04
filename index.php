<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Data</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .table {
            width: 80%;
            margin: 20px auto;
            text-align: center;
        }

        h1 {
            text-align: center;
        }

        .option {
        display: flex;
        justify-content: space-between;
        }

        .option > button {
        margin-right: 5px;
        }

  </style>
</head>
<body>
 
    <h1>DATA SISWA</h1>
    <form method="post" action="export_file.php" align="center">  
        <input type="submit" name="export" value="Unduh file ke CSV" class="btn btn-success" />  
    </form>  
    <form method="post" action="export_pdf.php" align="center">  
        <input type="submit" name="export" value="Unduh file ke PDF" class="btn btn-danger" />  
    </form>     
  

    <table class="table table-striped table-hover table-bordered" border=1>
        <tr>
            <th>NOMOR</th>
            <th>NIK</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>JURUSAN</th>
            <th>EMAIL</th>
            <th>OPTION</th>
        </tr>
<?php 
    //pemanggilan database
    include 'connection.php';

    //digunakan untuk mengisi bagian nomer
    $no = 1;

    //menampilkan database dengan perulangan 
    $query = "SELECT * FROM `data_siswa`";
    $data = mysqli_query($conn, $query);
    while ($d = mysqli_fetch_array($data)) { 

?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $d['nik']; ?></td>
            <td><?= $d['nama']; ?></td>
            <td><?= $d['kelas']; ?></td>
            <td><?= $d['jurusan']; ?></td>
            <td><?= $d['email']; ?></td>
            <td>
                <div class="option">
                    <a href="delete.php?id=<?= $d['id']?>"><button type="button" class="btn btn-danger">Delete</button></a>
                    <a href="edit.php?id=<?= $d['id']?>"><button type="button" class="btn btn-warning">Edit</button></a>
                </div>
            </td>
        </tr>
<?php } ?>
    </table>


<div class="d-grid gap-2 d-md-flex justify-content-md-end">
   <a href="tambah.php"><button class="btn btn-primary me-md-2" type="button">Tambah data</button></a>
</div>
</body>
</html>