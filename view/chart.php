<?php
require '../conf/koneksi.php';

$result = mysqli_query($conn,"SELECT SUM(jumlah) AS jumlah,EXTRACT(year FROM tanggal) as year,tipe FROM transaksi GROUP BY year,tipe");
$rows=[];
// $data_in=[];
// $data_out=[];
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
	<title>Document</title>
</head>
<body>
	<div>
	<canvas id="myChart"></canvas>
	</div>
	<script>
const ctx = document.getElementById("myChart").getContext("2d");

let data= [];
// let data2=[];
let labels=[];
<?php for($i = 0; $i<sizeof($rows);$i+=2): ?>
	data.push(parseInt(<?= $rows[$i]["jumlah"]-$rows[$i+1]["jumlah"] ?>));
	labels.push(<?= $rows[$i]["year"] ?>);
<?php endfor; ?>


const myChart = new Chart(ctx, {
	type: "line",
	data: {
		labels: labels,
		datasets: [
			{
				label: "Saldo per Tahun",
				data:data,
				// data:[1,2,3,4];
				backgroundColor: [
					"rgba(255, 99, 132, 0.2)",
					"rgba(54, 162, 235, 0.2)",
					"rgba(255, 206, 86, 0.2)",
					"rgba(75, 192, 192, 0.2)",
				],
				borderColor: [
					"rgba(255, 99, 132, 1)",
					"rgba(54, 162, 235, 1)",
					"rgba(255, 206, 86, 1)",
					"rgba(75, 192, 192, 1)",
				],
				borderWidth: 1,
			},
		],
	},
	options: {
		scales: {
			y: {
				beginAtZero: true,
			},
		},
	},
});

	</script>
</body>
</html>


