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
    #maptemp{
       display: table; margin-left: auto; margin-right: auto;margin-top: auto;margin-bottom: auto;
      padding-top: 200px;
    }
    #btn_group{
    padding: 30px;
    }
    .move_button {
  -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
  -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
  box-shadow:inset 0px 1px 0px 0px #ffffff;
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
  background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
  background-color:#ededed;
  -webkit-border-top-left-radius:20px;
  -moz-border-radius-topleft:20px;
  border-top-left-radius:20px;
  -webkit-border-top-right-radius:20px;
  -moz-border-radius-topright:20px;
  border-top-right-radius:20px;
  -webkit-border-bottom-right-radius:20px;
  -moz-border-radius-bottomright:20px;
  border-bottom-right-radius:20px;
  -webkit-border-bottom-left-radius:20px;
  -moz-border-radius-bottomleft:20px;
  border-bottom-left-radius:20px;
  text-indent:0;
  border:1px solid #dcdcdc;
  display:inline-block;
  color:#777777;
  font-family:Verdana;
  font-size:20px;
  font-weight:bold;
  font-style:normal;
  height:50px;
  line-height:50px;
  width:150px;
  text-decoration:none;
  text-align:center;
  text-shadow:1px 1px 0px #ffffff;
}
.move_button:hover {
  background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
  background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
  filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
  background-color:#dfdfdf;
}.move_button:active {
  position:relative;
  top:1px;
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
   #seat{
      display: table; margin-left: auto; margin-right: auto;margin-top: auto;margin-bottom: auto;
      padding-top: 200px;
    }
    .container {
  width: 70%;
  height: 70%;
  margin: 100px auto;
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
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul id="test" class="nav_nav-sidebar">
            <li class="active"><a href="#">중앙도서관<span class="sr-only">(current)</span></a></li>
            <li><a href="#">PC/노트북/어학(LAB)</a></li>
            <li><a href="#">DVD위성방송</a></li>
            <li><a href="#">401열람실(북쪽)</a></li>
            <li><a href="#">401열람실(남쪽)</a></li>
            <li><a href="#">4층노트북실</a></li>
          </ul>
        </div>
  <img class="seat" src="seat.png">
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


