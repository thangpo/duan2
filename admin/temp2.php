
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        .chart   {
  width: 600px; /* Set the desired width */
  height: 400px; /* Set the desired height */
  margin: auto; /* Center the div horizontally */

}
    </style>
</head>
<body>
<div class="chart">
        <div class="title">Thống kê số lượng sách từng danh mục </div>
        <canvas id="canvas" ></canvas>
    </div>
 
</body>

<script>
  const ctx = document.getElementById('canvas');

  new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ['<?php echo $result_for_list_book?>'],
      datasets: [{
        label: 'có số lượng sách là',
        data: [<?php echo $number?>],
        
      }]
    }
  });
  

</script>
</html>