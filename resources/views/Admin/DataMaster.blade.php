<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="{{ asset('css/styleAdmin.css') }}">

	<title>ADMIN.KETHEBOOK</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-book'></i>
			<span class="text">KETHEBOOK</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">User Management</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-data' ></i>
					<span class="text">Data Master</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bx-log-out' ></i>
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
			<i class='bx bx-menu' ></i>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="avatar4.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					
					<ul class="breadcrumb">
						<li>
							<h1>Data Master</h1>
						</li>
					</ul>
				</div>
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Book List</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>ISBN</th>
								<th>Judul</th>
								<th>Penulis</th>
								<th>Penerbit</th>
								<th>Tahun Terbit</th>
								<th>Harga</th>
								<th>Stock</th>
								<th>Kategori</th>
								<th>Action</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>978-3-598-21500-1</td>
								<td>Bahagia Itu Sederhana</td>
								<td>FRANCOIS MERCES</td>
								<td>KETHEBOOK</td>
								<td>2023</td>
								<td>15.99</td>
								<td>299</td>
								<td>Novel</td>
								<td>
									<a href="#" class="btn">
										<i class='bx bxs-low-vision'></i>
										<i class='bx bxs-edit'></i>
										<i class='bx bxs-trash'></i>
									</a>
								</td>
							</tr>

							<tr>
								<td>978-0-06-112241-5</td>
								<td>Lentera Senja</td>
								<td>Cahaya Dewi</td>
								<td>KETHEBOOK</td>
								<td>2023</td>
								<td>15.99</td>
								<td>299</td>
								<td>Novel</td>
								<td>
									<a href="#" class="btn">
										<i class='bx bxs-low-vision'></i>
										<i class='bx bxs-edit'></i>
										<i class='bx bxs-trash'></i>
									</a>
								</td>
							</tr>

							<tr>
								<td>978-1-4028-9462-6</td>
								<td>Lukisan Awan</td>
								<td>SHAWN GARCIA</td>
								<td>KETHEBOOK</td>
								<td>2023</td>
								<td>15.99</td>
								<td>299</td>
								<td>Novel</td>
								<td>
									<a href="#" class="btn">
										<i class='bx bxs-low-vision'></i>
										<i class='bx bxs-edit'></i>
										<i class='bx bxs-trash'></i>
									</a>
								</td>
							</tr>

							<tr>
								<td>978-1-56881-210-1</td>
								<td>Jejak Kamera</td>
								<td>KENTUT SUSILO</td>
								<td>KETHEBOOK</td>
								<td>2023</td>
								<td>15.99</td>
								<td>299</td>
								<td>Novel</td>
								<td>
									<a href="#" class="btn">
										<i class='bx bxs-low-vision'></i>
										<i class='bx bxs-edit'></i>
										<i class='bx bxs-trash'></i>
									</a>
								</td>
							</tr>

							<tr>
								<td>978-0-7432-2674-0</td>
								<td>Perahu Tampa Nahkoda</td>
								<td>JULIANA SILVA</td>
								<td>KETHEBOOK</td>
								<td>2023</td>
								<td>15.99</td>
								<td>299</td>
								<td>Novel</td>
								<td>
									<a href="#" class="btn">
										<i class='bx bxs-low-vision'></i>
										<i class='bx bxs-edit'></i>
										<i class='bx bxs-trash'></i>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</main>
	</section>
	

	<script src="script.js"></script>
</body>
</html>