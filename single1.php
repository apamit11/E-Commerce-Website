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
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
<script src="js/wow.min.js"></script>-->
<!-- //animation-effect -->
<style>
    #lblCartCount {
    font-size: 15px;
    background: green;
    color: white;
    font-weight:bold;
    padding: 0 5px;
    vertical-align: top;
}
.item_add:hover
{
    cursor:pointer;
}
select:hover
{
    cursor:pointer;
}
</style>
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
					<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+91 97488 74215</li>
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
				<li class="active">Single Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- single -->
<?php
	$query="select * from proceed";
    $result=mysqli_query($conn,$query);
    while($var=mysqli_fetch_assoc($result))
			    {
			    	$id=$var["id"];
			    	$img=$var["img"];
			    	$_SESSION["img"]=$img;
			    	$stream=$var["stream"];
			    	$_SESSION["stream"]=$stream;
			    	$sem=$var["sem"];
			    	$_SESSION["sem"]=$sem;
			    	$price=$var["price"];
			    	$_SESSION["price"]=$price;
			    	$original=$var["original"];
			    	$_SESSION["original"]=$original;
			    	$sel_price=$var["sel_price"];
			    	$_SESSION["sel_price"]=$sel_price;
?>
	<div class="single">
		<div class="container">
			
			<div class="col-md-10 single-right">
				<div class="col-md-5 single-right-left animated wow slideInUp" data-wow-delay=".5s">
					<div class="flexslider">
						<ul class="slides">
							<li data-thumb="images/si.jpg">
								<div class="thumb-image"> <img src="images/org/<?php echo $img; ?>" data-imagezoom="true" class="img-responsive">
								 </div>
							</li>
						</ul>
					</div>
					<!-- flixslider -->
						<script defer src="js/jquery.flexslider.js"></script>
						<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>
					<!-- flixslider -->
				</div>
				<div class="col-md-7 single-right-left simpleCart_shelfItem animated wow slideInRight" data-wow-delay=".5s">
					<h4><?php echo $stream;?> <?php echo $sem;?><?php if($sem==1){echo "st";} elseif($sem==2){ echo "nd"; } elseif($sem==3){ echo "rd"; } else { echo "th"; } ?> Semester Makaut(WBUT) Organizer</h4>
					<h4><span class="item_price">
					    <i style="font-size:22px;" class="fa fa-rupee"></i> <strike><?php echo $original; ?></strike></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i style="font-size:22px;" class="fa fa-rupee"></i> <?php echo $price; ?></h4>
					<div class="description">
						<h5><i>Description</i></h5>
						<p>This Organizer is a very useful guide book for the examination purpose.Which helps Student to score  good marks.</p>
					</div>
					<div class="color-quality">
						<div class="color-quality-right">
							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="occasion-cart">
						<?php
						if(isset($_SESSION["username"]))
						{
							?>
							<a class="item_add" data-toggle="modal" data-target="#myModal">Buy now </a>&nbsp;&nbsp;
						    <a class="item_add" href="cart1.php">Add to cart </a>
							<?php
						}
						else
						{
							?>
							<a class="item_add" href="login.php">Login to proceed</a>
							<?php
						}

						 ?>
					</div>
					
				</div><?php } ?>
	<div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
         <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Fill Order Details</h4>
        </div>
        <div class="modal-body">
            <form method="post" action="check.php">
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
						</select><br>
						<select class="form-control" name="sel2">
							<option>Delivery option</option>
							<!--<option>At your Doorstep</option>-->
							<option>At your Campus</option>
						</select>
						<br>
						<center><input type="submit" class="btn btn-info" name="submit2" value="Proceed"></center>
                </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
        </div>
      
        </div>
    </div>
				<div class="clearfix"> </div>
				<div class="bootstrap-tab animated wow slideInUp" data-wow-delay=".5s">
					<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						<ul id="myTab" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
								<ul class="dropdown-menu" role="menu" aria-labelledby="myTabDrop1" id="myTabDrop1-contents">
									<li><a href="#dropdown1" tabindex="-1" role="tab" id="dropdown1-tab" data-toggle="tab" aria-controls="dropdown1">cleanse</a></li>
									<li><a href="#dropdown2" tabindex="-1" role="tab" id="dropdown2-tab" data-toggle="tab" aria-controls="dropdown2">fanny</a></li>
								</ul>
						</ul>
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home" aria-labelledby="home-tab">
								<h5>Product Brief Description</h5>
								<p>Organizer is a very useful guide book for the examination purpose.Last few years questions with answers are organized chapterwise,so that students can get the idea of the chapters weightage & depth. Focus of the students are more pinpointed and accurate.</span></p>
							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //single -->
<!-- single-related-products -->
	<!--<div class="single-related-products">
		<div class="container">
			<h3 class="animated wow slideInUp" data-wow-delay=".5s">Related Organizer</h3>
			<p class="est animated wow slideInUp" data-wow-delay=".5s">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
				deserunt mollit anim id est laborum.</p>
				<?php
				$query="select * from admin where id='$id'";
			    $result=mysqli_query($conn,$query);
			    $var=mysqli_fetch_assoc($result);
			    $stream=$var["stream"];
			    $query1="select * from admin where stream='$stream'";
			    $result1=mysqli_query($conn,$query1);
			    while($var1=mysqli_fetch_assoc($result1))
			    {
			    	$id=$var["id"];
			    	$img=$var["image"];
			    	$stream=$var["stream"];
			    	$sem=$var["sem"];
			    	$original=$var["original_price"];
			    	$price=$var["price"];
			    	$sel_price=$var["sel_price"];
			    
			?>
			<div class="new-collections-grids">
				<div class="col-md-3 new-collections-grid">
					<div class="new-collections-grid1 animated wow slideInLeft" data-wow-delay=".5s">
						<div class="new-collections-grid1-image">
							<a href="single.php" class="product-image"><img src="images/org/<?php echo $img; ?>" alt=" " class="img-responsive"></a>
							<div class="new-collections-grid1-image-pos">
								<a href="single.php">Quick View</a>
							</div>
							
						</div>
						<h4><a href="single.php">Stream:<?php echo $stream; ?></a></h4>
						<p>Vel illum qui dolorem eum fugiat.</p>
						<div class="new-collections-grid1-left simpleCart_shelfItem">
							<p><i><?php echo $price; ?></i> <span class="item_price"><?php echo $sel_price; ?></span><a class="item_add" href="#">add to cart </a></p>
						</div>
					</div>
				</div>
				<?php
                   }
				?>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>-->
<!-- //single-related-products -->
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
        <center><p>&copy 2018 Campus e-Store. All rights reserved | Design by &nbsp;&nbsp;<a href="https://www.facebook.com/piyushkumar.tiwari.39">Piyush kumar tiwari</a></p></center>
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
<!-- zooming-effect -->
	<script src="js/imagezoom.js"></script><?php } ?>
<!-- //zooming-effect -->
</body>
</html>