function myFunction1() {
    document.getElementById("target").innerHTML= "<h3>Welcome to Mylogistis. We provide a smart way for you to monitor and check your expenses and help you manage them efficiently.In addition you can find summaries presented in graphs regarding your spendings and compare them to previous months/years so you can assess which expenses to cut. All the information you provide is stored in our database and its used only for the purpose of this website.</h3>";
}

function myFunction3(){
	document.getElementById("target").innerHTML="<h3>You can contact me by sending me an email. You can find my information below.  <br><br><br> Email:kvasilgr@gmail.com <br> First Name: Konstantinos <br> Last Name: Vasileiadis</div></h3>";
}
function registration(){
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
	if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else 
	{ // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
     
	  if(this.responseText==="Duplicate username")
	  {
		  document.getElementById('mylabel').style.visibility="visible";
		  
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
	document.getElementById("target").innerHTML="<table class='table'><tbody><tr><td>Username: </td> <td><input type='text' id='targetUsername'></input></td><td><label id='elabel' style='visibility:hidden;color:red'>Username doesnt exist.</label></td></tr><tr><td>Password: </td><td><input type='text' id='targetPassword'></input></td><td><label id='elabel2' style='visibility:hidden;color:red'>Wrong password!</label></td></tr><tr><td><button class='btn btn-success' type='button' onclick='onlogin()'>Login</button></td></tr></tbody></table>";
}
function onlogin()
{
	var a= document.getElementById('targetUsername').value;
	var b= document.getElementById('targetPassword').value;
	if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else 
	{ // code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
	if (this.readyState==4 && this.status==200) {
		alert(this.responseText);
		if(this.responseText==="No such username found in Database")
		{
			document.getElementById("elabel").style.visibility="visible";
		}
		if(this.responseText==="bad password")
		{
			document.getElementById("elabel2").style.visibility="visible";
		}
		if(this.responseText==="loggedin")
		{
			
			//<a href='#' id='afterlogged3'><span class='glyphicon glyphicon-user' ></span> Sign Up</a>
			
			document.getElementById("afterlogged1").style.display="none";
			document.getElementById("afterlogged3").style.display="block";
			document.getElementById("afterlogged3").innerHTML="<a href='#' id='afterlogged3' ><span class='glyphicon glyphicon-user' ></span>"+a+"</a>";
			document.getElementById("afterlogged2").style.display="none";
			document.getElementById("afterlogged4").style.display="block";
			document.getElementById("afterlogged4").innerHTML=" <a id='afterlogged4' onclick='doNothing()'><span class='glyphicon glyphicon-log-in' ></span>Logout</a>";
			document.getElementById("target").innerHTML="<h1>You just logged in.</h1>";
			document.getElementById("afterLogShow").style.visibility="visible"; 
		}
		
	}
	}
	xmlhttp.open("GET","retrieval.php?a="+a+"&b="+b,true);
	xmlhttp.send();
	event.preventDefault();
	//alert(a+b);
}
function doNothing()
{
	alert("Nothing");
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
function addData()
{
	document.getElementById("target").innerHTML="<table class='table'><tbody><tr><td><label>Choose the month:</label><td><select id='insertMonth'><option value='1' selected='selected'>January</option><option value='2'>February</option><option value='3'>March</option><option value='4'>April</option><option value='5'>May</option><option value='6'>June</option><option value='7'>July</option><option value='8'>August</option><option value='9'>September</option><option value='10'>Octomber</option><option value='11'>November</option><option value='12'>December</option></select></td></td></tr><tr><td><label>Food</label></td><td><input type='number' value=0 id='insertFood'></input></td></tr><tr><td><label>Rent/House Spendings</label></td><td><input type='number' id='insertHouse' value=0></input></td></tr><tr><td><label>Phone and Internet bills</label></td><td><input type='number' id='insertNet' value=0></input></td></tr><tr><td><label>Extra activities</label></td><td><input type='number' id='insertExtra' value=0></input></td></tr><tr><td><label>Misc</label></td><td><input type='number' id='insertMisc' value=0></input></td></tr><tr><td><label>Student Bills</label></td><td><input type='number' id='insertStudent' value=0></input></td></tr><tr><td><button class='btn btn-success' type='button' id='insertionButton' onclick='insertData()'>Insert Data!</button></td></tr></tbody></table>";
}

