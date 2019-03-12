<?php
session_start();
?>
<html lang="en">

<head>
<title>Campus e-store User</title>
<link rel="icon" href="../images/favicon.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<meta name="keywords" content="Best Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="css/maruti-style.css" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
</head>
<body>
<?php
if(!isset($_SESSION["username"]))
{
	?>
	<script type="text/javascript">
		window.location="../login1.php";
	</script>
	<?php
}
else
{
?>
<!--Header-part-->
<div class="header">
    <div class="container">
      <div class="header-grid">
        <div class="header-grid-left animated wow slideInLeft" data-wow-delay=".5s">
          <ul>
            <a href="../index.php"><img src="icon.png" height="100" width="200" class="img-rounded"></a>
            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:support@campusestore.co.in">support@campusestore.co.in</a></li>
            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+91 79989 03900</li>
            <li><i class="glyphicon glyphicon-home" aria-hidden="true"></i><a href="index.php">Home</a></li>
            <li><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i><a href="logout.php">Logout</a></li>
          </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
         
        </div>
        <div class="clearfix"> </div>
      </div>
<div class="container">
        <center><h3 style="color:green;">Edit Profile</h3><center>
        <table class="table table-bordered">
		<form method="post" action="">
       <?php
		 include "connection.php";
		 $query="select * from login where username='$_SESSION[username]'";
		 $results=mysqli_query($conn,$query);
		 while($var=mysqli_fetch_assoc($results))
		 {
			 $_SESSION["username"]=$var["username"];
			 $_SESSION["email"]=$var["email"];
			 $_SESSION["mobile"]=$var["mobile"];
			 $_SESSION["password"]=$var["password"];
		 }
		
	   ?> 
	   <tr>
	   <td>Username</td>
	   <td><input type="text" name="user" style="height:35px;" class="form-control" value="<?php echo $_SESSION["username"]; ?>" disabled></td>
	   </tr>
	   <tr>
	   <td>Email</td>
	   <td><input type="text" name="email" style="height:35px;" class="form-control" value="<?php echo $_SESSION["email"]; ?>" required=""></td>
	   </tr>
	   <tr>
	   <td>Contact Number</td>
	   <td><input type="text" name="mobile" style="height:35px;" class="form-control" value="<?php echo $_SESSION["mobile"]; ?>" required=""></td>
	   </tr>
	   <tr>
	   <td>Password</td>
	   <td><input type="password" name="pass2" style="height:35px;" class="form-control" value="<?php echo $_SESSION["username"]; ?>" disabled></td>
	   </tr>
	   <tr>
	   <td colspan="2"><center><input type="submit" name="submit" class="btn btn-primary" value="Save Changes"></center></td>
	   </tr>
	   
		<?php
		if(isset($_POST["submit"]))
		{
			$email=$_POST["email"];
			$email=mysqli_real_escape_string($conn,$email);
			$mob=$_POST["mobile"];
			$mob=mysqli_real_escape_string($conn,$mob);
				$query1="UPDATE login SET email='$email',mobile='$mob' where username='$_SESSION[username]'";
			    $result=mysqli_query($conn,$query1);
				if($result)
				{
					echo "<center><div class='alert alert-success'><center><h4>Your Profile Has Updated Successfully</h4></center></div></center>";
					?>
						<script type="text/javascript">
							setTimeout(function(){window.location.href='index.php'},1000);
						</script>
					<?php
				}
				else
				{
					echo "<center><div class='alert alert-danger'><center><h4>Your Profile has not Updated Successfully</h4></center></div></center>";
					?>
						<script type="text/javascript">
							setTimeout(function(){window.location.href='index.php'},1000);
						</script>
					<?php
				}
		}
		?>
		</form>
		</table>
		</div>
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
            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+91 79989 03900</li>
          </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
      <div class="copy-right animated wow slideInUp" data-wow-delay=".5s">
        <center><p>&copy 2018 Campus e-Store. All rights reserved | Design by &nbsp;&nbsp;<a href="https://www.facebook.com/piyushkumar.tiwari.39">Piyush kumar tiwari</a></p></center>
      </div>
    </div>
  </div>
<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/maruti.calendar.js"></script> 
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
	 <?php
}
?>
	 </body>
	 </html>