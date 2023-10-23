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
			<i class='bx bxs-user-detail'></i>
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
							<h1>User Management</h1>
						</li>
						<li><i class='bx bxs-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-plus-circle' ></i>
					<span class="text">Add User</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-user-rectangle'></i>
					<span class="text">
						<h3>8834</h3>
						<p>Visitors</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-user-plus' ></i>
					<span class="text">
						<h3>2543</h3>
						<p>Registerd</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-user-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>Logined</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>ID</th>
								<th>User</th>
								<th>Email</th>
								<th>Role</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>01</td>
								<td>Jhon</td>
								<td>jhontambunan003@gmail.com</td>
								<td><span class="status pending">Admin</span></td>
								<td>
									<a href="#" class="btn">
										<i class='bx bxs-low-vision'></i>
										<i class='bx bxs-edit'></i>
										<i class='bx bxs-trash'></i>
									</a>
								</td>
							</tr>

							<tr>
								<td>02</td>
								<td>Pardede</td>
								<td>pardedektambunan2@gmail.com</td>
								<td><span class="status process">Moderator</span></td>
								<td>
									<a href="#" class="btn">
										<i class='bx bxs-low-vision'></i>
										<i class='bx bxs-edit'></i>
										<i class='bx bxs-trash'></i>
									</a>
								</td>
							</tr>

							<tr>
								<td>03</td>
								<td>Jovincent</td>
								<td>Jovincentngabskuy99@gmail.com</td>
								<td><span class="status completed">user</span></td>
								<td>
									<a href="#" class="btn">
										<i class='bx bxs-low-vision'></i>
										<i class='bx bxs-edit'></i>
										<i class='bx bxs-trash'></i>
									</a>
								</td>
							<tr>
								<td> 04</td>
								<td>Cintya</td>
								<td>cintyamustikaratu@gmail.com</td>
								<td><span class="status completed">user</span></td>
								<td>
									<a href="#" class="btn">
										<i class='bx bxs-low-vision'></i>
										<i class='bx bxs-edit'></i>
										<i class='bx bxs-trash'></i>
									</a>
								</td>
							</tr>
							<tr>
								<td>05</td>
								<td>Nita</td>
								<td>nitagunawansamsudin@gmail.com</td>
								<td><span class="status completed">user</span></td>
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

				<div class="role">
					<div class="head">
						<h3>Roles</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="role-list">
						<li class="admin">
							<p>Admin</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="moderator">
							<p>Moderator</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="user">
							<p>User</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div>
			</div>
		</main>
	</section>
	

	<script src="script.js"></script>
</body>
</html>