<?php
include_once("db/koneksi.php");

$query = "SELECT * FROM poli";
$result = mysqli_query($conn, $query);
$poliData = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<?php include("partials/header.php"); ?>
<?php include("partials/navbar.php"); ?>

<div class="items-center min-h-screen p-7 pt-36 ">
    <div class="text-center pb-10">
        <h1 class="sm:text-3xl text-2xl md:leading-normal leading-10 text-slate-600 font-bold">
            Layanan Poli Kesehatan
        </h1>
    </div>
    <div class="px-10 pb-4">
        <h2 class="text-cyan-600 text-lg font-semibold">Spesialisasi Medis
        </h2>
        <p class="text-sm text-slate-400">Berbagai pilihan spesialiasi dokter</p>
    </div>
    <div class="flex justify-center px-10 pb-10">
        <div class="grid  sm:grid-cols-2 md:grid-cols-3 gap-6 mx-auto justify-center w-full">
            <?php foreach ($poliData as $poli) : ?>
                <div class="max-w-sm bg-slate-100  rounded-lg ">
                    <a href="#">
                        <div class="flex justify-center items-center pt-6">
                            <?php
                            $gambar = base64_encode($poli['gambar']);
                            ?>
                            <img class="rounded-t-lg  w-12" src="data:image/jpeg;base64,<?php echo $gambar; ?>" alt="" />
                        </div>
                    </a>
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl text-center font-bold tracking-tight text-gray-900 text-base"><?php echo $poli['nama']; ?></h5>
                        <p class="mb-3 text-xs text-justify text-gray-700"><?php echo $poli['deskripsi']; ?></p>
                        <!-- <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Read more
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a> -->
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php include("partials/footer.php"); ?>