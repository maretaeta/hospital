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
	<?php
		$total_reservasi = mysqli_query($conn, "SELECT COUNT(*) AS total_reservasi FROM reservasi");
		$row = mysqli_fetch_assoc($total_reservasi);

		$total_users = mysqli_query($conn, "SELECT COUNT(*) AS total_users FROM users");
		$row1 = mysqli_fetch_assoc($total_users);

		$total_layanan = mysqli_query($conn, "SELECT COUNT(*) AS total_layanan FROM poli");
		$row2 = mysqli_fetch_assoc($total_layanan);
	?>

	<!-- SIDEBAR -->
	<section id="sidebar">
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
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
			<form action="#">
				<div class="">
				</div>
			</form>
			<a href="#" class="text-cyan-800 font-semibold text-xl">Hi, Admin</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<div class="text-3xl font-bold"> Dashboard</div>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check'></i>
					<span class="text">
						<h3><?=$row ['total_reservasi']?></h3>
						<p>Total Reservation</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group'></i>
					<span class="text">
						<h3><?=$row1 ['total_users']?></h3>
						<p>Total Users</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-donate-heart'></i>
					<span class="text">
						<h3><?=$row2 ['total_layanan']?></h3>
						<p>Total Service</p>
					</span>
				</li>
			</ul>



		</main>
	</section>

	<script src="script.js"></script>
</body>

</html>