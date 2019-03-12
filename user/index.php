<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Campus e-Store User</title>
<link rel="icon" href="../images/favicon.ico">
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
<style type="text/css">
  .table {
    border-radius: 5px;
    width: 80%;
    margin: 0px auto;
    margin-bottom: 20px; 
    float: none;
    background-color: rgb(215,215,215);
}
@media (max-width: 767px)
{
  .table {
    border-radius: 5px;
    width: 90%;
    margin: 0px auto;
    margin-bottom: 20px; 
    float: none;
    background-color: rgb(215,215,215);
}
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
            <li><i class="glyphicon glyphicon-log-out" aria-hidden="true"></i><a href="logout.php">Logout</a></li>
          </ul>
        </div>
        <div class="clearfix"> </div>
      </div>
         
        </div>
        <div class="clearfix"> </div>
      </div>
  <div  class="quick-actions_homepage">
    <ul class="quick-actions">
          <li> <a style="color:blue;" href="view_admin_message.php"> <i class="fa fa-eye" style="font-size:36px;"></i><br> View Messages </a> </li>
          <li> <a style="color:blue;" href="myorder.php"> <i class="fa fa-shopping-cart" style="font-size:36px;"></i><br> My Order</a> </li>
          <li> <a style="color:blue;" href="../index.php"> <i class="fa fa-first-order" style="font-size:36px" aria-hidden="true"></i><br> Order Now </a> </li>
          <li> <a style="color:blue;" href="edit_profile.php"> <i class="fa fa-edit" style="font-size:36px"></i><br> Edit Profile </a> </li>
          <li> <a style="color:blue;" href="edit_password.php"> <i class="fa fa-edit" style="font-size:36px"></i><br> Edit Password </a> </li>
		  <li> <a style="color:blue;" href="contact.php"> <i class="fa fa-phone" style="font-size:36px"></i><br> Contact Admin </a> </li>
        </ul>
  </div>
  <div>
  <center><h2 style="color:green; font-weight: bold;">Search Organizer</h2></center>
  <div class="container">
    <div class="shadow">
  <table  class="table table-bordered">
  <form action="" method="post">
  <tr>
  <td>
    <b>Stream</b>
   <input type="text" name="stream" style="height:35px;" placeholder="Stream" class="form-control" required="">
  </td></tr>
  <tr>
  <td>
    <b>Semester</b>
   <input type="text" name="sem" style="height:35px;" placeholder="Semester" class="form-control" required="">
  </td></tr>
  <tr>
  <td colspan="2">
  <center><input type="submit" name="submit" value="Search" style="height:35px;" class="btn btn-primary"></center>
  </td>
  </tr>
  <?php 
  include "connection.php";
  if(isset($_POST["submit"]))
  {
	 $stream=$_POST["stream"];
	 $stream=mysqli_real_escape_string($conn,$stream);
	 $sem=$_POST["sem"];
	 $sem=mysqli_real_escape_string($conn,$sem);
     $query="select * from admin where stream LIKE('%$stream%') && sem LIKE '%$sem%'";
	 $results=mysqli_query($conn,$query);
	 $count=mysqli_num_rows($results);
		 if($count==0)
		 {
			 echo "<center><div style='color:red;'><h4>*Searched Organizer is not in Stock</h4></div></center>";
		 }
		 else
		 {
		 ?>
		 </table></div>
		 <table class="table table-bordered">
  <tr>
  <th style="background:green"><h5 style="color:white; text-align:center;">Book Image</h5></th>
  <th style="background:green"><h5 style="color:white; text-align:center;">Stream</h5></th>
  <th style="background:green"><h5 style="color:white; text-align:center;">Semester</h5></th>
  <th style="background:green"><h5 style="color:white; text-align:center;">Price</h5></th>
  <th style="background:green"><h5 style="color:white; text-align:center;">Campus Delivery Price</h5></th>
  <th style="background:green"><h5 style="color:white; text-align:center;">Home Delivery Price</h5></th>
  <tr>
  <?php
  while($var=mysqli_fetch_assoc($results))
  {
    $image=$var["image"];
    $stream=$var["stream"];
    $sem=$var["sem"];
    $price=$var["price"];
    $price1=$var["sel_price"];
    $price2=$var["original_price"];
    ?>
    <center><h3 style='color:green; font-weight: bold;'>Your Searched Result is</h3></center>
    <tr>
    <td><img src="../images/org/<?php echo $image; ?>" height="100" width="100"></td>
    <td style="text-align:center; color:green;"><?php echo $stream; ?></td>
    <td style="text-align:center; color:green;"><?php echo $sem; ?></td>
    <td style="text-align:center; color:green;"><?php echo $price2; ?></td>
    <td style="text-align:center; color:green;"><?php echo $price1; ?></td>
    <td style="text-align:center; color:green;"><?php echo $price; ?></td>
    </tr>
    <?php
    break;
  }
  ?>
		 <?php
	 }
  }
  ?>
  </form>
  </table>
  </div>
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
