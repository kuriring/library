<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>
    <link href="../static/css/bootstrap.min.css" rel="stylesheet">
    <link href="../static/css/dashboard.css" rel="stylesheet">
    <script src="../static/js/ie-emulation-modes-warning.js"></script>
  </head>

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
            <li><a href="../user.php">Main</a></li>
			<li><a href="../myinfo.php">Myinfo</a></li>
            <li><a href="../board">Board</a></li>
            <li><a href="../help.php">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>
<style>
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
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul id="test" class="nav nav-sidebar">
            <li class="active"><a href="#">중앙도서관<span class="sr-only">(current)</span></a></li>
            <li><a href="#">PC/노트북/어학(LAB)</a></li>
            <li><a href="#">DVD위성방송</a></li>
            <li><a href="#">401열람실(북쪽)</a></li>
            <li><a href="#">401열람실(남쪽)</a></li>
            <li><a href="#">4층노트북실</a></li>
          </ul>
        </div>
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


