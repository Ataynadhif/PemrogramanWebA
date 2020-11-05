<?php
require 'functions.php';
$brg = query("SELECT * FROM barang");

// tombol cari ditekan
if (isset($_POST["cari"])) {
    $brg = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Market</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Cherry Swash' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Chilanka' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="item header">
            <h1>Toko Pak Adi</h1>
        </div>
        <div class="item sidebar">
            <h1>Barokah Minimarket</h1>
            <ul>
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="">Dashboard</a></li>
                <li><i class="fa fa-plus-circle" aria-hidden="true"></i><a href="add.php">Tambah Data</a></li>
            </ul>
        </div>
        <div class="item content">
            <h2>Data Barang</h2>
            <form action="" method="post">
                <input type="text" name="keyword" size="30" autofocus placeholder="masukkan keywoard..." autocomplete="off">
                <button type="submit" name="cari">Cari</button>
            </form>
            <table>
                <tr>
                    <th>No.</th>
                    <th>SKU</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Stok Barang</th>
                    <th>Harga</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php $i = 1; ?>
                <?php foreach ($brg as $row) : ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row["sku"]; ?></td>
                        <td><?php echo $row["nama"]; ?></td>
                        <td><?php echo $row["kategori"]; ?></td>
                        <td><?php echo $row["stok"]; ?></td>
                        <td><?php echo $row["harga"]; ?></td>
                        <td class="des a"><a href="update.php?id=<?php echo $row["id"]; ?>">Ubah</a></td>
                        <td class="des b"><a href="delete.php?id=<?php echo $row["id"]; ?>">Hapus</a></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </table>
        </div>
    </div>

</body>

</html>