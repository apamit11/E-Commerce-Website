<!DOCTYPE html>
<html>
<head>
<title>Campus e-Store</title>
<!-- for-mobile-apps -->
<link rel="icon" href="images/favicon.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
						<li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="login1.php">Login</a></li>
						<li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="register.php">Register</a></li>
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
				<div class="logo-nav-right">
						<!-- search-scripts -->
						
						<!-- //search-scripts -->
				</div>
				<div class="header-right">
					<div class="cart box_1">
						<a href="checkout.php">
							<h3> 
								<i class="fa fa-shopping-cart" style="font-size:40px; color:#d8703f;"></i>
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
				<li class="active">Register Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Register Here</h3>
			<p class="est animated wow zoomIn" data-wow-delay=".5s">Register here to access the entire page.</p>
			<div class="login-form-grids">
				<h5 class="animated wow slideInUp" data-wow-delay=".5s">Fill all information</h5>
				<?php
					include "connection.php";
					if(isset($_POST["submit"]))
					{
					    $i=0;
						$name=$_POST["name"];
						$user=$_POST["username"];
						$email=$_POST["email"];
						$mobile=$_POST["phone"];
						$password=$_POST["password"];
						$password1=$_POST["conform_password"];
						$name=mysqli_real_escape_string($conn,$name);
						$user=mysqli_real_escape_string($conn,$user);
						$email=mysqli_real_escape_string($conn,$email);
						$mobile=mysqli_real_escape_string($conn,$mobile);
						$password=mysqli_real_escape_string($conn,$password);
						$password1=mysqli_real_escape_string($conn,$password1);
						if(!empty($name)&& !empty($user)&& !empty($email)&& !empty($mobile)&& !empty($password)&& !empty($password1))
						{
						    if(preg_match('/^\d{10}$/',$mobile))
						    {
						        $i=1;
						    }
						    else
						    {
						        echo "<div style='color:red; font-weight:bold;'><center>*Invalid contact number</center></div>";
						    }
						    if($i==1)
						    {
							$result1=mysqli_query($conn,"select username from login where username='$user'");
							$count1=mysqli_num_rows($result1);
							$result2=mysqli_query($conn,"select email from login where email='$email'");
							$count2=mysqli_num_rows($result2);
							if(!empty($count1))
							{
								echo "<center><div style='color:red; font-weight:bold;'>*Username already existed</div></center>";
							}
							if(!empty($count2))
							{
								echo "<center><div style='color:red; font-weight:bold;'>*Email id already existed</div></center>";
							}
							elseif($password==$password1)
							{
								$query="insert into login (name,username,email,mobile,password) value('$name','$user','$email','$mobile','$password')";
								$result=mysqli_query($conn,$query);
								if($result)
								{
									?>
									<center><div class="alert alert-success"><center>Username <b><?php echo $user; ?></b> created successfully</center></div></center>
								<?php
								}
							}
							else 
							{
								?>
								 <center><div class="alert alert-danger"><center>Password did not match</center></div></center>
								<?php
							}
						    }
						}
					}
					?>
				<table class="table table-bordered">
					<form action="#" method="post">
						<tr><td>
						<div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="">
                        </div>
						</td></tr>
					<tr><td>
						<div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input id="username" type="text" class="form-control" name="username" placeholder="Username" required="">
                        </div>
						</td></tr>
						<tr><td><div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                          <input id="email" type="email" class="form-control" name="email" placeholder="Email" required="">
                        </div>
						</td></tr>
						<tr><td><div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                          <input id="phone" type="text" class="form-control" name="phone" maxlength="10" placeholder="Mobile Number" required="">
                        </div>
						</td></tr>
						<tr><td><div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                          <input id="password" type="password" class="form-control" name="password" placeholder="Password" required="">
                        </div>
						</td></tr>
						<tr><td><div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                          <input id="conform_password" type="password" class="form-control" name="conform_password" placeholder="Confirm Password" required="">
                        </div>
						</td></tr>
						<tr><td>
						<center><input type="submit" class="btn btn-primary" name="submit" value="Submit"></center>
						</td></tr>
					</form>
					</table>
			</div>
			<div class="register-home animated wow slideInUp" data-wow-delay=".5s">
				<a href="index.php">Home</a>
			</div>
		</div>
	</div>
<!-- //register -->
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
<!-- //footer -->
</body>
</html>