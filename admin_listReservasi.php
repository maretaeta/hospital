<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="style.css">

	<title>Admin Dashboard</title>
</head>

<body>
	<?php

	session_start();


	include_once("db/koneksi.php"); ?>
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
	<!-- SIDEBAR -->



	<!-- CONTENT -->
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
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main class="container mx-auto px-4 py-8">
			<div class="head-title flex items-center justify-between">
				<div class="left">
					<div class="text-2xl font-bold"> Reservation</div>
				</div>
				<a href="#" class="btn-download flex items-center px-4 py-2 bg-blue-500 text-white rounded-md">
					<i class='bx bxs-cloud-download mr-2'></i>
					<span class="text">Download PDF</span>
				</a>
			</div>
			<p class="text-xl text-cyan-600 font-medium mt-8 pb-5">Data Reservations</p>
			<div>


				<?php
				// Mengambil data dari database
				$query = "SELECT * FROM reservasi";
				$result = mysqli_query($conn, $query);

				// Menampilkan data
				if (mysqli_num_rows($result) > 0) {
					echo "<div class='overflow-x-auto'>
        <table class='table-auto w-full border-collapse'>
          <thead>
            <tr class='bg-gray-200'>
              <th class='border border-black px-4 py-2'>Reservasi ID</th>
              <th class='border border-black px-4 py-2'>Nama</th>
              <th class='border border-black px-4 py-2'>Alamat</th>
              <th class='border border-black px-4 py-2'>Usia</th>
              <th class='border border-black px-4 py-2'>Layanan</th>
              <th class='border border-black px-4 py-2'>Tanggal</th>
              <th class='border border-black px-4 py-2'>Waktu</th>
            </tr>
          </thead>
          <tbody>";

					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr class='bg-gray-100'>";
						echo "<td class='border border-black px-4 py-2 text-center'>" . $row['reservasi_id'] . "</td>";
						echo "<td class='border border-black px-4 py-2'>" . $row['nama'] . "</td>";
						echo "<td class='border border-black px-4 py-2'>" . $row['alamat'] . "</td>";
						echo "<td class='border border-black px-4 py-2'>" . $row['usia'] . "</td>";
						echo "<td class='border border-black px-4 py-2'>" . $row['layanan'] . "</td>";
						echo "<td class='border border-black px-4 py-2'>" . $row['tanggal'] . "</td>";
						echo "<td class='border border-black px-4 py-2'>" . $row['waktu'] . "</td>";
						echo "</tr>";
					}

					echo "</tbody></table></div>";
				} else {
					echo "Tidak ada data yang ditemukan.";
				}

				// Menutup koneksi database
				mysqli_close($conn);
				?>

			</div>
		</main>


		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="script.js"></script>
</body>

</html>