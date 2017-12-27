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

  <title>학습도서관</title>

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
      padding-top: 50px;
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
            <li class="active"><a href="./old_Library.php">학습도서관<span class="sr-only">(current)</span></a></li>
            <li><a href="./room_1A.php">1열람실A</a></li>
            <li><a href="./room_1B.php">1열람실B</a></li>
            <li><a href="./room_3.php">3열람실</a></li>
            <li><a href="./room_4.php">4열람실</a></li>
            <li><a href="./room_old_laptop.php">노트북실</a></li>
            <li><a href="./room_5.php">5열람실</a></li>
            <li><a href="./room_6.php">6열람실</a></li>
          </ul>
        </div>
        </div>
  
  <div id="maptemp" style="position:relative; left:0px; top:0px;">
    <div id="backimage" style="position:absolute; left:0px; top:0px; z-index:0"><img border=0 src="./MAP/10-back.jpg"></div>

<div id="Layer1" style="position:absolute; left:57px; top:125px; width:49px; height:30px; z-index:1"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>149</font></td></tr></table></div>
<div id="Layer2" style="position:absolute; left:57px; top:155px; width:49px; height:30px; z-index:2"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>150</font></td></tr></table></div>
<div id="Layer3" style="position:absolute; left:57px; top:189px; width:49px; height:30px; z-index:3"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>151</font></td></tr></table></div>
<div id="Layer4" style="position:absolute; left:57px; top:219px; width:49px; height:30px; z-index:4"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>152</font></td></tr></table></div>
<div id="Layer5" style="position:absolute; left:57px; top:249px; width:49px; height:30px; z-index:5"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>153</font></td></tr></table></div>
<div id="Layer6" style="position:absolute; left:57px; top:282px; width:49px; height:30px; z-index:6"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>154</font></td></tr></table></div>
<div id="Layer7" style="position:absolute; left:57px; top:313px; width:49px; height:30px; z-index:7"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>155</font></td></tr></table></div>
<div id="Layer8" style="position:absolute; left:57px; top:343px; width:49px; height:30px; z-index:8"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>156</font></td></tr></table></div>
<div id="Layer9" style="position:absolute; left:57px; top:376px; width:49px; height:30px; z-index:9"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>157</font></td></tr></table></div>
<div id="Layer10" style="position:absolute; left:57px; top:406px; width:49px; height:30px; z-index:10"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>158</font></td></tr></table></div>
<div id="Layer11" style="position:absolute; left:57px; top:436px; width:49px; height:30px; z-index:11"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>159</font></td></tr></table></div>
<div id="Layer12" style="position:absolute; left:107px; top:436px; width:49px; height:30px; z-index:12"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>160</font></td></tr></table></div>
<div id="Layer13" style="position:absolute; left:107px; top:406px; width:49px; height:30px; z-index:13"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>161</font></td></tr></table></div>
<div id="Layer14" style="position:absolute; left:107px; top:376px; width:49px; height:30px; z-index:14"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>162</font></td></tr></table></div>
<div id="Layer15" style="position:absolute; left:107px; top:343px; width:49px; height:30px; z-index:15"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>163</font></td></tr></table></div>
<div id="Layer16" style="position:absolute; left:107px; top:313px; width:49px; height:30px; z-index:16"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>164</font></td></tr></table></div>
<div id="Layer17" style="position:absolute; left:107px; top:282px; width:49px; height:30px; z-index:17"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>165</font></td></tr></table></div>
<div id="Layer18" style="position:absolute; left:107px; top:249px; width:49px; height:30px; z-index:18"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>166</font></td></tr></table></div>
<div id="Layer19" style="position:absolute; left:107px; top:219px; width:49px; height:30px; z-index:19"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>167</font></td></tr></table></div>
<div id="Layer20" style="position:absolute; left:107px; top:189px; width:49px; height:30px; z-index:20"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>168</font></td></tr></table></div>
<div id="Layer21" style="position:absolute; left:107px; top:155px; width:49px; height:30px; z-index:21"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>169</font></td></tr></table></div>
<div id="Layer22" style="position:absolute; left:107px; top:125px; width:49px; height:30px; z-index:22"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>170</font></td></tr></table></div>
<div id="Layer23" style="position:absolute; left:175px; top:125px; width:49px; height:30px; z-index:23"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>171</font></td></tr></table></div>
<div id="Layer24" style="position:absolute; left:175px; top:155px; width:49px; height:30px; z-index:24"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>172</font></td></tr></table></div>
<div id="Layer25" style="position:absolute; left:175px; top:189px; width:49px; height:30px; z-index:25"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>173</font></td></tr></table></div>
<div id="Layer26" style="position:absolute; left:175px; top:219px; width:49px; height:30px; z-index:26"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>174</font></td></tr></table></div>
<div id="Layer27" style="position:absolute; left:175px; top:249px; width:49px; height:30px; z-index:27"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>175</font></td></tr></table></div>
<div id="Layer28" style="position:absolute; left:175px; top:376px; width:49px; height:30px; z-index:28"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>176</font></td></tr></table></div>
<div id="Layer29" style="position:absolute; left:175px; top:406px; width:49px; height:30px; z-index:29"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>177</font></td></tr></table></div>
<div id="Layer30" style="position:absolute; left:175px; top:436px; width:49px; height:30px; z-index:30"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>178</font></td></tr></table></div>
<div id="Layer31" style="position:absolute; left:225px; top:436px; width:49px; height:30px; z-index:31"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>179</font></td></tr></table></div>
<div id="Layer32" style="position:absolute; left:225px; top:406px; width:49px; height:30px; z-index:32"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>180</font></td></tr></table></div>
<div id="Layer33" style="position:absolute; left:225px; top:376px; width:49px; height:30px; z-index:33"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>181</font></td></tr></table></div>
<div id="Layer34" style="position:absolute; left:225px; top:249px; width:49px; height:30px; z-index:34"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>182</font></td></tr></table></div>
<div id="Layer35" style="position:absolute; left:225px; top:219px; width:49px; height:30px; z-index:35"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>183</font></td></tr></table></div>
<div id="Layer36" style="position:absolute; left:225px; top:189px; width:49px; height:30px; z-index:36"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>184</font></td></tr></table></div>
<div id="Layer37" style="position:absolute; left:225px; top:155px; width:49px; height:30px; z-index:37"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>185</font></td></tr></table></div>
<div id="Layer38" style="position:absolute; left:225px; top:125px; width:49px; height:30px; z-index:38"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>186</font></td></tr></table></div>
<div id="Layer39" style="position:absolute; left:294px; top:125px; width:49px; height:30px; z-index:39"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>187</font></td></tr></table></div>
<div id="Layer40" style="position:absolute; left:294px; top:155px; width:49px; height:30px; z-index:40"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>188</font></td></tr></table></div>
<div id="Layer41" style="position:absolute; left:294px; top:189px; width:49px; height:30px; z-index:41"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>189</font></td></tr></table></div>
<div id="Layer42" style="position:absolute; left:294px; top:219px; width:49px; height:30px; z-index:42"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>190</font></td></tr></table></div>
<div id="Layer43" style="position:absolute; left:294px; top:249px; width:49px; height:30px; z-index:43"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>191</font></td></tr></table></div>
<div id="Layer44" style="position:absolute; left:294px; top:282px; width:49px; height:30px; z-index:44"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>192</font></td></tr></table></div>
<div id="Layer45" style="position:absolute; left:294px; top:313px; width:49px; height:30px; z-index:45"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>193</font></td></tr></table></div>
<div id="Layer46" style="position:absolute; left:294px; top:343px; width:49px; height:30px; z-index:46"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>194</font></td></tr></table></div>
<div id="Layer47" style="position:absolute; left:294px; top:376px; width:49px; height:30px; z-index:47"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>195</font></td></tr></table></div>
<div id="Layer48" style="position:absolute; left:294px; top:406px; width:49px; height:30px; z-index:48"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>196</font></td></tr></table></div>
<div id="Layer49" style="position:absolute; left:294px; top:436px; width:49px; height:30px; z-index:49"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>197</font></td></tr></table></div>
<div id="Layer50" style="position:absolute; left:343px; top:436px; width:49px; height:30px; z-index:50"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>198</font></td></tr></table></div>
<div id="Layer51" style="position:absolute; left:343px; top:406px; width:49px; height:30px; z-index:51"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>199</font></td></tr></table></div>
<div id="Layer52" style="position:absolute; left:343px; top:376px; width:49px; height:30px; z-index:52"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>200</font></td></tr></table></div>
<div id="Layer53" style="position:absolute; left:343px; top:343px; width:49px; height:30px; z-index:53"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>201</font></td></tr></table></div>
<div id="Layer54" style="position:absolute; left:343px; top:313px; width:49px; height:30px; z-index:54"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>202</font></td></tr></table></div>
<div id="Layer55" style="position:absolute; left:343px; top:282px; width:49px; height:30px; z-index:55"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>203</font></td></tr></table></div>
<div id="Layer56" style="position:absolute; left:343px; top:249px; width:49px; height:30px; z-index:56"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>204</font></td></tr></table></div>
<div id="Layer57" style="position:absolute; left:343px; top:219px; width:49px; height:30px; z-index:57"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>205</font></td></tr></table></div>
<div id="Layer58" style="position:absolute; left:343px; top:189px; width:49px; height:30px; z-index:58"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>206</font></td></tr></table></div>
<div id="Layer59" style="position:absolute; left:343px; top:155px; width:49px; height:30px; z-index:59"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>207</font></td></tr></table></div>
<div id="Layer60" style="position:absolute; left:343px; top:125px; width:49px; height:30px; z-index:60"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>208</font></td></tr></table></div>
<div id="Layer61" style="position:absolute; left:412px; top:125px; width:49px; height:30px; z-index:61"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>209</font></td></tr></table></div>
<div id="Layer62" style="position:absolute; left:412px; top:155px; width:49px; height:30px; z-index:62"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>210</font></td></tr></table></div>
<div id="Layer63" style="position:absolute; left:412px; top:189px; width:49px; height:30px; z-index:63"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>211</font></td></tr></table></div>
<div id="Layer64" style="position:absolute; left:412px; top:219px; width:49px; height:30px; z-index:64"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>212</font></td></tr></table></div>
<div id="Layer65" style="position:absolute; left:412px; top:249px; width:49px; height:30px; z-index:65"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>213</font></td></tr></table></div>
<div id="Layer66" style="position:absolute; left:412px; top:282px; width:49px; height:30px; z-index:66"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>214</font></td></tr></table></div>
<div id="Layer67" style="position:absolute; left:412px; top:313px; width:49px; height:30px; z-index:67"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>215</font></td></tr></table></div>
<div id="Layer68" style="position:absolute; left:412px; top:343px; width:49px; height:30px; z-index:68"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>216</font></td></tr></table></div>
<div id="Layer69" style="position:absolute; left:412px; top:376px; width:49px; height:30px; z-index:69"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>217</font></td></tr></table></div>
<div id="Layer70" style="position:absolute; left:412px; top:406px; width:49px; height:30px; z-index:70"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>218</font></td></tr></table></div>
<div id="Layer71" style="position:absolute; left:412px; top:436px; width:49px; height:30px; z-index:71"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>219</font></td></tr></table></div>
<div id="Layer72" style="position:absolute; left:462px; top:436px; width:49px; height:30px; z-index:72"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>220</font></td></tr></table></div>
<div id="Layer73" style="position:absolute; left:462px; top:406px; width:49px; height:30px; z-index:73"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>221</font></td></tr></table></div>
<div id="Layer74" style="position:absolute; left:462px; top:376px; width:49px; height:30px; z-index:74"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>222</font></td></tr></table></div>
<div id="Layer75" style="position:absolute; left:462px; top:343px; width:49px; height:30px; z-index:75"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>223</font></td></tr></table></div>
<div id="Layer76" style="position:absolute; left:462px; top:313px; width:49px; height:30px; z-index:76"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>224</font></td></tr></table></div>
<div id="Layer77" style="position:absolute; left:462px; top:282px; width:49px; height:30px; z-index:77"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>225</font></td></tr></table></div>
<div id="Layer78" style="position:absolute; left:462px; top:249px; width:49px; height:30px; z-index:78"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>226</font></td></tr></table></div>
<div id="Layer79" style="position:absolute; left:462px; top:219px; width:49px; height:30px; z-index:79"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>227</font></td></tr></table></div>
<div id="Layer80" style="position:absolute; left:462px; top:189px; width:49px; height:30px; z-index:80"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>228</font></td></tr></table></div>
<div id="Layer81" style="position:absolute; left:462px; top:155px; width:49px; height:30px; z-index:81"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>229</font></td></tr></table></div>
<div id="Layer82" style="position:absolute; left:462px; top:125px; width:49px; height:30px; z-index:82"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>230</font></td></tr></table></div>
<div id="Layer83" style="position:absolute; left:625px; top:125px; width:49px; height:30px; z-index:83"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>231</font></td></tr></table></div>
<div id="Layer84" style="position:absolute; left:625px; top:155px; width:49px; height:30px; z-index:84"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>232</font></td></tr></table></div>
<div id="Layer85" style="position:absolute; left:625px; top:189px; width:49px; height:30px; z-index:85"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>233</font></td></tr></table></div>
<div id="Layer86" style="position:absolute; left:625px; top:219px; width:49px; height:30px; z-index:86"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>234</font></td></tr></table></div>
<div id="Layer87" style="position:absolute; left:625px; top:249px; width:49px; height:30px; z-index:87"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>235</font></td></tr></table></div>
<div id="Layer88" style="position:absolute; left:625px; top:282px; width:49px; height:30px; z-index:88"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>236</font></td></tr></table></div>
<div id="Layer89" style="position:absolute; left:625px; top:313px; width:49px; height:30px; z-index:89"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>237</font></td></tr></table></div>
<div id="Layer90" style="position:absolute; left:625px; top:343px; width:49px; height:30px; z-index:90"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>238</font></td></tr></table></div>
<div id="Layer91" style="position:absolute; left:625px; top:376px; width:49px; height:30px; z-index:91"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>239</font></td></tr></table></div>
<div id="Layer92" style="position:absolute; left:625px; top:406px; width:49px; height:30px; z-index:92"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>240</font></td></tr></table></div>
<div id="Layer93" style="position:absolute; left:625px; top:436px; width:49px; height:30px; z-index:93"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>241</font></td></tr></table></div>
<div id="Layer94" style="position:absolute; left:675px; top:436px; width:49px; height:30px; z-index:94"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>242</font></td></tr></table></div>
<div id="Layer95" style="position:absolute; left:675px; top:406px; width:49px; height:30px; z-index:95"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>243</font></td></tr></table></div>
<div id="Layer96" style="position:absolute; left:675px; top:376px; width:49px; height:30px; z-index:96"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>244</font></td></tr></table></div>
<div id="Layer97" style="position:absolute; left:675px; top:343px; width:49px; height:30px; z-index:97"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>245</font></td></tr></table></div>
<div id="Layer98" style="position:absolute; left:675px; top:313px; width:49px; height:30px; z-index:98"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>246</font></td></tr></table></div>
<div id="Layer99" style="position:absolute; left:675px; top:282px; width:49px; height:30px; z-index:99"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>247</font></td></tr></table></div>
<div id="Layer100" style="position:absolute; left:675px; top:249px; width:49px; height:30px; z-index:100"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>248</font></td></tr></table></div>
<div id="Layer101" style="position:absolute; left:675px; top:219px; width:49px; height:30px; z-index:101"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>249</font></td></tr></table></div>
<div id="Layer102" style="position:absolute; left:675px; top:189px; width:49px; height:30px; z-index:102"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>250</font></td></tr></table></div>
<div id="Layer103" style="position:absolute; left:675px; top:155px; width:49px; height:30px; z-index:103"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>251</font></td></tr></table></div>
<div id="Layer104" style="position:absolute; left:675px; top:125px; width:49px; height:30px; z-index:104"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>252</font></td></tr></table></div>
<div id="Layer105" style="position:absolute; left:744px; top:125px; width:49px; height:30px; z-index:105"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>253</font></td></tr></table></div>
<div id="Layer106" style="position:absolute; left:744px; top:155px; width:49px; height:30px; z-index:106"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>254</font></td></tr></table></div>
<div id="Layer107" style="position:absolute; left:744px; top:189px; width:49px; height:30px; z-index:107"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>255</font></td></tr></table></div>
<div id="Layer108" style="position:absolute; left:744px; top:219px; width:49px; height:30px; z-index:108"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>256</font></td></tr></table></div>
<div id="Layer109" style="position:absolute; left:744px; top:249px; width:49px; height:30px; z-index:109"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>257</font></td></tr></table></div>
<div id="Layer110" style="position:absolute; left:744px; top:282px; width:49px; height:30px; z-index:110"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>258</font></td></tr></table></div>
<div id="Layer111" style="position:absolute; left:744px; top:313px; width:49px; height:30px; z-index:111"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>259</font></td></tr></table></div>
<div id="Layer112" style="position:absolute; left:744px; top:343px; width:49px; height:30px; z-index:112"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>260</font></td></tr></table></div>
<div id="Layer113" style="position:absolute; left:744px; top:376px; width:49px; height:30px; z-index:113"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>261</font></td></tr></table></div>
<div id="Layer114" style="position:absolute; left:744px; top:406px; width:49px; height:30px; z-index:114"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>262</font></td></tr></table></div>
<div id="Layer115" style="position:absolute; left:744px; top:436px; width:49px; height:30px; z-index:115"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>263</font></td></tr></table></div>
<div id="Layer116" style="position:absolute; left:793px; top:436px; width:49px; height:30px; z-index:116"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>264</font></td></tr></table></div>
<div id="Layer117" style="position:absolute; left:793px; top:406px; width:49px; height:30px; z-index:117"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>265</font></td></tr></table></div>
<div id="Layer118" style="position:absolute; left:793px; top:376px; width:49px; height:30px; z-index:118"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>266</font></td></tr></table></div>
<div id="Layer119" style="position:absolute; left:793px; top:343px; width:49px; height:30px; z-index:119"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>267</font></td></tr></table></div>
<div id="Layer120" style="position:absolute; left:793px; top:313px; width:49px; height:30px; z-index:120"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>268</font></td></tr></table></div>
<div id="Layer121" style="position:absolute; left:793px; top:282px; width:49px; height:30px; z-index:121"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>269</font></td></tr></table></div>
<div id="Layer122" style="position:absolute; left:793px; top:249px; width:49px; height:30px; z-index:122"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>270</font></td></tr></table></div>
<div id="Layer123" style="position:absolute; left:793px; top:219px; width:49px; height:30px; z-index:123"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>271</font></td></tr></table></div>
<div id="Layer124" style="position:absolute; left:793px; top:189px; width:49px; height:30px; z-index:124"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>272</font></td></tr></table></div>
<div id="Layer125" style="position:absolute; left:793px; top:155px; width:49px; height:30px; z-index:125"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>273</font></td></tr></table></div>
<div id="Layer126" style="position:absolute; left:793px; top:125px; width:49px; height:30px; z-index:126"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>274</font></td></tr></table></div>


    </div>



  <div id="aside_right">
  <form method="post" action="check_test.php">
        좌석번호 : <input type="text" name="seat_number">
        <input type="submit" value="연장">
    </form>
    <form method="post" action="return_check.php">
        좌석번호 : <input type="text" name="seat_number">
        <input type="submit" value="반납">
    </form>
    <form method="post" action="t.php">
        <input type="submit" value="남은좌석보기">
    </form>
    </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


