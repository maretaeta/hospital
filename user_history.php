<?php
session_start();

include_once("db/koneksi.php");

$counter = 1;
$query = "SELECT * FROM reservasi";
$result = mysqli_query($conn, $query);
$reservasiData = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (isset($_POST['delete_reservation'])) {
    $reservasi_id = $_POST['reservation_id'];
    $sql = "DELETE FROM reservasi WHERE reservasi_id = '$reservasi_id'";
    if (mysqli_query($conn, $sql)) {
        header("Location: user_history.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<?php include("partials/header.php"); ?>
<?php include("partials/navbar.php"); ?>

<div class="container mx-auto p-8 items-center pt-36">
    <h3 class="text-2xl text-cyan-900 font-semibold mb-9">History Reservasi</h3>
    <?php if (empty($reservasiData)) : ?>
        <div class="flex justify-center pt-10">
            <img src="./img/404.png" />
        </div>
        <div class="text-center flex flex-col items-center justify-center pb-5 gap-5">
            <p class="font-semibold text-cyan-900 text-xl">Belum ada Reservasi</p>
            <button type="submit" class="w-52 bg-cyan-900 p-2 rounded-xl text-white py-2 hover:scale-105 duration-300"><a href="user_reservasi.php">Lakukan Reservasi</a></button>
        </div>
    <?php else : ?>
        <?php foreach ($reservasiData as $data) : ?>
            <div class="bg-white shadow rounded-lg p-6 mb-7">
                <div class="flex flex-col space-y-4 md:px-7">
                    <div class="flex items-center gap-2 justify-between">
                        <div>
                            <div class="bg-yellow-500 rounded-full w-32 text-white p-1 text-center"><?php echo $data['layanan']; ?></div>
                            <p class="text-lg font-semibold pl-3 pt-2 reservation-nama"><?php echo $data['nama']; ?></p>
                            <p class="pl-3 text-sm"><?php echo $data['usia']; ?> tahun</p>
                            <p class="pl-3 text-xs text-gray-500 pb-3 reservation-alamat"><?php echo $data['alamat']; ?></p>
                            <table>
                                <tr class="text-sm">
                                    <td class="pl-3">Tanggal Periksa</td>
                                    <td>:</td>
                                    <td class="pl-3"><?php echo $data['tanggal']; ?></td>
                                </tr>
                                <tr class="text-sm">
                                    <td class="pl-3">Jam Periksa</td>
                                    <td>:</td>
                                    <td class="pl-3"><?php echo $data['waktu']; ?></td>
                                </tr>
                            </table>
                        </div>
                        <div>
                            <form method="POST" action="" class="flex flex-col md:flex-row gap-5">
                                <input type="hidden" name="reservation_id" value="<?php echo $data['reservasi_id']; ?>">
                                <button type="submit" name="delete_reservation" class="delete-button">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                        <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" fill="red" />
                                    </svg>
                                </button>
                                <?php
                                $today = date("Y-m-d");
                                $reservation_date = $data['tanggal'];
                                if ($reservation_date >= $today) {
                                    // Jika tanggal reservasi belum berlalu, tampilkan tombol "Update"
                                    echo '<button type="button" class="edit-button" onclick="openUpdateModal(' . $data['reservasi_id'] . ', \'' . $data['nama'] . '\', \'' . $data['alamat'] . '\', \'' . $data['usia'] . '\', \'' . $data['layanan'] . '\', \'' . $data['tanggal'] . '\', \'' . $data['waktu'] . '\')">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                        <path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" fill="blue" />
                                    </svg>
                                    </button>';
                                } else {
                                    // Jika tanggal reservasi telah berlalu, tampilkan pesan peringatan
                                    echo '<button type="button" class="edit-button" onclick="showReschedulePopup()"></button>';
                                }
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>



<div id="updateModal" class="fixed inset-0 z-50 hidden overflow-y-auto">
    <div class="flex items-center justify-center min-h-screen p-4">
        <div class="bg-white rounded-lg px-4 py-8 shadow-md w-full max-w-md mx-auto relative">
            <!-- Modal content -->
            <button type="button" id="closeModalBtn" onclick="closeModal" class=" absolute top-0 right-0 m-3  pb-5">
                <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 384 512">
                    <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" fill="red" />
                </svg>
            </button>

            <h2 class="text-xl font-semibold text-cyan-900 my-4">Update Reservation</h2>
            <form method="post" action="user_updateReservasi.php">
                <input type="hidden" name="reservation_id" id="reservation_id" value="">
                <div class="mb-4">
                    <label for="nama" class="block text-gray-700 font-medium">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" class="mt-1 focus:ring-cyan-500 focus:border-cyan-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="alamat" class="block text-gray-700 font-medium">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="mt-1 focus:ring-cyan-500 focus:border-cyan-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="usia" class="block text-gray-700 font-medium">Usia</label>
                    <input type="text" name="usia" id="usia" class="mt-1 focus:ring-cyan-500 focus:border-cyan-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 font-medium">Pilih Layanan</label>
                    <select name="layanan" class="mt-1 focus:ring-cyan-500 focus:border-cyan-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                        <option value="">Pilih Poli</option>
                        <option value="Poli Gigi">Poli Gigi</option>
                        <option value="Poli Mata">Poli Mata</option>
                        <option value="Poli Anak">Poli Anak</option>
                        <option value="Poli Kandungan & Kebidanan">Poli Kandungan & Kebidanan</option>
                        <option value="Dokter Umum">Dokter Umum</option>
                        <option value="Fisioterapi">Fisioterapi</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-medium">Tanggal</label>
                    <input type="text" id="datepicker" placeholder="Select Date" name="tanggal" class="mt-1 focus:ring-cyan-500 focus:border-cyan-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 font-medium">Waktu</label>
                    <select name="waktu" class="mt-1 focus:ring-cyan-500 focus:border-cyan-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" required>
                        <option value="">Pilih Jam</option>
                        <option value="08.00 - 10.00">08.00 - 10.00</option>
                        <option value="10.00 - 12.00">10.00 - 12.00</option>
                        <option value="13.00 - 15.00">13.00 - 15.00</option>
                    </select>
                </div>

                <div class="mt-5 sm:mt-6">
                    <button type="submit" name="update_reservation" class="inline-flex justify-center w-full rounded-md border border-transparent shadow-sm px-4 py-2 bg-cyan-600 text-base font-medium text-white hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 sm:text-sm">Update Reservation</button>
                </div>

            </form>
        </div>
    </div>
</div>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script>
    function openUpdateModal(reservation_id, nama, alamat, usia, layanan, tanggal, waktu) {
        document.getElementById('reservation_id').value = reservation_id;
        document.getElementById('nama').value = nama;
        document.getElementById('alamat').value = alamat;
        document.getElementById('usia').value = usia;
        document.querySelector('select[name="layanan"]').value = layanan;
        document.querySelector('select[name="waktu"]').value = waktu;
        document.getElementById('datepicker').value = tanggal;

        // Show the modal
        document.getElementById('updateModal').classList.remove('hidden');
    }

    // Function to close the modal
    function closeModal() {
        document.getElementById('updateModal').classList.add('hidden');
    }


    document.querySelectorAll('.edit-button').forEach((btn) => {
        btn.addEventListener('click', (event) => {
            const row = event.target.closest('.bg-white');
            const reservation_id = row.querySelector('input[name="reservation_id"]').value;
            const nama = row.querySelector('.reservation-nama').innerText;
            const alamat = row.querySelector('.reservation-alamat').innerText;
            const usia = row.querySelector('.reservation-usia').innerText;
            const layanan = row.querySelector('.bg-yellow-500').innerText;
            const tanggal = row.querySelector('table tr:first-child td:last-child').innerText;
            const waktu = row.querySelector('table tr:last-child td:last-child').innerText;

            openUpdateModal(reservation_id, nama, alamat, usia, layanan, tanggal, waktu);
        });
    });

    document.getElementById('closeModalBtn').addEventListener('click', closeModal);

    function showReschedulePopup() {
        alert("Tidak dapat mereschedule reservasi karena tanggal telah berlalu atau tinggal 1 hari sebelumnya.");
    }

    flatpickr("#datepicker", {
        dateFormat: "Y/m/d",
        minDate: "today",
    });
</script>

<?php include("partials/footer.php"); ?>