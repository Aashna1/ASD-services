<?php include 'top.php'?>
<html>
<head>
<title>STS</title>
<link rel='stylesheet' href= 'select.css'>
<link rel='stylesheet' href= 'font-awesome.css'>
</head>
<body>



<style>
.mySlides {display:none;}
</style>
<div align="center">
<div class="w3-content w3-section" style="max-width:1500px">
  <img class="mySlides" src="images/slide1.jpg" style="width:100%">
  <img class="mySlides" src="images/slide2.jpg" style="width:100%">
  <img class="mySlides" src="images/slide3.jpg" style="width:100%">
</div>

</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

<form>
<table width="100%">
<tr>
<td align="right" >
<div style="border: 1px solid;display:inline-block;" class="hsinput">
<i class="fa fa-location-arrow" aria-hidden="true"></i>
<select name="city" class="hsinput">
	<option>Mumbai
	<option>Delhi
	<option>Chennai
	<option>Bangalore
	<option>Kolkata
	<option>Pune
	<option>Hyderabad
</select>
</div>
</td>
<td align="center">
<div style="border: 1px solid;display:inline-block;" class="hsinput">

<select name="category" class="hsinput">
	<option>Select Category
	<option>CCTV and Home Security
	<option>Computer Services
	<option>Electrical Services
	<option>Appliance Repair
</select>
</div>
</td>
<td align="left">
<div style="border: 1px solid;display:inline-block;" class="hsinput">
<input type="text" name="search" placeholder="Search Services "  class="hsinput">&nbsp&nbsp<i class="fa fa-search" aria-hidden="true"></i>
</div>
</td>
</tr>
</table>
</form>
<div class="heading">
<h1>ASD Services</h1>
</div>

<table width="100%">
<tr>
<td align="center">
	<a href="ComputerService.php"><img src="computer repair.jpg"  height="200" width="200" > </a>
</td>
	<td align="center">
	<a href="ElectricalService.php"><img src="electric repair.jpg"  height="200" width="200" > </a>
</td>
<td align="center">
	<a href="SecurityService.php"><img src="CCTV.png"  height="200" width="200" ></a>
</td>
<td align="center">
	<a href="HomeAppService.php"><img src="appliance.png"  height="200" width="200" ></a>
</td>
</tr>
<tr>
<td align="center"><h3>Computer Services</h3></td>
<td align="center"><h3>Electric Services</h3></td>
<td align="center"><h3>CCTV and Home Security</h3></td>
<td align="center"><h3>Appliance Repair</h3></td>
</tr>

</table>

<div class="heading">
<h1>WHY US?</h1>
</div>
<div>
<table width="100%">
<tr>
<td align="center" width="24%"><img src="trusted professionals.jpg"  height="100" width="100" ></td>
<td width=75px></td>
<td align="center" width="24%"><img src="affordableprice.png"  height="80" width="80" ></td>
<td width=75px></td>
<td align="center" width="24%"><img src="matchesneed.png"  height="80" width="80" ></td>
<td width=75px></td>	
<td align="center" width="24%"><img src="quality assurance.png"  height="80" width="80" ></td>
</tr>
<tr>
<td align="center"><h3>Trusted Professionals</h3></td>
<td width=75px></td>
<td align="center"><h3>Affordable Pricing</h3></td>
<td width=75px></td>
<td align="center"><h3>Matches Your Need</h3></td>
<td width=75px></td>
<td align="center"><h3>Quality Assurance</h3></td>
</tr>
<tr>
<td align="justify">We provide only verified, background checked and high quality professionals.
Having handled leading brands you can trust these trained professionals with your eyes shut.
</td>
<td width=75px></td>
<td align="justify">It is said that quality has no price, but with ASD Services you can get your things done at charges 
which are not only competitive but will also deliver maximum value for your money.
</td>
<td width=75px></td>
<td align="justify" >We match you with the right professionals with the right budget
</td>
<td width=75px></td>
<td align="justify">For us quality comes first.
 It starts with employment of quality professionals and high quality spare parts,
 if any replacement is required, to transparency in the process.
</td>
</tr>

</table>



<div align="center" style="background-color:black; color:white;"><h3>©2017,All Rights Reserved. ASD Services Pvt.Ltd.</h3></div>


<a id="tars-widget-fab" class="fab bounce closed" data-convid="HkqkHV" data-autoopen="5" href="https://feedback.hellotars.com/conv/HkqkHV" target="_blank" style="position:fixed;background-color:#0084ff;z-index:2147483647;width:62px;height:62px;cursor:pointer;border-radius:6px;box-shadow:0 2px 6px 0 rgba(0,0,0,.4);overflow:hidden;padding:0;border:0;bottom:4%;right:30px"><img class="convbot" src="https://tars-file-upload.s3.amazonaws.com/share/img/baso_300.png" convbot-color="#FFFFFF" style="width:100%"></a><script>(function(){var js,fs,d=document,id="tars-widget-script",b="https://tars-file-upload.s3.amazonaws.com/share/";if(!d.getElementById(id)){js=d.createElement("script");js.id=id;js.type="text/javascript";js.src=b+"js/widget.js";fs=d.getElementsByTagName("script")[0];fs.parentNode.insertBefore(js,fs)}})();</script>

<table width="100%">

<tr>
<td width="90%"></td>
<td align="right"><img src="Fbicon.png"  height="20" width="25" ></td>
<td align="right"><img src="Twitter.png"  height="20" width="25" ></td>
<td align="right"><img src="Linkedin.png"  height="20" width="25" ></td>
<td align="right"><img src="instagram.jpg"  height="20" width="25" ></td>
</tr>

</table>
</body>
</html> 








