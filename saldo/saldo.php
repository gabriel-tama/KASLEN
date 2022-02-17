<?php 
require "../conf/koneksi.php"; 
session_start();


$result = mysqli_query($conn,"SELECT SUM(jumlah) AS jumlah,EXTRACT(year FROM tanggal) as year,tipe FROM transaksi GROUP BY year,tipe");
$rows= [];
while($row = mysqli_fetch_assoc($result)){
	$rows[]=$row;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
    <title>Document</title>
</head>
<body>
    <?php include "../navbar/navbar.php" ?>
    <main>
			<div class="dashboard-container">
				

				<div class="card customer">
					<div class="detail-header">
						<h2>Pendapatan vs Pengeluaran</h2>
					</div>

					<?php include "chart.php" ?>
				</div>
				<div class="card detail">
					<div class="detail-header">
						<h2>Tabel Pendapatan Per Tahun</h2>
					</div>
                    <table>
                        <tr>
                            <th>No.</th>
                            <th>Tahun</th>
                            <th>Pendapatan</th>
                            <th>Pengeluaran</th>
                            <th>Total</th>
                        </tr>

                        <?php $idx = 1;?>
					<?php 
					// $idx=1;
					for($i = 0; $i<sizeof($rows);$i+=2): ?>
					<tr>
						<td><?= $idx ?></td>
						<td><?= $rows[$i]["year"]; ?></td>
						<td><?= $rows[$i]["jumlah"]?></td>
						<td><?= $rows[$i+1]["jumlah"] ?> </td>
						<td><?= $rows[$i]["jumlah"]-$rows[$i+1]["jumlah"]?></td>
					</tr>
					<?php $idx++; ?>
					<?php endfor; ?>
                        
                    </table>

				</div>
			</div>
		</main>

</body>
</html>