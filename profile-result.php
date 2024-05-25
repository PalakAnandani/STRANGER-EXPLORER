<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile Result</title>
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
  #top-s1 {padding:1px;background:cadetblue;color:white;text-align:center;}
  #first-result {margin-top:30px;}
  #second-result {margin-top:30px;}
   #second-result .well-sm {background:none;border:1px solid whitesmoke;padding:20px;border-left:2px solid dodgerblue;}
   #second-result h4 {font-weight:bold;font-size:15px;}
    #right-css {float:right;width:70%;}
   #right-css p {color:gray;}
#first-result h1 {font-weight:bold;}
#first-result .well-sm {padding-left:25px;}
 table {width:100%;}
 table span {font-size:25px;}
 table th {text-align:center;}
#first-result li {list-style-type:none;line-height:27px;}
  </style>
</head>
<body>
  <?php
  include('header.php');
  ?>
  <div id="top-s1">
    <h2>Profile Result</h2>
  </div>
  <br>
<?php
include('search-engine.php');
?>
<div class="container">
  <div class="row">
    <div id="first-result" class="col-sm-8">
        
          <img src="images/about2.jpg" class="img-responsive">
         
           <div class="well well-sm">
            <h1>Times Directory Yellow Pages</h1>
            <p><span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp;Jaitala Road Near NIT garden</p>
            <h4><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;0712 786543 , 9867544431</h4>
            <p><span class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;info@internosys.com</p>
            <hr>
          
              <table>
                <tr>
                  <th style="border-right:1px solid gainsboro;">
              <span class="glyphicon glyphicon-phone"></span> 
              <p>SMS</p>
            </th>
          <th style="border-right:1px solid gainsboro;">
              <span class="glyphicon glyphicon-edit"></span>
              <p>Review</p>
            </th>

             <th>
              <span class="glyphicon glyphicon-share"></span>
              <p>Share</p>
            </th>
          </tr>
            </table>
           <hr>
            
           <h4>Timings :</h4>
           <ul>
            <li><span class="glyphicon glyphicon-time"></span>&nbsp;&nbsp;&nbsp;Monday &nbsp;&nbsp;&nbsp; 09:30 am - 06:30 pm</li>
            <li><span class="glyphicon glyphicon-time"></span>&nbsp;&nbsp;&nbsp;Tuesday &nbsp;&nbsp;&nbsp; 09:30 am - 06:30 pm</li>
            <li><span class="glyphicon glyphicon-time"></span>&nbsp;&nbsp;&nbsp;Wednesday &nbsp;&nbsp;&nbsp; 09:30 am - 06:30 pm</li>
            <li><span class="glyphicon glyphicon-time"></span>&nbsp;&nbsp;&nbsp;Thursday &nbsp;&nbsp;&nbsp; 09:30 am - 06:30 pm</li>
            <li><span class="glyphicon glyphicon-time"></span>&nbsp;&nbsp;&nbsp;Friday &nbsp;&nbsp;&nbsp; 09:30 am - 06:30 pm</li>
           <li><span class="glyphicon glyphicon-time"></span>&nbsp;&nbsp;&nbsp;Saturday &nbsp;&nbsp;&nbsp; 09:30 am - 06:30 pm</li>
           <li><span class="glyphicon glyphicon-time"></span>&nbsp;&nbsp;&nbsp;Sunday &nbsp;&nbsp;&nbsp; CLOSED</li>

           </ul>
      </div>
    </div>
    
    <div id="second-result" class="col-sm-4">
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