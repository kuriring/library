<?php
	session_start();
	$id = $_SESSION['id'];

	require_once('../config.php');
	$q = "select * from test where stu_no='201111756'";
	$result = $db->query($q);
	while($row = $result -> fetch_assoc()){
		echo 'Seat_number : '. $row['seat_no'];
		echo '<p>';
		$r = (strtotime($row['day']) + 21600);
		echo '반납시간 : '. (date('Y-m-d H:i:s',$r)); 
		echo '<p>';
	} 
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
</head>
<body>
    <form method="post" action="check.php">
        Seat_number : <input type="text" name="seat_number">
        <input type="submit" value="연장">
    </form>
    <form method="post" action="return_check.php">
        Seat_number : <input type="text" name="seat_number">
        <input type="submit" value="반납">
    </form>
</body>
</html>
