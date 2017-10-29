<!DOCTYPE html>
<?php
	session_start();
	session_destroy();
?>
<html>
	<head><title>Log_out</title></head>
	<body>
	<script type="text/javascript">
		alert("Success! Log Out!");
		location.href="./index.html";
	</script>
	</body>
</html>
