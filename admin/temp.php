<!DOCTYPE html>
<html lang="en">
<?php 



// echo '<pre>';
// var_dump($count_id_year);
// echo '</pre>';


?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Line Chart</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="title">Line Chart With Chart.js</div>
        <canvas id="canvas"></canvas>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1/dist/chart.min.js"></script>
    <script src="script.js"></script>
</body>
<script>
    const labels = ['January', 'February', 'March', 'April', 'May', 'June','July', 'August', 'September', 'October', 'November', 'December']

const data = {
  labels: labels,
  datasets: [
    {
      label: 'Số đơn hàng đã bán thành công',
      backgroundColor: 'blue',
      borderColor: 'blue',
      data: [<?php echo $number?>],
      tension: 0.4,
    },
    {
      label: 'Số đơn hàng đã bán thất bại',
      backgroundColor: 'red',
      borderColor: 'red',
      data: [<?php echo $number_count_id_year_faile?>],
      tension: 0.4,
    },
  ],
}
const config = {
  type: 'line',
  data: data,
}

const canvas = document.getElementById('canvas')
const chart = new Chart(canvas, config) 
</script>
</html>