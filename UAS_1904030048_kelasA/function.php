<?php
$conn = mysqli_connect('localhost', 'root', '', 'uas_1904030048');

// Pemanggilan Tabel db_buku
function query($query)
{
    global $conn;

    // Mengambil Seluruh Data
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    // Pemanggilan Elemen Data Dengan Rapih
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;

    $kd_buku = htmlspecialchars($data['kd_buku']);
    $judul_buku = htmlspecialchars($data['judul_buku']);
    $harga_buku = htmlspecialchars($data['harga_buku']);
    $stok_buku = htmlspecialchars($data['stok_buku']);
    $gambar_buku = htmlspecialchars($data['gambar_buku']);

    $query = "INSERT INTO db_tokobuku
    VALUES
    (null,'$kd_buku','$judul_buku','$harga_buku','$stok_buku','$gambar_buku');";
    mysqli_query($conn, $query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM db_tokobuku WHERE id=$id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function edit($data)
{
    global $conn;

    $id = $data['id'];
    $kd_buku = htmlspecialchars($data['kd_buku']);
    $judul_buku = htmlspecialchars($data['judul_buku']);
    $harga_buku = htmlspecialchars($data['harga_buku']);
    $stok_buku = htmlspecialchars($data['stok_buku']);
    $gambar_buku = htmlspecialchars($data['gambar_buku']);

    $query = "UPDATE db_tokobuku SET
    kd_buku ='$kd_buku',
    judul_buku ='$judul_buku',
    harga_buku ='$harga_buku',
    stok_buku ='$stok_buku',
    gambar_buku ='$gambar_buku'

    WHERE id =$id;";

    mysqli_query($conn, $query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    global $conn;

    $query = "SELECT * FROM db_tokobuku WHERE judul_buku LIKE'%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Tabel db_pelanggan

function search($keyword)
{
    global $conn;

    $query = "SELECT * FROM db_pelanggan WHERE nama_pelanggan LIKE'%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function delete($iid)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM db_pelanggan WHERE id =$iid") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}