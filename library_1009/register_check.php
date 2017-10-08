<?php
    //require_once('./config.php');
    $id = $_POST['id'];
    $password = $_POST['password'];
    $password_r = $_POST['password_r'];
    $ex= $_POST['ex'];
    if(empty($id) or empty($password) or empty($password_r) or empty($ex)){
        echo '<script>alert("Input your Id or Password or Ex")</script>';
        echo '<script>history.back();</script>';
    }
    else{
    if($ex == 'man')
        $ex = 1;
    else
        $ex=2;
    if($password===$password_r){
        require_once('./config.php');
        $q = "select * from login where id='$id'";
        echo $q;
        $result = $db->query($q);
        if($result->num_rows==1){
            echo '<script>alert("Id exists! Try another ID")</script>';
            echo '<script>history.back();</script>';
        }
        else
            $db->query("insert into login(id,pw,sex) values('$id','$password',$ex)");
            echo '<script>alert("Succes Register")</script>';
            echo '<script>location.href="index.html";</script>';
    }
    else{
        echo '<script>alert("Not Equal password and password_r")</script>';
        echo '<script>history.back();</script>';
    }
    }
?>
