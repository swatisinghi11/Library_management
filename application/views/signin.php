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
    <?php echo script_tag('signin.js')?> 

		<title>Login to JECRC Library</title>
	</head>
	<body>

		<div class="header">
    <br>
      <a href="/"> 
          <div class="tag">
            <p style="font-size:300%;font-family:Courier new;margin-left:30%;color:#514e4e"><span style="margin-top:-0.5%; font-family:Papyrus,sans-serif;font-size:100%;letter-spacing:.4em"><strong><span style="color:  #3f3347">J</span><span style="color:#cec846">E</span><span style="color:#29743d">C</span><span style="color:#e5b08d">R</span><span style="color:#e79090">C</span><span style="letter-spacing:.25em"><span style="color:#8e0029">L</span><span style="color: #008080">i</span><span style="color:#493434">b</span><span style="color:  #f6c62f">r</span><span style="color:  #d02929">a</span><span style="color:#93716c">r</span><span style="color:#25947b">y</span></span> </strong></p> 

             <!-- <p style="font-size:35px;font-family:Courier new;margin-left:40%;color:#514e4e"><span style="margin-top:-0.5%; font-family:Papyrus,sans-serif;font-size:50px;letter-spacing:4px"><strong><span style="color:#cc364a">L</span><span style="color:blue">e</span><span style="color:green">g</span><span style="color:brown">i</span><span style="color:orange">s</span><span style="color:#420217">t</span><span style="color:green">i</span><span style="color:brown">f</span><span style="color:blue">y</span></strong></span>   </p> -->
          </div>
       </a>
    <div class="tag">
      <!-- <p style="font-size:35px;font-family:Courier new;margin-left:29%;margin-top:2%;color:#514e4e">Let's find the best lawyers.</p> -->
      <p style="font-size:20px;font-family:Lato;margin-left:40%;color:#514e4e;margin-top:5%">Sign in to continue to JECRC Library</p>
    </div>

    <div class="container" style="margin-top:2%">
    <div class="row">

      <div class="col-md-3" style="margin-left:3%"></div>
      <div class="col-md-5" style="background-color:#f2effb; box-shadow: 4px 4px 3px #888888;border-radius:3%">
        <form id="signinform" class="form-horizontal" role="form">
          <br><br>
  
          <div class="form-group">
              <label class="control-label col-sm-2">Username:</label>
            <div class="col-sm-8">
              <input type="username" class="form-control" id="username" placeholder="Enter Username" required>
            </div>
          </div>
          <div class="form-group">
              <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-sm-8">          
              <input type="password" class="form-control" id="password" placeholder="Enter password" required>
              </div>
          </div>
          <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                    <label><input type="checkbox" id="remember" value="remember"> Remember me</label>
                </div>
              </div>
          </div>
          <div class="form-group">        
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary" id="button" style="width:20%">Sign In</button>
                <br><br>
                <!-- <p> Don't have an account ? <a href="/Legistify/index.php/Landing_page/signup"> Sign Up</a> </p>  -->
              </div>
          </div>
        </form>
      </div>
      </div>  
    </div>
    <footer style="margin-left:1%;margin-top:10%;font-family: Lato">Copyright &copy; 2016 JECRC, All Rights Reserved. </footer>
    <footer style="margin-left:1%;font-family: Lato"> Developed by Swati Singhi </footer>
  </body>
</html>
