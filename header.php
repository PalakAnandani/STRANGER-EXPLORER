<?php
session_start();

/*$_SESSION['user_id'];
if(empty($_SESSION['user_id']))
{
  header("location:index");
}

$_SESSION['name'];
if(empty($_SESSION['name']))
{
  header("location:index");
}*/
?>
<script type="text/javascript">
 $(document).ready(function () {
        var url = window.location;
  
        $('ul.nav a[href="' + url + '"]').parent().addClass('active');

        $('ul.nav a').filter(function () {
            return this.href == url;
        }).parent().addClass('active').parent().parent().addClass('active');
    });
   </script>
   <style>
   body {font-family:Arial;}
.navbar-inverse {background:white;border:none;margin-top:-20px;box-shadow:0 3px 3px lightgray;border-radius:0;}
 .icon-bar {border:1px solid #002E5A;}
 #menu_right {margin-top:-1px;}
 #menu_right li {font-weight:bold;font-size:12px;}
  #menu_right li a:hover {color:black;}
  #menu_right li a {color:black;}
  #menu_right>.active>a {
  color: white !important;
  background: #002E5A !important;
}
 #menu_right>.dropdown>ul li.active>a {
  color: white !important;
  background: #002E5A !important;}

.abcd {position:fixed;z-index:50;width:100%;}
#logo {margin-top:-70px;width:160px; padding:10px;margin-left:-180px;}
.navbar-right {box-shadow:0 2px 2px #002E5A ;}
#logo-text {margin-top:-95px;margin-left:-70px;font-style:italic;color:#002E5A;font-size:25px;}
   </style>
<div class="abcd">
<div style="height:30px;background:#1d78d0;border-left:1px solid #002E5A;border-right:1px solid #002E5A;border-top:1px solid #002E5A;" class="well well-sm">
 
  <p style="float:left;color:white;"><span class="glyphicon glyphicon-phone-alt"></span> +919307422685</p>
  <p style="float:right;color:white;"><b>Follow Us : &nbsp;</b>
  <span class="fa fa-facebook"></span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-instagram"></span>
  &nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-youtube"></span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="fa fa-linkedin"></span>
  </p>
 
  <div style="clear:both;"></div>
</div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button style="border:none;background:none;" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a style="" class="navbar-brand" href="index">
        <img id="logo" src="images/logo.png">
     <h2 id="logo-text"padding: 20px; margin:0;>Stranger Explorer</h2>
      </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul id="menu_right" class="nav navbar-nav navbar-right">
        <li><a href="index">HOME</a></li>
        <li><a href="about-us">ABOUT</a></li>
        <li><a href="find_destination">FIND DESTINATION</a></li>
        <!-- <li class="dropdown">
        <a style="color:gray;" class="dropdown-toggle" data-toggle="dropdown" href="#">SERVICE
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a style="" href="service1">SERVICE 1</a></li>
          <li><a style="" href="service2">SERVICE 2</a></li>
          <li><a style="" href="service3">SERVICE 3</a></li>
          <li><a style="" href="service4">SERVICE 4</a></li>
        </ul>
      </li> -->
        <li><a href="blog">BLOG</a></li>
        <li><a href="login">LOGIN</a></li>
        <li><a href="user_signup">SIGN UP</a></li>
        <li><a href="admin/">ADMIN</a></li>
        <li><a href="contact-us">CONTACT</a></li>
        <?php
        if(!empty($_SESSION['user_id']))
        {
        ?>
        <li>
          <div class="dropdown">
          <button style="margin-top:7px;margin-right:5px;" class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $_SESSION['name'] ?>
          <span class="caret"></span></button>
          <ul class="dropdown-menu">
            <li><a href="profile"> <span class="glyphicon glyphicon-user"></span> POFILE</a></li>
            <li><a href="search-result"> <span class="glyphicon glyphicon-search"></span> SEARCH</a></li>
            <li><a href="history"> <span class="glyphicon glyphicon-list"></span> HISTORY</a></li>
            <li><a href="inbox"> <span class="glyphicon glyphicon-envelope"></span> INBOX</a></li>
            <li><a href="logout"> <span class="glyphicon glyphicon-off"></span> LOGOUT</a></li>
          </ul>
          </div>
        </li>
        <?php
        }else
        {
          echo "";
        } 
        ?>

      </ul>
    
    </div>
  </div>
</nav>
</div>
<br><br><br><br><br>