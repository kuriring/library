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
    <div id="backimage" style="position:absolute; left:0px; top:0px; z-index:0"><img border=0 src="./MAP/14-back.jpg"></div>

<div id="Layer1" style="position:absolute; left:259px; top:426px; width:42px; height:24px; z-index:1"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>1</font></td></tr></table></div>
<div id="Layer2" style="position:absolute; left:302px; top:426px; width:42px; height:24px; z-index:2"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>2</font></td></tr></table></div>
<div id="Layer3" style="position:absolute; left:343px; top:426px; width:42px; height:24px; z-index:3"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>3</font></td></tr></table></div>
<div id="Layer4" style="position:absolute; left:385px; top:426px; width:42px; height:24px; z-index:4"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>4</font></td></tr></table></div>
<div id="Layer5" style="position:absolute; left:385px; top:372px; width:42px; height:24px; z-index:5"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>5</font></td></tr></table></div>
<div id="Layer6" style="position:absolute; left:343px; top:372px; width:42px; height:24px; z-index:6"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>6</font></td></tr></table></div>
<div id="Layer7" style="position:absolute; left:302px; top:372px; width:42px; height:24px; z-index:7"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>7</font></td></tr></table></div>
<div id="Layer8" style="position:absolute; left:259px; top:372px; width:42px; height:24px; z-index:8"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>8</font></td></tr></table></div>
<div id="Layer9" style="position:absolute; left:259px; top:348px; width:42px; height:24px; z-index:9"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>9</font></td></tr></table></div>
<div id="Layer10" style="position:absolute; left:302px; top:348px; width:42px; height:24px; z-index:10"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>10</font></td></tr></table></div>
<div id="Layer11" style="position:absolute; left:343px; top:348px; width:42px; height:24px; z-index:11"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>11</font></td></tr></table></div>
<div id="Layer12" style="position:absolute; left:385px; top:348px; width:42px; height:24px; z-index:12"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>12</font></td></tr></table></div>
<div id="Layer13" style="position:absolute; left:236px; top:293px; width:42px; height:24px; z-index:13"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>13</font></td></tr></table></div>
<div id="Layer14" style="position:absolute; left:278px; top:293px; width:42px; height:24px; z-index:14"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>14</font></td></tr></table></div>
<div id="Layer15" style="position:absolute; left:321px; top:293px; width:42px; height:24px; z-index:15"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>15</font></td></tr></table></div>
<div id="Layer16" style="position:absolute; left:362px; top:293px; width:42px; height:24px; z-index:16"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>16</font></td></tr></table></div>
<div id="Layer17" style="position:absolute; left:404px; top:293px; width:42px; height:24px; z-index:17"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>17</font></td></tr></table></div>
<div id="Layer18" style="position:absolute; left:523px; top:293px; width:42px; height:24px; z-index:18"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>18</font></td></tr></table></div>
<div id="Layer19" style="position:absolute; left:564px; top:293px; width:42px; height:24px; z-index:19"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>19</font></td></tr></table></div>
<div id="Layer20" style="position:absolute; left:606px; top:293px; width:42px; height:24px; z-index:20"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>20</font></td></tr></table></div>
<div id="Layer21" style="position:absolute; left:649px; top:293px; width:42px; height:24px; z-index:21"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>21</font></td></tr></table></div>
<div id="Layer22" style="position:absolute; left:690px; top:293px; width:42px; height:24px; z-index:22"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>22</font></td></tr></table></div>
<div id="Layer23" style="position:absolute; left:690px; top:269px; width:42px; height:24px; z-index:23"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>23</font></td></tr></table></div>
<div id="Layer24" style="position:absolute; left:649px; top:269px; width:42px; height:24px; z-index:24"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>24</font></td></tr></table></div>
<div id="Layer25" style="position:absolute; left:606px; top:269px; width:42px; height:24px; z-index:25"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>25</font></td></tr></table></div>
<div id="Layer26" style="position:absolute; left:564px; top:269px; width:42px; height:24px; z-index:26"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>26</font></td></tr></table></div>
<div id="Layer27" style="position:absolute; left:523px; top:269px; width:42px; height:24px; z-index:27"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>27</font></td></tr></table></div>
<div id="Layer28" style="position:absolute; left:404px; top:269px; width:42px; height:24px; z-index:28"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>28</font></td></tr></table></div>
<div id="Layer29" style="position:absolute; left:362px; top:269px; width:42px; height:24px; z-index:29"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>29</font></td></tr></table></div>
<div id="Layer30" style="position:absolute; left:321px; top:269px; width:42px; height:24px; z-index:30"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>30</font></td></tr></table></div>
<div id="Layer31" style="position:absolute; left:278px; top:269px; width:42px; height:24px; z-index:31"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>31</font></td></tr></table></div>
<div id="Layer32" style="position:absolute; left:236px; top:269px; width:42px; height:24px; z-index:32"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>32</font></td></tr></table></div>
<div id="Layer33" style="position:absolute; left:236px; top:214px; width:42px; height:24px; z-index:33"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>33</font></td></tr></table></div>
<div id="Layer34" style="position:absolute; left:278px; top:214px; width:42px; height:24px; z-index:34"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>34</font></td></tr></table></div>
<div id="Layer35" style="position:absolute; left:321px; top:214px; width:42px; height:24px; z-index:35"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>35</font></td></tr></table></div>
<div id="Layer36" style="position:absolute; left:362px; top:214px; width:42px; height:24px; z-index:36"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>36</font></td></tr></table></div>
<div id="Layer37" style="position:absolute; left:404px; top:214px; width:42px; height:24px; z-index:37"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>37</font></td></tr></table></div>
<div id="Layer38" style="position:absolute; left:523px; top:214px; width:42px; height:24px; z-index:38"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>38</font></td></tr></table></div>
<div id="Layer39" style="position:absolute; left:564px; top:214px; width:42px; height:24px; z-index:39"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>39</font></td></tr></table></div>
<div id="Layer40" style="position:absolute; left:606px; top:214px; width:42px; height:24px; z-index:40"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>40</font></td></tr></table></div>
<div id="Layer41" style="position:absolute; left:649px; top:214px; width:42px; height:24px; z-index:41"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>41</font></td></tr></table></div>
<div id="Layer42" style="position:absolute; left:690px; top:214px; width:42px; height:24px; z-index:42"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>42</font></td></tr></table></div>
<div id="Layer43" style="position:absolute; left:690px; top:190px; width:42px; height:24px; z-index:43"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>43</font></td></tr></table></div>
<div id="Layer44" style="position:absolute; left:649px; top:190px; width:42px; height:24px; z-index:44"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>44</font></td></tr></table></div>
<div id="Layer45" style="position:absolute; left:606px; top:190px; width:42px; height:24px; z-index:45"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>45</font></td></tr></table></div>
<div id="Layer46" style="position:absolute; left:564px; top:190px; width:42px; height:24px; z-index:46"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>46</font></td></tr></table></div>
<div id="Layer47" style="position:absolute; left:523px; top:190px; width:42px; height:24px; z-index:47"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>47</font></td></tr></table></div>
<div id="Layer48" style="position:absolute; left:404px; top:190px; width:42px; height:24px; z-index:48"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>48</font></td></tr></table></div>
<div id="Layer49" style="position:absolute; left:362px; top:190px; width:42px; height:24px; z-index:49"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>49</font></td></tr></table></div>
<div id="Layer50" style="position:absolute; left:321px; top:190px; width:42px; height:24px; z-index:50"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>50</font></td></tr></table></div>
<div id="Layer51" style="position:absolute; left:278px; top:190px; width:42px; height:24px; z-index:51"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>51</font></td></tr></table></div>
<div id="Layer52" style="position:absolute; left:236px; top:190px; width:42px; height:24px; z-index:52"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>52</font></td></tr></table></div>
<div id="Layer53" style="position:absolute; left:236px; top:136px; width:42px; height:24px; z-index:53"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>53</font></td></tr></table></div>
<div id="Layer54" style="position:absolute; left:278px; top:136px; width:42px; height:24px; z-index:54"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>54</font></td></tr></table></div>
<div id="Layer55" style="position:absolute; left:321px; top:136px; width:42px; height:24px; z-index:55"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>55</font></td></tr></table></div>
<div id="Layer56" style="position:absolute; left:362px; top:136px; width:42px; height:24px; z-index:56"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>56</font></td></tr></table></div>
<div id="Layer57" style="position:absolute; left:404px; top:136px; width:42px; height:24px; z-index:57"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>57</font></td></tr></table></div>
<div id="Layer58" style="position:absolute; left:523px; top:136px; width:42px; height:24px; z-index:58"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>58</font></td></tr></table></div>
<div id="Layer59" style="position:absolute; left:564px; top:136px; width:42px; height:24px; z-index:59"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>59</font></td></tr></table></div>
<div id="Layer60" style="position:absolute; left:606px; top:136px; width:42px; height:24px; z-index:60"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>60</font></td></tr></table></div>
<div id="Layer61" style="position:absolute; left:649px; top:136px; width:42px; height:24px; z-index:61"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>61</font></td></tr></table></div>
<div id="Layer62" style="position:absolute; left:690px; top:136px; width:42px; height:24px; z-index:62"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>62</font></td></tr></table></div>
<div id="Layer63" style="position:absolute; left:690px; top:111px; width:42px; height:24px; z-index:63"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>63</font></td></tr></table></div>
<div id="Layer64" style="position:absolute; left:649px; top:111px; width:42px; height:24px; z-index:64"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>64</font></td></tr></table></div>
<div id="Layer65" style="position:absolute; left:606px; top:111px; width:42px; height:24px; z-index:65"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>65</font></td></tr></table></div>
<div id="Layer66" style="position:absolute; left:564px; top:111px; width:42px; height:24px; z-index:66"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>66</font></td></tr></table></div>
<div id="Layer67" style="position:absolute; left:523px; top:111px; width:42px; height:24px; z-index:67"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>67</font></td></tr></table></div>
<div id="Layer68" style="position:absolute; left:404px; top:111px; width:42px; height:24px; z-index:68"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>68</font></td></tr></table></div>
<div id="Layer69" style="position:absolute; left:362px; top:111px; width:42px; height:24px; z-index:69"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>69</font></td></tr></table></div>
<div id="Layer70" style="position:absolute; left:321px; top:111px; width:42px; height:24px; z-index:70"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>70</font></td></tr></table></div>
<div id="Layer71" style="position:absolute; left:278px; top:111px; width:42px; height:24px; z-index:71"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>71</font></td></tr></table></div>
<div id="Layer72" style="position:absolute; left:236px; top:111px; width:42px; height:24px; z-index:72"><table width=96% height=96% border='0' cellpadding='0' cellspacing='0'><tr><td bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:10pt;font-weight:900;'>72</font></td></tr></table></div>


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
        좌석번호 : <input type="text" name="seat_number">
        <input type="post" value="남은시간확인">
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


