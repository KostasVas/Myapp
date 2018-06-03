<html>
<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</head>
<script>
function test(){
var popCanvas = document.getElementById("popChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;
Chart.defaults.global.defaultFontColor = 'blue';
var barChart = new Chart(popCanvas, {
  type: 'radar',
  data: {
    labels: ["Food", "Rent/House spendings", "Phone and Internet bills", "Extra Activities", "Misc", "Student Bills"],
    datasets: [{
      label: 'Euros',
      data: [230, 360, 50, 20, 70, 30],
      backgroundColor: [
        'rgba(255, 99, 132, 0.6)',
        'rgba(54, 162, 235, 0.6)',
        'rgba(255, 206, 86, 0.6)',
        'rgba(75, 192, 192, 0.6)',
        'rgba(153, 102, 255, 0.6)',
        'rgba(255, 159, 64, 0.6)',
        'rgba(255, 99, 132, 0.6)',
        'rgba(54, 162, 235, 0.6)',
        'rgba(255, 206, 86, 0.6)',
        'rgba(75, 192, 192, 0.6)',
        'rgba(153, 102, 255, 0.6)'
      ]
    }]
  },
  options: {
    legend: {
      display: true,
      position: 'bottom',
      labels: {
        boxWidth: 80,
        fontColor: 'rgb(60, 180, 100)'
      }
    }
  }
});
}
</script>
<body onload="test()">
<canvas id="popChart" width="600" height="400"></canvas>
</body>
</html>