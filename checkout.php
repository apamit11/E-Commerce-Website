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
<!-- cart -->
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<!-- for bootstrap working -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- animation-effect -->
<!--<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>-->
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
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-grid">
				<div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<ul>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:support@campusestore.co.in">support@campusestore.co.in</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+91 <span>97488</span> 74215</li>
						<li><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i><a href="logout.php">Logout</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="logo-nav">
				<div class="logo-nav-left animated wow zoomIn" data-wow-delay=".5s">
					<h1><a href="index.php"> <img src="user/icon.png" height="100" width="200" class="img-rounded"></a></h1>
				</div
				>
				<div class="logo-nav-left1">
					<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div> 
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php" class="act">Home</a></li>	
							<!-- Mega Menu -->
							
							<!--<li><a href="mail.php">Mail Us</a></li>-->
						</ul>
					</div>
					</nav>
				</div>
				<div class="header-right">
					<div class="cart box_1">
						<a href="checkout.php">
							<h3>
								<i class="fa fa-shopping-cart" style="font-size:40px; color:#d8703f;"></i>
							<?php
							if(isset($_SESSION["username"]))
							{
							    $results1=mysqli_query($conn,"select * from cart where username='$_SESSION[username]'");
							    $count=mysqli_num_rows($results1);
							    ?>
							    <a href="checkout.php" class="icon-shopping-cart" style="font-size: 25px">
                                     <asp:Label ID="lblCartCount" runat="server" CssClass="badge badge-warning"  ForeColor="White"/><?php echo $count; ?></a>
							    <?php
							}
							?>
							</h3>
						</a>
						<div class="clearfix"> </div>
					</div>	
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //header -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Checkout Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- checkout -->
	<div class="checkout">
		<div class="container">
				<?php
					$query="select * from cart where username='$_SESSION[username]'";
					$result=mysqli_query($conn,$query);
					$count=mysqli_num_rows($result);
					$i=0;
				?>
			<h3 class="animated wow slideInLeft" data-wow-delay=".5s">Your shopping cart contains: <span><?php echo $count; ?> Products</span></h3>
			<div class="checkout-right animated wow slideInUp" data-wow-delay=".5s">
				<form method="post" action="">
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>SL No.</th>	
							<th>Product</th>
							<th>Stream</th>
							<th>Semester</th>
							<th>Quantity</th>
							<th>Delivery Option</th>
							<th>Remove</th>
						</tr>
					</thead>
					<?php
						while ($var=mysqli_fetch_assoc($result)) 
					{
						$id=$var["id"];
						$i=$i+1;
						$_SESSION["i"]=$i;
						$pro=$var["img"];
						$stream=$var["stream"];
						$_SESSION["stream"]=$stream;
						$sem=$var["sem"];
						$_SESSION["sem"]=$sem;
					      ?>
					<tr class="rem1">
						<td class="invert"><?php echo $i; ?></td>
						<td class="invert-image"><a href="#"><img src="images/org/<?php echo $pro; ?>" class="img-responsive" /></a></td>
						<td class="invert">
							 <?php echo $stream; ?>
						</td>
						<td class="invert"><?php echo $sem; ?></td>
						<td class="invert">
						<select class="form-control" name="sel1">
							<option>Quantity</option>
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
							<option>6</option>
							<option>7</option>
							<option>8</option>
							<option>9</option>
							<option>10</option>
						</select>
					</td>
						<td class="invert">
						<select class="form-control" name="sel2">
							<option>Delivery option</option>
							<!--<option>On Address</option>-->
							<option>At your Campus</option>
						</select>
						</td>
						<td class="invert">
								<a style='font-weight: bold;' class="btn btn-danger" href="remove.php?id=<?php echo $id; ?>">remove</a>
						</td>
					</tr>
				<?php  
					}
				?>
				</table>
				<br>
					<center><input type="submit" name="submit1" class="btn btn-primary" value="Continue"></center>
					</form>
				<?php
					if(isset($_POST["submit1"]))
					{
						$qty=$_POST["sel1"];
						$qty=mysqli_real_escape_string($conn,$qty);
						$_SESSION["qty"]=$qty;
						$dly=$_POST["sel2"];
						$dly=mysqli_real_escape_string($conn,$dly);
						$_SESSION["dly"]=$dly;
						if($qty=="Quantity" || $dly=="Delivery option")
						{
							echo '<div class="container"><center><div style="margin-top:25px;" class="alert alert-danger"><center>Quantity and Delivery option should not empty</center></div></center></div>';
						}	
						else
						{				
						$query="select * from cart";
						$result=mysqli_query($conn,$query);
						$i=0;
						$sum=0;
						$sum1=0;
						?>
			<div class="checkout-left">	
				<div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
					<h4>Billing details</h4>
					<ul>
						<?php
						$var=mysqli_fetch_assoc($result);
						$i=$i+1;
						$stream=$var["stream"];
						$sem=$var["sem"];
						$query1="select * from admin where stream='$stream' && sem='$sem'";
						$results=mysqli_query($conn,$query1);
						while ($var1=mysqli_fetch_assoc($results)) 
						{
							$price=$var1["price"];
							$tot=$qty*$price;
							$_SESSION["price"]=$tot;
							$price1=$var1["sel_price"];
							$tot1=$qty*$price1;
							$_SESSION["price1"]=$tot1;
						}
							$sum1=$sum1+$_SESSION["price1"];
							$_SESSION["sum1"]=$sum1;
							$sum=$sum+$_SESSION["price"];
							$_SESSION["sum"]=$sum;
						if($dly=="On Address")
						{
						 ?>
						<b><li>Product<?php echo $i; ?> <i>-</i> <span><?php echo $_SESSION["price"]; ?></span></li></b>
						<?php 
						}
						elseif($dly=="At your Campus")
						{
							?>
						<b><li>Product<?php echo $i; ?> <i>-</i> <span><?php echo $_SESSION["price1"]; ?></span></li></b>
						<?php 
						}
						?>
						<hr>
						<?php  
							if ($dly=="On Address")
							{
								?>
								<b><li>Total <i>-</i> <span><?php echo $_SESSION["sum"]; ?></span></li></b>
								<?php
							}
							elseif($dly=="At your Campus")
							{
								?>
								<b><li>Total <i>-</i> <span><?php echo $_SESSION["sum1"]; ?></span></li></b>
								<?php
							}
						?>
						
					</ul>
						<?php 
							if($_SESSION["dly"]=="On Address")
							{
								?>
									<br><center><input type="submit" name="submit2" onClick="window.location = 'user/order1.php'" class="btn btn-success" value="Proceed to order"></center>
								<?php
							}
							elseif($_SESSION["dly"]=="At your Campus")
							{
								?>
									<br><center><input type="submit" name="submit2" onClick="window.location = 'user/ordercampus.php'" class="btn btn-success" value="Proceed to order"></center>
								<?php
							}
						}
						?>
					<?php
					}
				?>
				</div>
				<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
					<a href="index.php"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
		</div>
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