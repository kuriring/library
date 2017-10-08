<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	session_start();
    $id = $_SESSION['id'];
    $pw = $_SESSION['password'];
?>
<html>
<head>
	<meta heaarset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>
    <link href="./static/css/bootstrap.min.css" rel="stylesheet">
    <link href="./static/css/dashboard.css" rel="stylesheet">
    <script src="./static/js/ie-emulation-modes-warning.js"></script>>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Pukyong_University_Library</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./user.php">Main</a></li>
            <li><a href="./myinfo.php">Myinfo</a></li>
            <li><a href="./board">Board</a></li>
            <li><a href="./help.php">Help</a></li>
          </ul>
        </div>
      </div>
    </nav>

<h3>My_info!</h3>
<?php 
	exec("python lms.py $_SESSION[id] $_SESSION[password]", $out, $re);
	$_SESSION['name'] = $out[1];
	$_SESSION['hp'] = $out[2];
	$_SESSION['email'] = $out[3];
	
	echo $_SESSION['name'];
	echo '<p>';
	echo $_SESSION['hp'];
	echo '<p>';
	echo $_SESSION['email'];
?>	
</body>
</html> 
