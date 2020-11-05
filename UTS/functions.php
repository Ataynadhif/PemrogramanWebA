<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "toko");


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    $sku = htmlspecialchars($data["sku"]);
    $nama = htmlspecialchars($data["nama"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $stok = htmlspecialchars($data["stok"]);
    $harga = htmlspecialchars($data["harga"]);

    $query = "INSERT INTO barang VALUES ('','$sku', '$nama', '$kategori', '$stok', '$harga')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM barang Where id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $sku = htmlspecialchars($data["sku"]);
    $nama = htmlspecialchars($data["nama"]);
    $kategori = htmlspecialchars($data["kategori"]);
    $stok = htmlspecialchars($data["stok"]);
    $harga = htmlspecialchars($data["harga"]);

    $query = "UPDATE barang SET sku = '$sku', nama = '$nama',kategori = '$kategori', stok = '$stok', harga = '$harga'  WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM barang WHERE sku LIKE '%$keyword%' OR nama LIKE '%$keyword%' OR kategori LIKE '%$keyword%'";
    return query($query);
}
function makan($makanan)
{
    $jenis = 'makanan';
    $query = "SELECT * FROM barang WHERE kategori= jenis";
    return query($query);
}
