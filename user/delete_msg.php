<?php
session_start();
include "connection.php";
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
$id=$_GET["id"];
$query="delete from contact_user where id='$id' && username='$_SESSION[username]'";
$result=mysqli_query($conn,$query);
if($result)
{
    ?>
            <script type="text/javascript">
            window.alert("Message deleted successfully");
              setTimeout(function(){window.location.href='view_admin_message.php'},100);
            </script>
    <?php 
}
else
{
     ?>
            <script type="text/javascript">
            window.alert("Message has not deleted");
              setTimeout(function(){window.location.href='view_admin_message.php'},100);
            </script>
    <?php 
}
}
?>