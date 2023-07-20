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
			<li>
				<a href="admin_listReservasi.php">
					<i class='bx bxs-message'></i>
					<span class="text">Reservation</span>
				</a>
			</li>
			<li class="active">
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
			<a href="#" class="nav-link">Categories</a>
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
		<!-- Assuming you have included Tailwind CSS in your project -->
		<main class="p-4">
			<div class="head-title mb-4">
				<div class="left">
					<h1 class="text-2xl font-bold">Users</h1>
				</div>
			</div>
			<div>
				<h1 class="text-xl font-bold mb-2">Users Database</h1>

				<?php
				// Mengambil data dari database
				$query = "SELECT * FROM users"; // Ganti dengan nama tabel Anda
				$result = mysqli_query($conn, $query);

				// Menampilkan data
				if (mysqli_num_rows($result) > 0) {
					echo '<div class="overflow-x-auto">
              <table class="w-full table-auto">
                <thead>
                  <tr>
                    <th class="border px-4 py-2">User ID</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Name</th>
                    <th class="border px-4 py-2">Username</th>
                    <th class="border px-4 py-2">Password</th>
                  </tr>
                </thead>
                <tbody>';

					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td class='border px-4 py-2 text-center'>" . $row['users_id'] . "</td>";
						echo "<td class='border px-4 py-2'>" . $row['email'] . "</td>";
						echo "<td class='border px-4 py-2'>" . $row['name'] . "</td>";
						echo "<td class='border px-4 py-2'>" . $row['username'] . "</td>";
						echo "<td class='border px-4 py-2'>" . $row['password'] . "</td>";
						echo "</tr>";
					}

					echo '</tbody></table></div>';
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