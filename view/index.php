<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="view/style.css" type="text/css" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300&display=swap"
			rel="stylesheet"
		/>

		<script
			src="https://kit.fontawesome.com/ca568a90c1.js"
			crossorigin="anonymous"
		></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
		<title>Document</title>
	</head>
	<body>
		<nav class="navbar">
			<h4>Kas-Len</h4>
			<div class="profile">
				<img
					src="https://picsum.photos/200/200?random=1"
					alt=""
					class="profile-image"
				/>
				<p class="profile-name">Lorem Ipsum</p>
			</div>
		</nav>

		<input type="checkbox" name="" id="toggle" />
		<label for="toggle" class="side-toggle">
			<span class="fas fa-bars"></span>
		</label>

		<div class="sidebar">
			<div class="sidebar-menu">
				<a href="">
					<span class="fas fa-chalkboard"></span>
					<p>Dashboard</p>
				</a>
			</div>
			<div class="sidebar-menu">
				<a href="">
					<span class="fas fa-users"></span>
					<p href="#">Data Anggota</p>
				</a>
			</div>
			<div class="sidebar-menu">
				<a href="">
					<span class="fas fa-chart-line"></span>
					<p href="#">Saldo</p>
				</a>
			</div>
			<div class="sidebar-menu">
				<a href="">
					<span class="fas fa-credit-card"></span>
					<p href="#">Kas Masuk</p>
				</a>
			</div>
			<div class="sidebar-menu">
				<a href="">
					<span class="fas fa-piggy-bank"></span>
					<p href="#">Kas Keluar</p>
				</a>
			</div>
			<div class="sidebar-menu">
				<a href="">
					<span class="fas fa-clipboard-list"></span>
					<p href="#">Transaksi</p>
				</a>
			</div>
			<div class="sidebar-menu logout" id="logout">
				<a href="">
					<span class="fas fa-power-off"></span>

					<p href="#">Logout</p>
				</a>
			</div>
		</div>

		<main>
			<h3>Dashboard</h3>
			<div class="dashboard-container">
				<div class="card total1">
					<div class="info">
						<div class="info-detail">
							<h3>Kas Masuk</h3>
							<p>Total Pemasukan</p>
							<h2>1,873,250 <span>USD</span></h2>
						</div>
						<div class="info-image">
							<i class="fas fa-dollar-sign"></i>
						</div>
					</div>
				</div>

				<div class="card total2">
					<div class="info">
						<div class="info-detail">
							<h3>Kas Keluar</h3>
							<p>Lorem Ipsum dolor</p>
							<h2>10,890 <span>Orders</span></h2>
						</div>
						<div class="info-image">
							<i class="fas fa-money-check-alt"></i>
						</div>
					</div>
				</div>
				<div class="card total3">
					<div class="info">
						<div class="info-detail">
							<h3>Customers</h3>
							<p>Lorem Ipsum dolor</p>
							<h2>340 <span>Companies</span></h2>
						</div>
						<div class="info-image">
							<i class="fas fa-users"></i>
						</div>
					</div>
				</div>
				<div class="card total4">
					<div class="info">
						<div class="info-detail">
							<h3>Saldo</h3>
							<p>Lorem Ipsum dolor</p>
							<h2>56 <span>Orders</span></h2>
						</div>
						<div class="info-image">
							<i class="fas fa-balance-scale-right"></i>
						</div>
					</div>
				</div>

				<div class="card detail">
					<div class="detail-header">
						<h2>All Orders</h2>
						<button>See More</button>
					</div>
					<table>
						<tr>
							<th>No.</th>
							<th>Nama</th>
							<th>Jenis</th>
							<th>Jumlah</th>
							<th>Tanggal</th>
						</tr>
						<tr>
							<td>#PW-001</td>
							<td>Potential Corp</td>
							<td>
								<span class="status onprogress"
									><i class="fas fa-circle"></i
								></span>
							</td>
							<td>3,149.19 USD</td>
							<td>Apr 11, 2021</td>
						</tr>
						<tr>
							<td>#PW-001</td>
							<td>Potential Corp</td>
							<td>
								<span class="status onprogress"
									><i class="fas fa-circle"></i
								></span>
							</td>
							<td>3,149.19 USD</td>
							<td>Apr 11, 2021</td>
						</tr>
						<tr>
							<td>#PW-001</td>
							<td>Potential Corp</td>
							<td>
								<span class="status onprogress"
									><i class="fas fa-circle"></i
								></span>
							</td>
							<td>3,149.19 USD</td>
							<td>Apr 11, 2021</td>
						</tr>
						<tr>
							<td>#PW-001</td>
							<td>Potential Corp</td>
							<td>
								<span class="status onprogress"
									><i class="fas fa-circle"></i
								></span>
							</td>
							<td>3,149.19 USD</td>
							<td>Apr 11, 2021</td>
						</tr>
						<tr>
							<td>#PW-001</td>
							<td>Potential Corp</td>
							<td>
								<span class="status onprogress"
									><i class="fas fa-circle"></i
								></span>
							</td>
							<td>3,149.19 USD</td>
							<td>Apr 11, 2021</td>
						</tr>
						<tr>
							<td>#PW-001</td>
							<td>Potential Corp</td>
							<td>
								<span class="status onprogress"
									><i class="fas fa-circle"></i
								></span>
							</td>
							<td>3,149.19 USD</td>
							<td>Apr 11, 2021</td>
						</tr>
					</table>
				</div>
				<div class="card customer">
					<div class="detail-header">
						<h2>All Orders</h2>
						<button>See More</button>
					</div>
					<div>
						<canvas id="myChart"></canvas>
					</div>
				</div>
			</div>
		</main>

		<script src="view/script.js"></script>
	</body>
</html>
