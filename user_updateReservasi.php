<?php
include_once("db/koneksi.php");

if (isset($_POST['update_reservation'])) {
    $reservasi_id = $_POST['reservation_id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $usia = $_POST['usia'];
    $layanan = $_POST['layanan'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];

    $query = "UPDATE reservasi SET nama='$nama', alamat='$alamat', usia='$usia', layanan='$layanan', tanggal='$tanggal', waktu='$waktu' WHERE reservasi_id='$reservasi_id'";
    mysqli_query($conn, $query);

    header("Location: user_history.php");
    exit;
}
?>

 <?php include("partials/header.php"); ?>
