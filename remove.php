<?php 
session_start();
$id=$_GET["id"];
include "connection.php";
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
$_SESSION["i"]=$_SESSION["i"]-1;
$query="delete from cart where id='$id'";
$result=mysqli_query($conn,$query);
if($result)
{
	?>
		<script type="text/javascript">
			alert("Removed from cart");
			window.location="checkout.php";
		</script>
	<?php
}
else
{
	?>
		<script type="text/javascript">
			alert("Not removed from cart");
			window.location="checkout.php";
		</script>
	<?php
}}
?>