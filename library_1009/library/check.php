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
		require_once('../config.php');
			$q = "select e_flag from test where stu_no ='$id' and seat_no='$seat_number'";
			$result = $db->query($q);
			$row=$result->fetch_row();
			$e_flag = $row[0];
			if($e_flag =="1"){
				echo '<script>alert("Already...")</script>';
				echo '<script>history.back();</script>';
			}
			else{
				$q = "update test set day=now()+INTERVAL 6 HOUR ,e_flag=1 where seat_no='$seat_number'";
				$r = $db->query($q);
				echo '<script>alert("Finish!!")</script>';
				echo '<script>history.back();</script>';		
			}		
}
