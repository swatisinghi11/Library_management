<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
	<head>
		<?php echo link_tag('bootstrap.min.css')?>
		<?php echo link_tag('bootstrap.css')?>
		<?php echo script_tag('bootstrap.js')?>
		<?php echo script_tag('bootstrap.min.js')?>
		<?php echo script_tag('navigate.js')?>


		<title>JECRC Library</title>
	</head>
	  <body style="background-image:url(<?php echo base_url('assets/images/book.jpg')?>); width: 25%; background-size: 100%;background-position: center center;background-repeat: no-repeat;">
		
	<br>
	<div class="header">
		<br>
			<a href="/Legistify2/index.php/Landing_page"> <div class="tag">
    </div> </a>
    <p style="font-family:Papyrus;font-size:300%;margin-left:110%;letter-spacing:.4em"><strong><span style="color:	#3f3347">J</span><span style="color:#cec846">E</span><span style="color:#29743d">C</span><span style="color:#e5b08d">R</span><span style="color:#e79090">C</span><span style="letter-spacing:.25em"><span style="color:#8e0029">L</span><span style="color:	#008080">i</span><span style="color:#493434">b</span><span style="color:	#f6c62f">r</span><span style="color:	#d02929">a</span><span style="color:#93716c">r</span><span style="color:#25947b">y</span></span> </strong></p>
		</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
			</div>
			<div class="col-md-6">
				<h3 style="font-size:3.3em;font-family:Courier new;margin-left:-5%;margin-top:25%;color:black"> Action: </h3>
				<br><br>
				<button type="button" class="btn btn-default btn-lg" style="margin-top:3%;font-family: Lato;font-size:2em;width:36%" onclick="openURL(8)">Issue</button><br>
				<button type="button" class="btn btn-default btn-lg" style="margin-top:3%;font-family: Lato;font-size:2em;width:36%" onclick="openURL(11)">Return</button><br>
				<button type="button" class="btn btn-default btn-lg" style="margin-top:3%;font-family: Lato;font-size:2em;width:36%" onclick="openURL(9)">Status</button>
				
			</div>
		</div>
	</div>
	<footer style="margin-left:1%;margin-top:5%;font-family: Lato">Copyright &copy; 2016 JECRC, All Rights Reserved. </footer>
	</body>
</html>