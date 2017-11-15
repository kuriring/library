<?php
	error_reporting(E_ALL);
	ini_set("display_error",1);
	session_start();
	
    $_SESSION['seat_number'] = $_POST['seat_number'];
    $seat_number = $_SESSION['seat_number'];
    $id = $_SESSION['id'];

    if(empty($seat_number)){
        echo '<script>alert("Please Input Your Seat_number!")</script>';
        echo '<script>history.back();</script>';
    }	
	else{
		echo "Wow";
		require_once('../config.php');
		$q ="select r_flag from test where stu_no='$id' and seat_no='$seat_number'";
		$result = $db->query($q);
		$row = $result->fetch_row();
		$r_flag=$row[0];
		if($r_flag=="0"){
			$q = "delete from test where stu_no='$id' and seat_no='$seat_number'";
			$r = $db->query($q);
			echo '<script>alert("Return your seat")</script>';
			echo '<script>history.back();</script>';
		}
		else{
			echo '<script>alert("You do not have seat")</script>';
			echo '<script>history.back();</script>';
		}
}
?>
