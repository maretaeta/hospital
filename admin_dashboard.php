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
	<?php
	$total_reservasi = mysqli_query($conn, "SELECT COUNT(*) AS total_reservasi FROM reservasi");
	$row = mysqli_fetch_assoc($total_reservasi);

	$total_users = mysqli_query($conn, "SELECT COUNT(*) AS total_users FROM users");
	$row1 = mysqli_fetch_assoc($total_users);

	$total_layanan = mysqli_query($conn, "SELECT COUNT(*) AS total_layanan FROM poli");
	$row2 = mysqli_fetch_assoc($total_layanan);
	?>

	<!-- SIDEBAR -->
	<section id="sidebar" class="hide">
		<a href="admin_dashboard.php" class="brand pt-5">
			<img src="./img/logo.png" class="w-20 pt-2" />
			<span class="text-lg hidden md:flex">Admin Dashboard</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
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
			<form action="#">
				<div class="">
				</div>
			</form>

			<a href="#" class="text-cyan-800 font-semibold text-sm w-[150px] text-end md:text-xl ">Hi, Admin</a>
		</nav>

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="text-3xl font-bold">Dashboard</div>
			</div>

			<ul class="box-info grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mt-6">
				<li class="bg-white rounded-lg p-4 shadow-md">
					<i class='bx bxs-calendar-check text-4xl text-cyan-800'></i>
					<span class="text">
						<h3><?= $row['total_reservasi'] ?></h3>
						<p>Total Reservation</p>
					</span>
				</li>
				<li class="bg-white rounded-lg p-4 shadow-md">
					<i class='bx bxs-group text-4xl text-cyan-800'></i>
					<span class="text">
						<h3><?= $row1['total_users'] ?></h3>
						<p>Total Users</p>
					</span>
				</li>
				<li class="bg-white rounded-lg p-4 shadow-md">
					<i class='bx bxs-donate-heart text-4xl text-cyan-800'></i>
					<span class="text">
						<h3><?= $row2['total_layanan'] ?></h3>
						<p>Total Service</p>
					</span>
				</li>
			</ul>

			<div class="container mx-auto mt-10">
				<div class="bg-white rounded-lg shadow-md p-6">
					<h3 class="text-cyan-800 text-xl font-semibold mb-3">Chart</h3>
					<div class="w-full" style="height: 400px;">
						<canvas id="lineChart"></canvas>
					</div>
				</div>
			</div>
		</main>

	</section>

	<script src="script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Data dari PHP
			var totalReservasi = <?= $row['total_reservasi'] ?>;
			var totalUsers = <?= $row1['total_users'] ?>;
			var totalLayanan = <?= $row2['total_layanan'] ?>;

			// Data untuk diagram garis
			var labels = ["Total Reservation", "Total Users", "Total Service"];
			var values = [totalReservasi, totalUsers, totalLayanan];

			// Konfigurasi chart
			var ctx = document.getElementById("lineChart").getContext("2d");
			var lineChart = new Chart(ctx, {
				type: "line",
				data: {
					labels: labels,
					datasets: [{
						label: "Data Reservasi",
						data: values,
						borderColor: "rgba(75, 192, 192, 1)",
						backgroundColor: "rgba(75, 192, 192, 0.2)",
						borderWidth: 3,
					}],
				},
				options: {
					scales: {
						y: {
							beginAtZero: true
						}
					}
				}
			});
		});
	</script>
</body>

</html>