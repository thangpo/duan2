
<style>
        .myChart   {
  width: 600px; /* Set the desired width */
  height: 400px; /* Set the desired height */
  margin: auto; /* Center the div horizontally */

}
    </style>
<body>
  <br>
  <br>
<div>
  <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['1', '2', '3', '4', '5', '6','7', '8', '9', '10', '11', '12'],
      datasets: 
      [{
        label: 'Doanh thu tháng ',
        data: ['<?php echo $result_count_money_folow_year?>'],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
 
</body>
</html>