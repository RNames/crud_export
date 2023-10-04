<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        h1 {
            color: #333; /* Warna teks hitam */
            text-align: center;
        }

        form {
            background-color: #fff; /* Warna latar belakang putih */
            padding: 20px;
            border: 1px solid #ddd; /* Garis tepi abu-abu */
            max-width: 400px;
            margin: 0 auto;
            text-align: left;
        }

        button[type="submit"] {
            cursor: pointer;
            margin : 2px;
        }
    </style>
</head>
<body>
<form action="tambah_aksi.php" method="post">
        <h1>TAMBAH DATA SISWA</h1>

        <div class="row mb-3">
            <input type="hidden" name="id" value="<?= $d['id']; ?>">
            
            <label for="nik" class="form-label">Nik : </label>
            <input type="text" class="form-control" name="nik" id="nik" placeholder="Masukkan NIK">

            <label for="nama" class="form-label">Nama : </label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">

            <label for="kelas" class="form-label">kelas : </label>
            <input type="number" class="form-control" name="kelas" id="kelas" placeholder="Masukkan Kelas">
        
            <label for="jurusan" class="form-label">Jurusan : </label>
            <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Masukkan Jurusan">
        
            <label for="email" class="form-label">email : </label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Masukkan email">

            <button class="btn btn-primary" type="submit" value="submit">SUBMIT</button>
        </div>
    </form>
</body>
</html>