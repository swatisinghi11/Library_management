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
    <?php echo script_tag('add.js')?>


		<link rel="icon"  type="image/png" href="public/images/main_logo.png">
		<title>Student Details</title>
	</head>
	<body>

    <div style="background-color:#f2effb;">
      <br>
		  <div class="pull-right" style="margin-right:2%;">
        <br>
		    <button type="submit" class="btn btn-info" style="width:100%" onclick="openURL(4)">Search</button>
      </div>
    </div>
		<div class="tag">
            <p style="font-size:300%; margin-top:3%;font-family:Courier new;margin-left:30%;color:#514e4e"><span style="margin-top:-0.5%; font-family:Papyrus,sans-serif;font-size:100%;letter-spacing:.4em"><strong><span style="color:  #3f3347">J</span><span style="color:#cec846">E</span><span style="color:#29743d">C</span><span style="color:#e5b08d">R</span><span style="color:#e79090">C</span><span style="letter-spacing:.25em"><span style="color:#8e0029">L</span><span style="color: #008080">i</span><span style="color:#493434">b</span><span style="color:  #f6c62f">r</span><span style="color:  #d02929">a</span><span style="color:#93716c">r</span><span style="color:#25947b">y</span></span> </strong></p> 

			<!-- <p style="font-size:35px;font-family:Courier new;margin-left:28%;color:#514e4e">Create your <span style="margin-top:-0.5%; font-family:Papyrus,sans-serif;font-size:50px;letter-spacing:4px"><strong><span style="color:#cc364a">L</span><span style="color:blue">e</span><span style="color:green">g</span><span style="color:brown">i</span><span style="color:orange">s</span><span style="color:#420217">t</span><span style="color:green">i</span><span style="color:brown">f</span></strong></span><span style="color:blue">y</span> account</p> -->
		</div>

		<div class="container" style="margin-top:2%">
		<div class="row">

			<div class="col-md-3" style="margin-left:3%"></div>
			<div class="col-md-5" style="background-color:#f2effb; box-shadow: 4px 4px 3px #888888;border-radius:3%">
  			<form class="form-horizontal" role="form" id="signupform">
          <br><br>

          		<div class="form-group">
      				<label class="control-label col-sm-2">Name:</label>
  					<div class="col-sm-4">
    					<input type="name" class="form-control" id="first" placeholder="First Name" required>
  					</div>
  					<div class="col-sm-4">
    					<input type="name" class="form-control" id="second" placeholder="Last Name" required>
  					</div>
    			</div>

          <div class="form-group">
              <label class="control-label col-sm-2">Clg_id:</label>
            <div class="col-sm-8">
              <input type="clg_id" class="form-control" id="clg_id" placeholder="Enter clg_ID" required>
            </div>
          </div>

    			<div class="form-group">
      				<label class="control-label col-sm-2" for="email">Branch</label>
  					<div class="col-sm-8">
    					<input type="branch" class="form-control" id="branch" placeholder="Enter branch" required>
  					</div>
    			</div>

    			<div class="form-group">
      				<label class="control-label col-sm-2" for="pwd">B.tech year:</label>
  					<div class="col-sm-8">          
    					<input type="year" class="form-control" id="year" placeholder="Enter year" required>
      				</div>
    			</div>

    			
              
        
    			<div class="form-group">        
      				<div class="col-sm-offset-2 col-sm-10">
        				<div class="checkbox">
          					<!-- <label><input type="checkbox" required> I agree to the Legistify <a href="/termsAndPrivacy">Terms of services </a>and <a href="/termsAndPrivacy">Privacy Policy</a>.</label> -->
        				</div>
      				</div>
    			</div>

    			<div class="form-group">        
      				<div class="col-sm-offset-2 col-sm-10">
        				<button type="submit" class="btn btn-primary" style="width:20%;margin-left:10%;margin-top:-3%">Add</button>
      				</div>
    			</div>

  			</form>
  		</div>
  		</div>	
		</div>
		<footer style="margin-left:1%;margin-top:7.5%;font-family: Lato">Copyright &copy; 2016 JECRC, All Rights Reserved. </footer>
	</body>
</html>