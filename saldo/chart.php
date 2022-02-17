<?php
require '../conf/koneksi.php';
// session_start();

// $year_in = mysqli_query($conn,"SELECT  SUM(jumlah) AS jumlah FROM transaksi WHERE tipe=1 GROUP BY EXTRACT(year FROM tanggal)");
// $year_out = mysqli_query($conn,"SELECT  SUM(jumlah) AS jumlah FROM transaksi WHERE tipe=2 GROUP BY EXTRACT(year FROM tanggal)");
$result = mysqli_query($conn,"SELECT SUM(jumlah) AS jumlah,EXTRACT(year FROM tanggal) as year,tipe FROM transaksi GROUP BY year,tipe");
$rows=[];
// $data_in=[];
// $data_out=[];
while($row = mysqli_fetch_assoc($result)){
	$rows[]=$row;
}
// while($row = mysqli_fetch_assoc($year_out)){
// 	$data_out[]=$row;
// }

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
		<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

	<script>
const ctx = document.getElementById("myChart").getContext("2d");
let data1= [];
let data2=[];
let labels=[];
<?php for($i = 0; $i<sizeof($rows);$i+=2): ?>
	data1.push(parseInt(<?= $rows[$i]["jumlah"] ?>));
	data2.push(parseInt(<?= $rows[$i+1]["jumlah"] ?>));
	labels.push(<?= $rows[$i]["year"] ?>);
<?php endfor; ?>

const myChart = new Chart(ctx, {
	
	data: {
		datasets: [
			{
                type:"line",
				label: "Pengeluaran",
				data:data2,
				// data:[1,2,3,4];
                borderColor: 'rgb(54, 162, 235)',
            },{
                type:"line",
                label:"Pemasukan",
				data:data1,
                borderColor: 'rgb(54, 162, 20)',
                }],
	    labels: labels,
	},
    // options:options
});

	</script>
</body>
</html>


