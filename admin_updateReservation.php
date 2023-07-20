<?php
session_start();

include_once("db/koneksi.php");

if (isset($_POST['reservation_id']) && is_numeric($_POST['reservation_id'])) {
    $reservation_id = $_POST['reservation_id'];

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $usia = $_POST['usia'];
    $layanan = $_POST['layanan'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];

    $query = "UPDATE reservasi SET nama='$nama', alamat='$alamat', usia='$usia', layanan='$layanan', tanggal='$tanggal', waktu='$waktu' WHERE reservasi_id = $reservation_id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "success";
    } else {
        echo "error";
    }
} else {
    echo "error";
}

mysqli_close($conn);
