<?php
	error_reporting(E_ALL);
	ini_set("display_error",1);

	session_start();
	$id = $_SESSION['id'];

	require_once('../config.php');
	$q = "select * from test";
	$result = $db->query($q);
	while($row = $result -> fetch_assoc()){
		echo 'Seat_number : '. $row['seat_no'];
		echo '<p>';
		$r = (strtotime($row['day']) + 21600);
		$r_r = date('Y-m-d H:i:s');
		$d_r = date('Y-m-d h:i:s',$r);
		$r_r = new DateTime($r_r);
		$d_r = new DateTime($d_r);
		echo '반납시간 : '. (date('Y-m-d H:i:s',$r));
		echo '<p>';
		echo '현재시간 : '. (date('H:i:s'));
		echo '<p>';
		$diff = date_diff($d_r,$r_r);
		$h = $diff -> h;
		$m = $diff -> i;
		echo '남은시간 : '.$h.'시간'.$m.'분 남았습니다';
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
    <form method="post" action="check_test.php">
        Seat_number : <input type="text" name="seat_number">
        <input type="submit" value="연장">
    </form>
    <form method="post" action="return_check.php">
        Seat_number : <input type="text" name="seat_number">
        <input type="submit" value="반납">
    </form>
</body>
</html>
