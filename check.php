<?php
session_start();
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
<title>Campus e-Store</title>
<!-- for-mobile-apps -->
<link rel="icon" href="images/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
	<script src="js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<style type="text/css">
	select:hover
	{
		cursor: pointer;
	}
    #lblCartCount {
    font-size: 15px;
    background: green;
    color: white;
    font-weight:bold;
    padding: 0 5px;
    vertical-align: top;
}
</style>
<!-- //animation-effect -->
</head>
	
<body>
	<?php
	if(!isset($_SESSION["username"]))
{
	?>
  <script type="text/javascript">
    window.location="login1.php";
  </script>
  <?php
  } 
else
{
    ?>
    <div class="container">
      <div class="header-grid">
        <div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
          <ul>
            <a href="index.php"><img src="user/icon.png" height="100" width="200" class="img-rounded"></a>
            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:support@campusestore.co.in">support@campusestore.co.in</a></li>
            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+91 97488 74215</li>
            <li><i class="glyphicon glyphicon-home" aria-hidden="true"></i><a href="index.php">Home</a></li>
            <li><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i><a href="logout.php">Logout</a></li>
          </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
        </div>
        <?php
						if(isset($_POST["submit2"]))
						{
						    $qty=$_POST["sel1"];
						    $qty=mysqli_real_escape_string($conn,$qty);
						    $_SESSION["qty2"]=$qty;
						    $del=$_POST["sel2"];
						    $del=mysqli_real_escape_string($conn,$del);
						    $_SESSION["del"]=$del;
						    if($qty=="Quantity" || $del=="Delivery option")
						    {
						        echo "<div style='color:red; font-size:20px;font-weight:bold;'><center>*Please fill both the fields</center></div>";
						    }
						    else
					    	{
						    $_SESSION["stream1"]=$_SESSION["stream"];
						    $_SESSION["sem1"]=$_SESSION["sem"];
						    $_SESSION["price22"]=($qty)*($_SESSION["price"]);
						    $_SESSION["sel_price22"]=($qty)*($_SESSION["sel_price"]);
						}
						?>
						
            <div class="checkout-left">	
            <div style="float: none; margin: 0 auto;" class="col-lg-5 col-center">
			<table class="table table-bordered" >
				<div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
				    <tr style="background-color:orange;">
				        <td>
				    <center><h4 style="color:white; font-weight:bold;"> Billing Details </h4></center>
				    </td></tr>
						<?php 
							if($del=="At your Doorstep")
							{
							    	?>
							    	<tr><td>
							    	    <center>
							    <b><li style="list-style-type:none;">Product cost <i>-</i> <span><?php echo  $_SESSION["price22"]; ?></span></li></b></center></td></tr>
							  <tr><td><center>  
							  <b><li style="list-style-type:none;">Total cost <i>-</i> <span><?php echo  $_SESSION["price22"]; ?></span></li></b></center></td></tr>
							  
									<tr><td><center><input type="submit" name="submit3" onClick="window.location = 'user/order11.php'" class="btn btn-success" value="Proceed to order"></center></td></tr>
								<?php
							}
							elseif($del=="At your Campus")
							{
								?>
								<tr><td>
							    	    <center>
							    <b><li style="list-style-type:none;">Product cost <i>-</i> <span><?php echo  $_SESSION["sel_price22"]; ?></span></li></b></center></td></tr>
							  <tr><td><center>  
							  <b><li style="list-style-type:none;">Total cost <i>-</i> <span><?php echo  $_SESSION["sel_price22"]; ?></span></li></b></center></td></tr>
							  <tr><td>
									<center><input type="submit" name="submit3" onClick="window.location = 'user/ordercampus1.php'" class="btn btn-success" value="Proceed to order"></center>
									</td></tr>
								<?php
							}
						}
						?>
				</div></table></div>
				<div class="clearfix"> </div>
			</div>
<!-- //checkout -->
<!-- footer -->
	<div class="footer">
    <div class="container">
      <div class="footer-grids">
        <div class="col-md-5 footer-grid animated wow slideInLeft" data-wow-delay=".5s">
          <h3>About Us</h3>
          <p>Campus e-Store has come into the face with a charm and believe in sustaining and making it easy for the students to have access to a gateway which can help them in Purchasing academic orientated books without any hassle .
			So, here we are just a click away, free of any Travel Cost, Bargaining issues and the Travel Time providing you with the fastest possible delivery rate.</p>
        </div>
        <div style="float: right;" class="col-md-3 footer-grid animated wow slideInLeft" data-wow-delay=".6s">
          <h3>Contact Info</h3>
          <ul>
            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>9A,Chowringee terrace,<span>Gokhale Road, Bhawanipore, Kolkata.</span></li>
            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:support@campusestore.co.in">support@campusestore.co.in</a></li>
            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+91 97488 74215</li>
          </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
        <center><p>&copy 2018 Campus e-Store. All rights reserved | Design by &nbsp;&nbsp;<a href="https://www.facebook.com/piyushkumar.tiwari.39">Piyush Kumar Tiwari</a></p></center>
      </div>
    </div>
  </div>

<script src="js/jquery.min.js"></script>  
<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
<!-- //footer -->
<?php } ?>
</body>
</html>