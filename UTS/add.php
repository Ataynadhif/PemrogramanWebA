<?php
require 'functions.php';
// koneksi ke DBMS

// cek apakah tombol submit sudah ditekan apa belum
if (isset($_POST["submit"])) {

    //cek apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0) {
        echo "
        <script>    
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Chilanka' rel='stylesheet'>
    <link rel="stylesheet" href="style1.css">
    <title>Tambah data mahasiswa</title>
</head>

<body>
    <div class="container">
        <h1>Tambah Data Mahasiswa</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="sku">SKU : </label>
                    <input type="text" name="sku" id="sku" required>
                </li>
                <li>
                    <label for="nama">Nama : </label>
                    <input type="text" name="nama" id="nama">
                </li>
                <li>
                    <label for="kategori">Kategori : </label>
                    <input type="text" name="kategori" id="kategori">
                </li>
                <li>
                    <label for="stok">Stok Barang : </label>
                    <input type="text" name="stok" id="stok">
                </li>
                <li>
                    <label for="harga">Harga : </label>
                    <input type="text" name="harga" id="harga">
                </li>
                <li>
                    <button type="submit" name="submit">Tambah Data!</button>
                </li>
            </ul>
        </form>
    </div>

</body>

</html>