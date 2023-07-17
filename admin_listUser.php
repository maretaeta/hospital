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
		<a href="#" class="brand">
			<img src="./img/logo.png" class="w-12" />
			<span class="text">Admin Dashboard</span>
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
				<a href="#" class="logout">
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
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell'></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Users</h1>
				</div>
			</div>
			<div>
				<h1>Users Database</h1>
				<br>

				<?php
				// Mengambil data dari database
				$query = "SELECT * FROM users"; // Ganti dengan nama tabel Anda
				$result = mysqli_query($conn, $query);

				// Menampilkan data
				if (mysqli_num_rows($result) > 0) {
					echo "<table style='border-collapse: collapse; cellspacing: 10px;'>";
					echo "<tr>
                <th style='border: 1px solid black;'>User ID</th>
                <th style='border: 1px solid black;'>Email</th>
                <th style='border: 1px solid black;'>Name</th>
                <th style='border: 1px solid black;'>Username</th>
                <th style='border: 1px solid black;'>Password</th>
                <th style='border: 1px solid black;'>Role</th>
              </tr>";

					while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td style='border: 1px solid black; text-align: center'>" . $row['users_id'] . "</td>";
						echo "<td style='border: 1px solid black;'>" . $row['email'] . "</td>";
						echo "<td style='border: 1px solid black;'>" . $row['name'] . "</td>";
						echo "<td style='border: 1px solid black;'>" . $row['username'] . "</td>";
						echo "<td style='border: 1px solid black;'>" . $row['password'] . "</td>";
						echo "<td style='border: 1px solid black;'>" . $row['role'] . "</td>";
						echo "</tr>";
					}

					echo "</table>";
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