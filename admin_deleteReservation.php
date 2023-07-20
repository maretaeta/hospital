<?php
session_start();

include_once("db/koneksi.php");

if (isset($_GET['reservasi_id']) && is_numeric($_GET['reservasi_id'])) {
    $reservasi_id = $_GET['reservasi_id'];

    $query = "DELETE FROM reservasi WHERE reservasi_id = $reservasi_id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: admin_listReservasi.php");
        exit;
    } else {
        echo "Failed to delete the reservation.";
    }
} else {
    header("Location: admin_listReservasi.php");
    exit;
}

mysqli_close($conn);
