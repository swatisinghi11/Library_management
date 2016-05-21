<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
  <head>
  <?php echo link_tag('bootstrap.min.css')?>
    <?php echo link_tag('bootstrap.css')?>
    <?php echo script_tag('jquery-1.11.1.js')?>
    <?php echo script_tag('bootstrap.js')?>
    <?php echo script_tag('bootstrap.min.js')?>
    <?php echo script_tag('navigate.js')?>
    <?php echo script_tag('selected_student.js')?>


    <title>Library</title>
  </head>
  <body>
		<div class="row">
			<div class="col-md-9" style="border-bottom: thin solid #d3d3d3;height:15%">
				<br>
    			<p style="font-family:Papyrus;font-size:200%;margin-left:20%;text-align:center;letter-spacing:.4em"><strong><span style="color:	#3f3347">J</span><span style="color:#cec846">E</span><span style="color:#29743d">C</span><span style="color:#e5b08d">R</span><span style="color:#e79090">C</span><span style="letter-spacing:.25em"><span style="color:#8e0029">L</span><span style="color:	#008080">i</span><span style="color:#493434">b</span><span style="color:	#f6c62f">r</span><span style="color:	#d02929">a</span><span style="color:#93716c">r</span><span style="color:#25947b">y</span></span> </strong></p>
			</div>

			

			<div class="col-md-3" style=" border-bottom: thin solid #d3d3d3; height:71px">
				<div class="row">
					<div class="col-md-6">
						
					</div>
					<div class="col-md-4">
						<br>
						<button type="submit" class="btn btn-info" style="width:100%" onclick="logout()"> Log Out</button>
					</div>
				</div>
				
			</div>
		</div>


		<div class="row">
			<div class="col-md-3" style="border-left:thin solid #d3d3d3;background-color:#ffffff;height:39.4em;border-right:thin solid #d3d3d3"></div>
			<div class="col-md-1" style="border-left:thin solid #d3d3d3;background-color:#ffffff;height:4em;border-bottom: thin solid #d3d3d3">
				<p style="text-align:center">S.No.</p>
			</div>
			<div class="col-md-1" style="border-left:thin solid #d3d3d3;background-color:#ffffff;height:4em;border-bottom: thin solid #d3d3d3">
				<p style="text-align:center">Book number</p>
			</div>
			<div class="col-md-3" style="border-left:thin solid #d3d3d3;background-color:#ffffff;height:4em;border-bottom: thin solid #d3d3d3">
				<p style="text-align:center">Book name</p>
			</div>
			<div class="col-md-1" style="border-left:thin solid #d3d3d3;background-color:#ffffff;height:4em;border-bottom: thin solid #d3d3d3">
				<p style="text-align:center">Issued on</p>
			</div>
			<div class="col-md-1" style="border-left:thin solid #d3d3d3;background-color:#ffffff;height:4em;border-bottom: thin solid #d3d3d3">
				<p style="text-align:center">Ideal Return date</p>
			</div>
			<div class="col-md-1" style="border-left:thin solid #d3d3d3;background-color:#ffffff;height:4em;border-bottom: thin solid #d3d3d3">
				<p style="text-align:center">Actual Return date</p>
			</div>
			<div class="col-md-1" style="border-left:thin solid #d3d3d3;background-color:#ffffff;height:4em;border-bottom: thin solid #d3d3d3">
				<p style="text-align:center">Fine</p>
			</div>
		</div>
			

	</body>
</html>