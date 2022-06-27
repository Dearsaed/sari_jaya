<!DOCTYPE HTML>
<html>
<head>
<script src="../chart/canvasjs.min.js"></script>
<script type="text/javascript">

window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer", {
		title:{
			text: "Grafik jumlah Form Desa Wisata"              
		},
		data: [              
		{
			// Change type to "doughnut", "line", "splineArea", etc.
			type: "column",
			dataPoints: [
				<?php 
					$no_x=1;
					$query = "SELECT DISTINCT `kabupaten` FROM `form_desa`";
					$result=$conn->query($query);
					while($r=mysqli_fetch_array($result))
            		{
						$kabupaten= $r['0'];
						$query1 = "SELECT `kabupaten` FROM `form_desa` WHERE `kabupaten`='$kabupaten'";
						$result1=$conn->query($query1);
						$total=mysqli_num_rows($result1);
						echo "{ label: $kabupaten1, y: $total },";
						$no_x++;
					}
					?>
			]
		}
		]
	});
	chart.render();
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 500px; width: 100%;"></div>
</body>
</html>