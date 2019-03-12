<?php
session_start();
unset($_SESSION['username']);
session_destroy();
?>
	<script type="text/javascript">
			window.location="index.php";
	</script>
<?php
exit;
?>