<?php
include_once("db/koneksi.php");
?>

<?php include("partials/header.php"); ?>
<div class="min-h-screen items-center bg-slate-100">
    <div class=" flex justify-center pt-10">
        <img src="./img/success.png" />
    </div>
    <div class="text-center flex flex-col items-center justify-center pb-5">
        <button type="submit" class="w-52 bg-cyan-900 p-2 rounded-xl text-white py-2 hover:scale-105 duration-300"><a href="user_dashboard.php">Kembali ke Beranda</a></button>

    </div>
    <div class="text-center flex flex-col items-center justify-center">
        <button type="submit" class="w-52 bg-cyan-700 p-2 rounded-xl text-white py-2 hover:scale-105 duration-300"><a href="user_history.php">Lihat Riwayat Reservasi </a></button>

    </div>

</div>