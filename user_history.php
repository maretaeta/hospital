<?php
session_start();

include_once("db/koneksi.php");
?>

<?php include("partials/header.php"); ?>
<?php include("partials/navbar.php"); ?>



<div class="container mx-auto py-8 items-center min-h-screen pt-36 ">
    <h1 class="text-2xl font-bold mb-4 text-cyan-900">History Reservasi</h1>
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Alamat
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Usia
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Layanan
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Tanggal
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Waktu
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        John Doe
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        123 Main St, City
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        30
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        Poli Gigi
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        2023-07-16
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        08.00 - 11.00 am
                    </td>
                </tr>
                <!-- Tambahkan baris tabel sesuai dengan data reservasi yang ada -->
            </tbody>
        </table>
    </div>
</div>



<?php include("partials/footer.php"); ?>