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


	include_once("db/koneksi.php"); ?>
	<?php include("partials/header.php"); ?>

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


	<section id="content">
		<nav>
			<i class='bx bx-menu'></i>
			<a href="#" class="text-cyan-800 font-semibold text-xl">Hi, Admin</a>
			<form action="#">
				<div class="">
				</div>
			</form>
			<a href="#" class="text-cyan-800 font-semibold text-xl">Hi, Admin</a>
		</nav>

		<main class="p-4">
			<div class="head-title mb-4">
				<div class="left">
					<div class="text-3xl font-bold">Users</div>
				</div>
			</div>
			<p class="text-xl text-cyan-600 font-medium mt-8 pb-5">Data Users</p>
			<div class="overflow-x-auto">
				<table class="w-full table-auto border-collapse ">
					<thead>
						<tr class="bg-cyan-800 text-white">
							<th class="border border-white px-4 py-2">User ID</th>
							<th class="border border-white px-4 py-2">Email</th>
							<th class="border border-white px-4 py-2">Name</th>
							<th class="border border-white px-4 py-2">Username</th>
							<th class="border border-white px-4 py-2">Password</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$query = "SELECT * FROM users";
						$result = mysqli_query($conn, $query);

						if (mysqli_num_rows($result) > 0) {
							while ($row = mysqli_fetch_assoc($result)) {
								echo "<tr class='bg-gray-100'>";
								echo "<td class='border border-white px-4 py-2 text-center'>" . $row['users_id'] . "</td>";
								echo "<td class='border border-white px-4 py-2'>" . $row['email'] . "</td>";
								echo "<td class='border border-white px-4 py-2'>" . $row['name'] . "</td>";
								echo "<td class='border border-white px-4 py-2'>" . $row['username'] . "</td>";
								echo "<td class='border border-white px-4 py-2'>" . $row['password'] . "</td>";
								echo "</tr>";
							}
						} else {
							echo "<tr><td colspan='5' class='border border-white px-4 py-2 text-center'>Tidak ada data yang ditemukan.</td></tr>";
						}

						mysqli_close($conn);
						?>
					</tbody>
				</table>
			</div>
		</main>


	</section>

	<script src="script.js"></script>
</body>

</html>