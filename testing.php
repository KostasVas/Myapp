<!DOCTYPE html>
<html>
<head>
<script>
function showUser(str) {
	
	//document.getElementById("mybutton").addEventListener('click', showUser); 
   str=document.getElementById("zoo").value;
  if (str=="") {
    document.getElementById("txtHint").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("txtHint").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","returning.php?q="+str,true);
  xmlhttp.send();
  event.preventDefault();
}
</script>
</head>
<body>

<form>
<input id="zoo" type="text">
<button type="button" id="mybutton" onclick="showUser()">Click me</button>
</form>
<br>
<div id="txtHint"><b>This text will change</b></div>

</body>
</html>