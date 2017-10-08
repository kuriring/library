<?php
	session_start();
    $_SESSION['id']=$_POST['id'];
    $id = $_SESSION['id'];
    $_SESSION['password']= $_POST['password'];
    $pw = $_SESSION['password'];

    if(empty($id)){
        echo '<script>alert("EMpty Id or Pw")</script>';
        echo '<script>history.back();</script>';
    }
    else{
        require_once('./config.php');
            $q="select * from login where id='$id' and pw='$pw'";
            $result=$db->query($q);
            if($result->num_rows!=0){
                echo '<script>alert("Hello user!'.$id.'")</script>';
                echo '<script>location.href="user.php"</script>';
            }
            else{
                echo '<script>alert("Wrong Id or Password or Not Register!")</script>';
                echo '<script>location.href="index.html"</script>';
            }
        }
?>
