<html>
<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</head>
<script>
function test2()
{
var marksCanvas = document.getElementById("popChart2");

var marksData = {
  labels: ["Food", "Rent/House spendings", "Phone and Internet bills", "Extra Activities", "Misc", "Student Bills"],
  datasets: [{
    label: "January",
    backgroundColor: "rgba(200,0,0,0.2)",
    data: [230, 360, 50, 20, 70, 200]
  }, {
    label: "February",
    backgroundColor: "rgba(0,0,200,0.2)",
    data: [150, 320, 82, 100, 120, 200]
  }]
};

var radarChart = new Chart(marksCanvas, {
  type: 'radar',
  data: marksData
});
}
</script>
<body onload="test2()">
<canvas id="popChart2" width="600" height="400"></canvas>
</body>
</html>