<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="style.css">

	<title>Admin Dashboard</title>
</head>

<body>
	<?php
	session_start();

	include_once("db/koneksi.php");

	// function downloadPDF()
	// {
	// 	// Replace the following code with your PDF generation logic
	// 	$pdfContent = "This is your PDF content.";

	// 	// Set the appropriate headers for PDF download
	// 	header('Content-Type: application/pdf');
	// 	header('Content-Disposition: attachment; filename="reservation.pdf"');

	// 	// Output the PDF content
	// 	echo $pdfContent;
	// }

	// // Check if the "Download PDF" button is clicked
	// if (isset($_GET['action']) && $_GET['action'] === 'download_pdf') {
	// 	downloadPDF();
	// 	exit;
	// }
	?>

	<?php include("partials/header.php"); ?>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="admin_dashboard.php" class="brand pt-5">
			<img src="./img/logo.png" class="w-20 pt-2" />
			<span class="text-lg hidden md:flex">Admin Dashboard</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="admin_dashboard.php">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
				<a href="admin_listReservasi.php">
					<i class='bx bxs-message'></i>
					<span class="text">Reservation</span>
				</a>
			</li>
			<li>
				<a href="admin_listUser.php">
					<i class='bx bxs-user'></i>
					<span class="text">Users</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="logout.php" class="logout">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>

	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
			<a href="#" class="text-cyan-800 font-semibold text-xl">Hi, Admin</a>
			<form action="#">
				<div class="">
					<!-- <input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button> -->
				</div>
			</form>
			<!-- <input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell'></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a> -->
		</nav>

		<!-- MAIN -->
		<main class="container mx-auto px-4 py-8">
			<div class="head-title flex items-center justify-between mb-8">
				<div class="left">
					<div class="text-3xl font-bold">Reservation</div>
				</div>
				<!-- <a href="?action=download_pdf" class="btn-download flex items-center px-4 py-2 bg-blue-500 text-white rounded-md">
					<i class='bx bxs-cloud-download mr-2'></i>
					<span class="text">Download PDF</span>
				</a> -->
			</div>

			<p class="text-xl text-cyan-600 font-medium pb-5">Data Reservations</p>
			<div class="overflow-x-auto">
				<table class="w-full border-collapse table-auto">
					<thead>
						<tr class="bg-cyan-800 text-white">
							<th class="border border-white px-4 py-2">Reservasi ID</th>
							<th class="border border-white px-4 py-2">Nama</th>
							<th class="border border-white px-4 py-2">Alamat</th>
							<th class="border border-white px-4 py-2">Usia</th>
							<th class="border border-white px-4 py-2">Layanan</th>
							<th class="border border-white px-4 py-2">Tanggal</th>
							<th class="border border-white px-4 py-2">Waktu</th>
							<th class="border border-white px-4 py-2">Keterangan</th>
						</tr>
					</thead>
					<tbody>
						<?php

						$query = "SELECT * FROM reservasi";
						$result = mysqli_query($conn, $query);

						if (mysqli_num_rows($result) > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
								echo "<tr class='bg-gray-100'>
                                <td class='border border-white px-4 py-2 text-center'>" . $row['reservasi_id'] . "</td>
                                <td class='border border-white px-4 py-2'>" . $row['nama'] . "</td>
                                <td class='border border-white px-4 py-2'>" . $row['alamat'] . "</td>
                                <td class='border border-white px-4 py-2'>" . $row['usia'] . "</td>
                                <td class='border border-white px-4 py-2'>" . $row['layanan'] . "</td>
                                <td class='border border-white px-4 py-2'>" . $row['tanggal'] . "</td>
                                <td class='border border-white px-4 py-2'>" . $row['waktu'] . "</td>
									<td class='border border-white px-4 py-2'>
    								<a href='admin_deleteReservation.php?reservasi_id=" . $row['reservasi_id'] . "' class='btn-delete'>Delete</a>
    								<button onclick='openUpdateModal(" . $row['reservasi_id'] . ", \"" . $row['nama'] . "\", \"" . $row['alamat'] . "\", " . $row['usia'] . ", \"" . $row['layanan'] . "\", \"" . $row['tanggal'] . "\", \"" . $row['waktu'] . "\")' class='btn-update-modal'>Update</button>
								</td>
                            </tr>";
							}
						} else {
							echo "<tr><td colspan='8' class='border border-white px-4 py-2 text-center'>Tidak ada data yang ditemukan.</td></tr>";
						}

						mysqli_close($conn);
						?>
					</tbody>
				</table>
			</div>
		</main>
	</section>

	<!-- MODAL -->
	<div id="updateModal" class="fixed inset-0 z-50 hidden overflow-y-auto ">
		<div class="flex items-center justify-center min-h-screen p-4 pt-24">
			<div class="bg-white rounded-lg px-4 py-8 shadow-md w-full max-w-md mx-auto relative">
				<button type="button" id="closeModalBtn" onclick="closeUpdateModal()" class="absolute top-0 right-0 m-3 pb-5">
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
							<option value="08.00 - 11.00 am">08.00 - 11.00 am</option>
							<option value="13.00 - 18.00 pm">13.00 - 18.00 pm</option>
							<option value="19.00 - 22.00 pm">19.00 - 22.00 pm</option>
						</select>
					</div>

					<button onclick="updateReservation()">Save Changes</button>
			</div>
		</div>

		<script>
			function openUpdateModal(reservation_id, nama, alamat, usia, layanan, tanggal, waktu) {
				document.getElementById('reservation_id').value = reservation_id;
				document.getElementById('nama').value = nama;
				document.getElementById('alamat').value = alamat;
				document.getElementById('usia').value = usia;
				document.querySelector('select[name="layanan"]').value = layanan;
				document.querySelector('select[name="waktu"]').value = waktu;
				document.getElementById('datepicker').value = tanggal;

				document.getElementById("updateModal").style.display = "block";
			}

			function closeUpdateModal() {
				document.getElementById("updateModal").style.display = "none";
			}


			function updateReservation() {

				const form = document.getElementById("updateForm");
				const formData = new FormData(form);

				const xhr = new XMLHttpRequest();
				xhr.open("POST", "admin_updateReservation");
				xhr.onreadystatechange = function() {
					if (xhr.readyState === XMLHttpRequest.DONE) {
						if (xhr.status === 200) {
							alert("Reservation updated successfully!");
							location.reload();
						} else {

							alert("Failed to update the reservation. Please try again.");
						}
					}
				};
				xhr.send(formData);
			}
		</script>


		<script src="script.js"></script>
</body>

</html>