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

		<title>Login to Legistify</title>
	</head>
	<body>

		<div class="header">
		<br>
			<a href="/"> 
          <div class="tag">
    <p style="font-family:Papyrus;font-size:300%;margin-left:110%;letter-spacing:.4em"><strong><span style="color:  #3f3347">J</span><span style="color:#cec846">E</span><span style="color:#29743d">C</span><span style="color:#e5b08d">R</span><span style="color:#e79090">C</span><span style="letter-spacing:.25em"><span style="color:#8e0029">L</span><span style="color: #008080">i</span><span style="color:#493434">b</span><span style="color:  #f6c62f">r</span><span style="color:  #d02929">a</span><span style="color:#93716c">r</span><span style="color:#25947b">y</span></span> </strong></p>

          
          </div>
       </a>

		<div class="tag">
			<p style="font-size:35px;font-family:Courier new;margin-left:35%;margin-top:2%;color:#514e4e">Select student.</p>
			<p style="font-size:20px;font-family:Lato;margin-left:40%;color:#514e4e;margin-top:0%">Enter college ID to continue</p>
		</div>

		<div class="container" style="margin-top:2%">
		<div class="row">

			<div class="col-md-3" style="margin-left:3%"></div>
			<div class="col-md-5" style="background-color:#f2effb; box-shadow: 4px 4px 3px #888888;border-radius:3%">
  			<form id="signinform" class="form-horizontal" role="form">
          <br><br>
  
          <div class="form-group">
              <label class="control-label col-sm-2">college ID:</label>
            <div class="col-sm-8">
              <input type="clg_id" class="form-control" id="clg_id" placeholder="Enter clg_id" required>
            </div>
          </div>
    			
    			
    			<div class="form-group">        
      				<div class="col-sm-offset-2 col-sm-10">
        				<button type="submit" class="btn btn-primary" style="width:20%">Search</button>
        				<br><br>
        				<!-- <p> Don't have an account ? <a href="/index.php/Landing_page/signup"> Sign Up</a> </p>  -->
      				</div>
    			</div>
  			</form>
  		</div>
  		</div>	
		</div>
		<footer style="margin-left:1%;margin-top:2%;font-family: Lato">Copyright &copy; 2016 JECRC, All Rights Reserved. </footer>
    <footer style="margin-left:1%;font-family: Lato"> Developed by Swati Singhi </footer>
	</body>
</html>
