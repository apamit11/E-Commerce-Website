<?php
session_start();
?>
<html lang="en">

<head>
<title>Campus e-Store User</title>
<link rel="icon" href="../images/favicon.ico">
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
<style>
   table tr td
    {
        color:white;
    }
</style>
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
        <center><h3 style="color:green; font-weight:bold;">My Orders</h3><center>
        <table style="background-color:rgb(235,235,235);" class="table table-hover">
       <?php
		 include "connection.php";
		 $query="select * from user_orders where username='$_SESSION[username]'";
		 $results=mysqli_query($conn,$query);
		 $count=mysqli_num_rows($results);
		 if($count==0)
		 {
			 echo "<div style='color:red;'><center><h4>*No Records Found</h4></center></div>";
		 }
		 else
		 {
			 while($var=mysqli_fetch_assoc($results))
			 {
				 $id=$var["id"];
				 $name=$var["name"];
				 $stream=$var["stream"];
				 $sem=$var["sem"];
				 $contact=$var["contact"];
				 $address=$var["address"];
				 $qty=$var["qty"];
				 $amount=$var["amount"];
				 $delivery=$var["delivery"];
				 ?>
				 <tr>
				 <td colspan="3" style="color:black; font-weight:bold; font-size:15px;"><?php echo $name ; ?></td></tr>
				 <tr>
				     <td>Stream: <?php echo $stream ; ?></td>
				     <td>Semester: <?php echo $sem ; ?></td>
				     <td>Contact: <?php echo $contact ; ?></td>
				 </tr>
				 <tr>
				 <td>Address: <?php echo $address ; ?></td>
				 <td>Quantity: <?php echo $qty ; ?></td>
				 <td>Delivary Date: <?php echo $delivery ; ?></td>
				 </tr>
				 <tr>
				 <td colspan="3" style="font-size:15px;"><b>Total Amount:</b>  <i style="font-size:14px;" class="fa fa-inr" aria-hidden="true"></i> <?php echo $amount ; ?></td>
				 </tr>
				 <tr>
				 <td colspan="3"><a class="btn btn-danger" href="cancel.php?id=<?php echo $id; ?>">Cancel Order</a></td>
				 </tr>
				 <tr style="background-color:white;">
				 <td></td>
				 <td></td>
				 <td></td>
				 </tr>
				 <?php
			 }
		 }
	   ?> 
		</table></div>
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