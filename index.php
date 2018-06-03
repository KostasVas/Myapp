<!DOCTYPE html>
<html lang="en">
<style>
</style>
<script>
function myFunction1() {
    document.getElementById("target").innerHTML= "<h3>Welcome to Mylogistis. We provide a smart way for you to monitor and check your expenses and help you manage them efficiently.In addition you can find summaries presented in graphs regarding your spendings and compare them to previous months/years so you can assess which expenses to cut. All the information you provide is stored in our database and its used only for the purpose of this website.</h3>";
}
function myFunction3(){
	document.getElementById("target").innerHTML="<h3>You can contact me by sending me an email. You can find my information below.  <br><br><br> Email:kvasilgr@gmail.com <br> First Name: Konstantinos <br> Last Name: Vasileiadis</div></h3>";
}
function registration(){
	//document.getElementById("target").innerHTML="Username: <input id='username' type='text' name='username'></input> <label id='mylabel' style='visibility: hidden;'>In use. </label> &nbsp; First Name: <input type='text' id='Firstname' name='cname'></input> <br> Password : <input type='text' id='Password' name='password'> &nbsp;<label style='visibility:hidden'>In use. </label> Last Name: <input type='text' id='Lastname' name='csurname'></input> <br> Cellphone : <input type='number' id='cell'></input> &nbsp; <button type='button' id='submitbutton' class='btn btn-success'>Submit info</button></input>";
    document.getElementById("target").innerHTML="<table class='table'><tbody><tr><td>Username:</td> <td><input id='username' type='text' name='username'></input></td><td><label id='mylabel' style='visibility: hidden; color:red'>Username in use. </label></td></tr>  <tr><td> First Name: </td><td><input type='text' id='Firstname' name='cname'></input></td><td><label id='Flabel' style='visibility:hidden;color:red'>This field is required.</label></td></tr> <tr><td> Password :</td> <td><input type='text' id='Password' name='password'> </td><td><label id='Plabel' style='visibility:hidden;color:red'>This field is required.</label></td></tr> <tr><td>Last Name: </td><td><input type='text' id='Lastname' name='csurname'></input></td><td><label id='Llabel' style='visibility:hidden;color:red'>This field is required.</label></td></tr> <tr><td> Cellphone :</td><td> <input type='number' id='cell'></input></td> <td><label id='Clabel' style='visibility:hidden;color:red'>This field is required.</label></td></tr><tr><td> <button type='button' id='submitbutton' class='btn btn-success'>Submit info</button></input></td></tr></tbody></table>";
	var el = document.getElementById('submitbutton');
if(el){
  el.addEventListener('click', sendreg);
}
}
function sendreg(){
	var a= document.getElementById('username').value;
	var b= document.getElementById('Password').value;
	var c= document.getElementById('Firstname').value;
	var d= document.getElementById('Lastname').value;
	var e= document.getElementById('cell').value;
	//alert(a+b+c+d+e);
	if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else 
	{ // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
     // alert(this.responseText);//document.getElementById("txtHint").innerHTML=this.responseText;
	  if(this.responseText==="Duplicate username")
	  {
		  document.getElementById('mylabel').style.visibility="visible";
		  /*document.getElementById('Flabel').style.visibility="visible";
		  document.getElementById('Plabel').style.visibility="visible";
		  document.getElementById('Llabel').style.visibility="visible";
		  document.getElementById('Clabel').style.visibility="visible"; */
	  } 
	  if(b==='')
	  {
		  document.getElementById('Flabel').style.visibility="visible";
	  }
	  if(c==='')
	  {
		  document.getElementById('Plabel').style.visibility="visible";
	  }
	  if(d==='')
	  {
		  document.getElementById('Llabel').style.visibility="visible";
	  }
	  if(e==='')
	  {
		  document.getElementById('Clabel').style.visibility="visible";
	  } 
	  if(this.responseText==="cool")
	{
		document.getElementById("target").innerHTML="Your registration has been successfully completed.";
	}
	
    }
	}
	
	xmlhttp.open("GET","insertion.php?a="+a+"&b="+b+"&c="+c+"&d="+d+"&e="+e,true);
	xmlhttp.send();
	event.preventDefault();
}
function mylogin()
{
	document.getElementById("target").innerHTML="<table class='table'><tbody><tr><td>Username: </td> <td><input type='text' id='targetUsername'></input></td></tr><tr><td>Password: </td><td><input type='text' id='targetPassword'></input></td></tr><tr><td><button class='btn btn-success' type='button' onclick='onlogin()'>Login</button></td></tr></tbody></table>";
}
function onlogin()
{
	alert("IT WORKS");
}
function showexample(){
var popCanvas = document.getElementById("popChart");

Chart.defaults.global.defaultFontFamily = "Lato";
Chart.defaults.global.defaultFontSize = 18;
Chart.defaults.global.defaultFontColor = 'blue';
var barChart = new Chart(popCanvas, {
  type: 'bar',
  data: {
    labels: ["Food", "Rent/House spendings", "Phone and Internet bills", "Extra Activities", "Misc", "Student Bills"],
    datasets: [{
      label: 'Euros',
      data: [230, 360, 50, 20, 70, 30, 650],
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
function showpie()
{
	new Chart(document.getElementById("popChart3"), {
		type: 'pie',
    data: {
      labels: ["Food", "Rent/House spendings", "Phone and Internet bills", "Extra Activities", "Misc", "Student Bills"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
        data: [150, 320, 82, 100, 120, 200]
      }]
    },
    options: {
      title: {
        display: true,
        
      }
    }
});
}
function showdoughnut()
{
	new Chart(document.getElementById("popChart4"), {
    type: 'doughnut',
    data: {
      labels: ["Food", "Rent/House spendings", "Phone and Internet bills", "Extra Activities", "Misc", "Student Bills"],
      datasets: [
        {
          label: "Population (millions)",
          backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
          data: [150, 320, 82, 100, 120, 200]
        }
      ]
    },
    options: {
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});
}
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
      <li><a href="#" onclick="myFunction4()">How it works</a></li>
      <!-- <li><a href="#">Tutorial</a></li> -->
    </ul>
	<ul class="nav navbar-nav navbar-right" style="padding-right:25px">
      <li><a href="#" onclick="registration()"><span class="glyphicon glyphicon-user" ></span> Sign Up</a></li>
      <li><a href="#" onclick="mylogin()"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
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