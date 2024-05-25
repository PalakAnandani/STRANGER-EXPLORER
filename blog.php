<!DOCTYPE html>
<html lang="en">
<head>
  <title>Blog</title>
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
 
  #first-blog {margin-top:30px;}
  #second-blog {margin-top:30px;}
  #first-col {border:1px solid gainsboro;}
  #first-col h1 {font-weight:bold;line-height:50px;}
   #first-blog p {color:gray;}
   #first-blog .well-sm {border-radius:0px;padding:20px;border-left:4px solid dodgerblue;border-top:none;border-right:none;border-bottom:none;}
   #second-blog .well-sm {background:none;border:1px solid whitesmoke;padding:20px;border-left:2px solid dodgerblue;}
   #second-blog h4 {font-weight:bold;font-size:15px;}
   #top-blog {padding:1px;background:cadetblue;color:white;text-align:center;}
   #right-css {float:right;width:70%;}
   #right-css p {color:gray;}
   #border-right span {color:darkgray;}
   #special-text {background:dodgerblue;padding:20px;width:95%;}
   #special-text h4 {color:white;font-size:22px;line-height:35px;}
   #special-text p {color:white;}
  #blse {margin-top:0px;}
  </style>
</head>
<body>
  <?php
  include('header.php');
  ?>
<!-- <div id="top-blog">
    <h2>BLOG</h2>
  </div>
  <br>
   <?php
  include('search-engine.php');
  ?> -->

<div class="container">
  <div class="row">
    <div id="first-blog" class="col-sm-8">
      <div id="first-col">
      <img src="images/blog1.jpg" width="100%">
         
         <div style="padding:30px;">
         <h1>On up to the east side to a deluxe apartment in the sky</h1>
         <p><span class="glyphicon glyphicon-user"> Will Smith</span> 
          <span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span> 
         <span class="glyphicon glyphicon-time"> 13 June 2015</span>
        </p>

        <p style="margin-top:20px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore. Lorem ipsum 
          dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Class aptent taciti sociosqu ad litora torquent.</p>
         <br>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error aliquam facere aliquid atque accusamus 
            nostrum mollitia beatae quasi vel dolorem, autem nisi! Eius facere magni culpa commodi voluptatem, ducimus
             dolorum. consectetur adipisicing elit. Hic repellat rerum cupiditate unde iure fuga quisquam voluptas quae 
             voluptatum, perferendis eum, doloremque.</p>
          <br>
             <center><div id="special-text">
              <h4>To explore strange new worlds to seek out new life and new civilizations to boldly go where no man has gone before</h4>
              <p>- Alfred Marshel</p>
             </div></center>
             <br><brd>
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error porro ipsam non rerum, itaque nihil 
              aliquid libero inventore. Eius architecto placeat quis nam similique, nobis quod, animi amet. Minima, 
              laboriosam! possimus minus nisi iure pariatur exercitationem blanditiis nesciunt sequi! Nisi, neque, 
              laborum voluptatem exercitationem minus facere reiciendis quis.</p>
        </div>
       </div>
    </div>

    <div id="second-blog" class="col-sm-4">
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