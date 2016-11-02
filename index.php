<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php
//	header("location:safehavenregistration.php");
//	ob_start();
	session_start();
//	$_SESSION['Username'] = $_POST['Username'];
//		session_start();
//		$_SESSION['FirstName'] = $_POST['FirstName'];
//?>	

<head>
	
	 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd4s12YPZmYZNQwaPTHF0Dcx8ZClsMVqg&callback=initMap"
  type="text/javascript"></script>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>SafeHaven.Community</title>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>

 	<!--<link rel="stylesheet" href="stylesheets/indextest.css">-->
 	<link rel="stylesheet" href="stylesheets/indextemplate.css">
	<?php include 'dbLogin.php' ?>
</head>
<body>
	<script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:700px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="http://embedgooglemaps.com">embed google maps</a></small></div><div><small><a href="https://freedirectorysubmissionsites.com/">visit site</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:10,center:new google.maps.LatLng(51.6681876233092,-0.2335017082031099),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(51.6681876233092,-0.2335017082031099)});infowindow = new google.maps.InfoWindow({content:'<strong>Title</strong><br>London, United Kingdom<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
    <!----<form method="post" action="mail.php">
    <input name="Signin" type="submit"/>
    </form>----->
    <div class="header">
    	<label class="title">Safe Haven Our Women</label>
		
			<li><a href="/safehavenregistration.php">Safe Haven Application</a></li>
 		 	<li><a href="/registration.php">User Application</a></li>
			<li><a href="/About.php">About Us</a></li>
			<li><a href="/Contact.php">Contact Us</a></li>
			<li><a href="/index.php">Home</a></li>
		</ul> 
	</div>
    

	<div class="loginform1">
	
		<h1>SAFE HAVEN COMMUNITY</h1><hr><br />
			<div id="loginauthority">
				Login into SHC
			</div>
			
			<div id="loginsafehaven">
				Manage my Safehouse
			</div> <br /><br />
		
			<div id="authorityform">
				<form method="post" action="checkloginauthority.php">
				<h3>Login to place someone into a safe haven</h3><br />
				<?php $sql = "SELECT LastName FROM `User` WHERE UserID = 1\n". " LIMIT 0, 30 "; ?>
					
				<input name="Username" type="text" placeholder="Email"/><br />
				<input name="Password" type="password" placeholder="Password"/><br />
				<input name="Signin" class="signinbutton" type="submit" value="&nbsp Sign In &nbsp"/><br />
			&emsp;&emsp;&emsp;&emsp;<a href="/registration.php">User Application</a> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href="/safehavenregistration.php">Safehouse Application</a></form>
			</div>
			
			<div id="shform">
				<form method="post" action="checkloginsafehaven.php">
				<h3>Enter your details to login as a safe haven owner</h3><br />
				<?php $sql = "SELECT LastName FROM `User` WHERE UserID = 1\n". " LIMIT 0, 30 "; ?>
				
				<input name="Username" type="text" placeholder="Email"/><br />
				<input name="Password" type="password" placeholder="Password"/><br />
				<input name="Signin" class="signinbutton" type="submit" value="&nbsp Sign In &nbsp"/><br />
			&emsp;&emsp;&emsp;&emsp;<a href="/registration.php">User Application</a> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; <a href="/safehavenregistration.php">Safehouse Application</a></form>
			</div>
	</div>
			
			
			</center>
			
			
			
		<!--	<a href="/registration.php">Apply as authority</a> | <a href="/safehavenregistration.php">Apply to be a safe haven</a> -->
		    
			</center>
</div>
<!--<div class="applyform">
			    <table>
			        <td>
			           <button class="safehavenyes">Safe Haven Application</button> 
			         </td><td>&nbsp&nbsp</td>
			         <td>
			           <button class="registeryes">User Application</button><br />
			        </td>
			    </table>
			    <div class="moreinfo"></div>
			</div>
</body>
</div>-->



<!----<script>
$(document).ready(function(){
    $(".safehavenyes").click(function(){
        $(".moreinfo").animate({
            height: '+100px'
        });
        $( ".moreinfo" ).empty();
        $( ".moreinfo" ).append( "<br /><br /><br />Are you willing to offer your house as a safe haven? If so, click here to register: <a href='/safehavenregistration.php'><button>Register</button></a>" );
    });
    
    $(".registeryes").click(function(){
        $(".moreinfo").animate({
            height: '+100px'
        });
        $( ".moreinfo" ).empty();
        $( ".moreinfo" ).append( "<br /><br /><br />Are you willing to become a registered user with the responsibility of adding clients to the server? If so, click here to register: <a href='/registration.php'><button>Register</button></a>" );
    });
    
    
});
</script>---->


<script>
	$("#loginauthority").css('border-bottom', '3px solid black');
	
	$( "#loginsafehaven" ).click(function() {
    	$("#authorityform").css('height', '0px');
		$("#authorityform").css('visibility', 'hidden');
		$("#shform").css('visibility', 'VISIBLE');
		$("#shform").css('height', 'auto');
    	$("#loginsafehaven").css('border-bottom', '3px solid black');
    	$("#loginauthority").css('border-bottom', 'none');
	});


	$( "#loginauthority" ).click(function() {
    	$("#shform").css('height', '0px');
		$("#shform").css('visibility', 'hidden');
		$("#authorityform").css('visibility', 'VISIBLE');
    	$("#loginauthority").css('border-bottom', '3px solid black');
    	$("#loginsafehaven").css('border-bottom', 'none');
		$("#authorityform").css('height', 'auto');
	});   
	
</script>

<footer>
<br />
<table class="footertable">
	<tr>
	   <td class="lightertext">SHOW<br /><hr></td>
		<td class="lightertext">ABOUT<br /><hr></td>
		<td class="lightertext">HELP<br /><hr></td>
		<td class="lightertext">CONNECT<br /><hr></td>  
	</tr>
	<tr>
		<td class="darkertext">
			<br />Home<br />
			<a href="/registration.php">User Registration</a><br />
			<a href="/safehavenregistration.php">Safe Haven Registration</a>
		</td>
		<td class="darkertext">
			<br /><a href="/About.php">About Us</a><br />
			Company Site
		</td>
		
		<td class="darkertext">
			<br /><a href="Contact.php">Contact Us</a><br />
			Instructions
		</td>
		
		<td class="darkertext">
		<br />	Facebook<br />
			Twitter
		</td>
	</tr>
</table>
</footer>

</html>
