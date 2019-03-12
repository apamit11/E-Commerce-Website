<?php
session_start();
include "connection.php";
$stream_pro=$_GET["stream"];
?>
<!DOCTYPE html>
<html>
<head>
<title>Campus E-store</title>
<!-- for-mobile-apps -->
<link rel="icon" href="images/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- timer -->
<link rel="stylesheet" href="css/jquery.countdown.css" />
<!-- //timer -->
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
	
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="header-grid">
				<div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
					<ul>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:support@campusestore.co.in">support@campusestore.co.in</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+91 97488 74215</li>
					<?php
						if(isset($_SESSION["username"]))
						{
							?>
							<li><i class="glyphicon glyphicon-account" aria-hidden="true"></i><a href="user/index.php">My Account</a></li>
							<li><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i><a href="logout.php">Logout</a></li>
							<?php
						}
						else
						{
							?>
							<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="login1.php">Login</a></li>
						    <li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="register.php">Register</a></li>
							<?php
						}
					?>
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

<!-- collections -->
<?php
	$query="select * from admin where stream='$stream_pro'";
    $result=mysqli_query($conn,$query);
    $count=mysqli_num_rows($result);

?>
	<div class="new-collections">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s"><?php echo strtoupper($stream_pro); ?> Organizers</h3>
			<div class="new-collections-grids">
				<?php
				if($count==0)
				{
					?>
						<center><div style="color:red; font-weight: bold; font-size: 25px;">*Not in stock</div></center>
					<?php
				}
				while($var=mysqli_fetch_assoc($result))
			    {
			    	$id=$var["id"];
			    	$img=$var["image"];
			    	$stream=$var["stream"];
			    	$sem=$var["sem"];
			    	$original=$var["original_price"];
			    	$price=$var["price"];
			    	$sel_price=$var["sel_price"];
			    	?>
				<div class="col-md-3 new-collections-grid">
					<div class="new-collections-grid1 animated wow slideInUp" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="single.php" class="product-image"><img src="images/org/<?php echo $img; ?>" alt=" " class="img-responsive" /></a>
							<div class="new-collections-grid1-image-pos">
								<a href="single.php?id=<?php echo $id; ?>">Quick View</a>
							</div>
							</div>
						<h4><a href="single.php">Stream:<?php echo $stream; ?></a></h4>
						<p style="font-size: 17px; color: black;">SEMESTER:<?php echo $sem; ?></p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p>
							    <strike style="padding-right:30px;">
							        
							   <img style="margin-bottom:3px;" height="20" width="25" src="rupees.png"> <?php echo $original; ?></strike>
							    <img style="margin-bottom:3px;" height="20" width="25" src="rupees.png"><?php echo $price; ?>
								<?php
								if(isset($_SESSION["username"]))
								{
									?>
										<a class="item_add" href="cart.php?id=<?php echo $id; ?>">add to cart </a></p>
									<?php
								}
								else
								{
									?>
										<a class="item_add" href="login1.php">add to cart </a></p>
									<?php
								}
								?>
								
						</div>
					</div>
				</div>
				<?php
					}
				?>
			</div>
		</div>
	</div>
<!-- //collections -->
<!-- new-timer -->

<!-- //new-timer -->
<!-- collections-bottom -->
	
<!-- //collections-bottom -->
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
            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Panchpota,<span>Garia Kolkata.</span></li>
            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:support@campusestore.co.in">support@campusestore.co.in</a></li>
            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+91 97488 74215</li>
          </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
        <center><p>&copy 2016 Best Store. All rights reserved | Design by &nbsp;&nbsp;<a href="https://www.facebook.com/piyushkumar.tiwari.39">Piyush kumar tiwari</a></p></center>
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
</body>
</html>