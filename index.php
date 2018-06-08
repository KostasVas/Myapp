<!DOCTYPE html>
<html lang="en">
<style>
</style>
<script src="js/myscripts2.js">

</script>
<head>
  <title>MyLogistis</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</head>
<body style="background-color:#F0F8FF" onload="showexample();test2();showpie();showdoughnut();">
<div class="container" style="background-color:#F0F8FF; padding-top: 25px"> <!-- add container-fluid here -->
<div class="row">
	<nav class="navbar navbar-default" >
	 <ul class="nav navbar-nav">
      <li class="active" onclick="myFunction1()"><a href="#">Home</a></li>
      <li><a href="#" onclick="myFunction3()">Contact Us</a></li>
      <li><a href="#" >How it works</a></li>
      <li><a href="#" style="visibility:hidden" onclick="addData()" id='afterLogShow'">Add data(Expenses)</a></li>
    </ul>
	<ul class="nav navbar-nav navbar-right" style="padding-right:25px">
      <li><a href="#" id='afterlogged1' onclick="registration()"><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
	  <li><a href="#" id='afterlogged3' style="display:none"><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
      <li><a href="#" id='afterlogged4' style="display:none"><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
	  <li><a href="#" id='afterlogged2' onclick="mylogin()"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
    </ul>
	</nav>
</div>

<div class="row"> <!-- <div class="row" style=" background-image: url(UpRED.jpg)">-->
	<div class="jumbotron">
	<h3 id="target" >Welcome to Mylogistis. We provide a smart way for you to monitor and check your expenses and help you manage them efficiently.In addition you can find summaries presented in graphs regarding your spendings and compare them to previous months/years so you can assess which expenses to cut. All the information you provide is stored in our database and its used only for the purpose of this website.</h3>
	</div>
</div>
<label style="text-align: center">Examples of Graphical Representation of Data:</label>
<div class="jumbotron" style="background-color:#FFFFF2">
<div class="row">
	
	<div class="col-sm-6">
	<canvas id="popChart" width="600" height="400"></canvas>
	</div>
	<div class="col-sm-6">
	<canvas id="popChart2" width="600" height="400"></canvas>
	</div>
</div>
</div>
<div class="jumbotron" style="background-color:#FFFFF2">
<div class="row">
	<div class="col-sm-6">
	<canvas id="popChart3" width="600" height="400"></canvas>
	</div>
	<div class="col-sm-6">
	<canvas id="popChart4" width="600" height="400"></canvas>
	</div>
</div>
</div>
</div>
</body>
</html>