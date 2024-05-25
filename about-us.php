<!DOCTYPE html>
<html lang="en">
<head>
  <title>About Us</title>
  <meta charset="utf-8">
   <meta name="description" content="Design your website with a significant positive change. Will assist you to build your business website with an creative development, with an unique design and innovative ideas.">
   <meta name="keywords" content="web design and development, php traning, bulk sms service provider, domain name registration, seo service in India">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="icon" href="icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
  #blse {margin-top:0px;}
  #first-about {margin-top:30px;}
  #second-about {margin-top:30px;}
   #first-about p {color:gray;}
   #first-about .well-sm {border-radius:0px;padding:20px;border-left:4px solid dodgerblue;border-top:none;border-right:none;border-bottom:none;}
   #second-about .well-sm {background:none;border:1px solid whitesmoke;padding:20px;border-left:2px solid dodgerblue;}
   #second-about h4 {font-weight:bold;font-size:15px;}
   #top-about {padding:1px;background:CadetBlue;color:white;text-align:center;}
   #right-css {float:right;width:70%;}
   #right-css p {color:gray;}
   #border-right span {color:darkgray;}
  </style>
</head>
<body>
  <?php
  include('header.php');
  ?>

  <!-- <div id="top-about">
    <h2>ABOUT US</h2>
  </div>
  <br>
   <?php
  include('search-engine.php');
  ?> -->

<div class="container">
  <div class="row">
    <div id="first-about" class="col-sm-8">
      <img src="images/about2.jpg" class="img-thumbnail">
         <br><br><br>
      <p>This is an example page. It’s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:</p>
       <br>
      <div class="well well-sm">
        <p>Hi there! I’m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like piña coladas. (And gettin’ caught in the rain.)</p>
      </div>
       <br>
       <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
       <br>
     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
      <br>
     <div class="well well-sm">
        <p>Hi there! I’m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like piña coladas. (And gettin’ caught in the rain.)</p>
      </div>
      <br>
      <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
    <hr>
    </div>

    <div id="second-about" class="col-sm-4">
  <?php
  include('add-block.php');
  ?>
       
    </div>
  </div>
</div>

<?php
include('footer.php');
?>
     
    
</body>
</html>