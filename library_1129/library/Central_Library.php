<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href=".../../favicon.ico">

  <title>중앙도서관</title>

  <!-- Bootstrap core CSS -->
  <link href="../static/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../static/css/starter-template.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src=".../../assets/js/ie-emulation-modes-warning.js"></script>
  <style>
  body {
      padding-top: 0px;
    }
    #navi {
      text-align: center;
      float: left;
      width: 10%;
    }
    #maptemp{
      float: left;
       display: table; margin-left: auto; margin-right: auto;margin-top: auto;margin-bottom: auto;
      padding-top: 200px;
      width: 55%
    }
    #aside_right{
      float:right;
      width: 25%
    }
    #btn_group{
    padding: 30px;
    }
    .button {
     border: 2px solid #ffffff;
     background: #65a9d7;
     background: -webkit-gradient(linear, left top, left bottom, from(#c4e7ff), to(#65a9d7));
     background: -webkit-linear-gradient(top, #c4e7ff, #65a9d7);
     background: -moz-linear-gradient(top, #c4e7ff, #65a9d7);
     background: -ms-linear-gradient(top, #c4e7ff, #65a9d7);
     background: -o-linear-gradient(top, #c4e7ff, #65a9d7);
     background-image: -ms-linear-gradient(top, #c4e7ff 0%, #65a9d7 100%);
     padding: 10px 20px;
     -webkit-border-radius: 10px;
     -moz-border-radius: 10px;
     border-radius: 10px;
     -webkit-box-shadow: rgba(255,255,255,0.4) 0 0px 0, inset rgba(255,255,255,0.4) 0 0px 0;
     -moz-box-shadow: rgba(255,255,255,0.4) 0 0px 0, inset rgba(255,255,255,0.4) 0 0px 0;
     box-shadow: rgba(255,255,255,0.4) 0 0px 0, inset rgba(255,255,255,0.4) 0 0px 0;
     text-shadow: #ffffff 0 1px 0;
     color: #ffffff;
     font-size: 18px;
     font-family: helvetica, serif;
     text-decoration: none;
     vertical-align: middle;
   }
   .button:hover {
     border: 2px solid #ffffff;
     text-shadow: #1e4158 0 1px 0;
     background: #65a9d7;
     background: -webkit-gradient(linear, left top, left bottom, from(#c4e7ff), to(#65a9d7));
     background: -webkit-linear-gradient(top, #c4e7ff, #65a9d7);
     background: -moz-linear-gradient(top, #c4e7ff, #65a9d7);
     background: -ms-linear-gradient(top, #c4e7ff, #65a9d7);
     background: -o-linear-gradient(top, #c4e7ff, #65a9d7);
     background-image: -ms-linear-gradient(top, #c4e7ff 0%, #65a9d7 100%);
     color: #fff;
   }
   .button:active {
     text-shadow: #1e4158 0 1px 0;
     border: 2px solid #000000;
     background: #c4e7ff;
     background: -webkit-gradient(linear, left top, left bottom, from(#65a9d7), to(#65a9d7));
     background: -webkit-linear-gradient(top, #65a9d7, #c4e7ff);
     background: -moz-linear-gradient(top, #65a9d7, #c4e7ff);
     background: -ms-linear-gradient(top, #65a9d7, #c4e7ff);
     background: -o-linear-gradient(top, #65a9d7, #c4e7ff);
     background-image: -ms-linear-gradient(top, #65a9d7 0%, #c4e7ff 100%);
     color: #000000;
   }
   .nav_nav-sidebar{
    background-color: #0861af
    font-size:20px;
    }
#test li{
  display:none;
  }
#test li:first-child{
  display:block;
  }
#test:hover li{
  display:block;
  }
 </style>
 </head>

<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <img src="../PKNU_LIB_LOGO.jpg" alt = "부경대학교 도서관"/>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar navbar-right">
              <div id = "btn_group" class='btn-group'>
                <a href='../user.php' class='button'>Main</a>
                <a href='../myinfo.php' class='button'>Myinfo</a>
                <a href='../board' class='button'>Board</a>
                <a href='../help.php' class='button'>Help</a>
                <a href='../logout.php' class='button'>Log Out</a>
              </div>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
</header>

<body>
    <div id ="navi" class="collapse navbar-collapse">
      <div class="row">
          <ul id="test" class="nav navbar navbar-right">
            <li class="active"><a href="./Central_Library.php">중앙도서관<span class="sr-only">(current)</span></a></li>
            <li><a href="./room_pc_lab.php">PC/노트북/어학(LAB)</a></li>
            <li><a href="./room_dvd.php">DVD위성방송</a></li>
            <li><a href="./room_401_north.php">401열람실(북쪽)</a></li>
            <li><a href="./room_401_south.php">401열람실(남쪽)</a></li>
            <li><a href="./room_laptop.php">4층노트북실</a></li>
          </ul>
        </div>
        </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


