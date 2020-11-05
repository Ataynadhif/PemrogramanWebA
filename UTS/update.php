<?php
require 'functions.php';
// ambil data diurl
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$brg = query("SELECT * FROM barang WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan apa belum
if (isset($_POST["submit"])) {

    //cek apakah data berhasil diubah atau tidak
    if (ubah($_POST) > 0) {
        echo "
        <script>    
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah!');
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
    <title>Update data barang</title>
    <link href='https://fonts.googleapis.com/css?family=Chilanka' rel='stylesheet'>
    <link rel="stylesheet" href="style1.css">
</head>

<body>

    <div class="container">
        <h1>Update Data Barang</h1>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo $brg["id"]; ?>">
            <ul>
                <li>
                    <label for="sku">SKU : </label>
                    <input type="text" name="sku" id="sku" value="<?php echo $brg["sku"]; ?>">
                </li>
                <li>
                    <label for="nama">Nama : </label>
                    <input type="text" name="nama" id="nama" value="<?php echo $brg["nama"]; ?>">
                </li>
                <li>
                    <label for="kategori">Kategori : </label>
                    <input type="text" name="kategori" id="kategori" value="<?php echo $brg["kategori"]; ?>">
                </li>
                <li>
                    <label for="stok">Stok Barang : </label>
                    <input type="text" name="stok" id="stok" value="<?php echo $brg["stok"]; ?>">
                </li>
                <li>
                    <label for="harga">Harga : </label>
                    <input type="text" name="harga" id="harga" value="<?php echo $brg["harga"]; ?>">
                </li>

                <li>
                    <button type="submit" name="submit">Update Data!</button>
                </li>
            </ul>

        </form>
    </div>
</body>

</html>