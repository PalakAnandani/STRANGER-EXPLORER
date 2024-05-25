<?php
include('connect.php');

if(isset($_POST['btn_send']))
{
  $edate = date('Y-m-d');
  $name = mysqli_real_escape_string($con,$_POST['name']);
  $contact = mysqli_real_escape_string($con,$_POST['contact']);
  $msg = mysqli_real_escape_string($con,$_POST['msg']);

  mysqli_query($con,"INSERT INTO `tbl_enquiry`(`edate`,`name`,`contact`,`msg`)VALUES('".$edate."','".$name."','".$contact."','".$msg."')");
  echo "<script>
  alert('Successfully sent your message!..');
  window.location.href='contact-us';
  </script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us</title>
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
  #top-contact {padding:1px;background:cadetblue;color:white;text-align:center;}
  #first-contact {margin-top:40px;}
  #first-contact h4 {font-size:18px;color:#002E5A;}
  #first-contact h5 {font-size:15px;color:#002E5A;font-weight:bold;}
  #first-contact p {margin-left:30px;color:gray;}
  #cform {margin-top:30px;}
  #cform .form-control {border-radius:0px;border:1px solid gainsboro;padding:20px;}
  #cform .btn-primary {padding:12px;font-size:15px;}
  </style>
</head>
<body>
  <?php
  include('header.php');
  ?>
<!-- <div id="top-contact">
    <h2>CONTACT</h2>
  </div>
  <br> -->
 <!--  <?php
  include('search-engine.php');
  ?> -->
<br>
<div class="container">
  <div class="row">
    <div id="first-contact" class="col-sm-8">
     <h4>LOVE TO HEAR FROM YOU</h4>
    
     <div style="width:20%;height:3px;background:dodgerblue;"></div>
        <div style="width:100%;height:1px;background:gainsboro;"></div>
       
        <form id="cform" method="post">
          <input class="form-control" type="text" name="name" placeholder="Enter Full Name">
          <br>
           <input class="form-control" type="number" name="contact" placeholder="Enter Contact Number">
           <br>
           <textarea class="form-control" type="text" name="msg" placeholder="Message" rows="7"></textarea>
           <br>
           <button type="submit" name="btn_send" class="btn btn-primary">SEND YOUR MESSAGE</button>
        </form>
    
    </div>

    <div id="first-contact" class="col-sm-4">
   <h4>CONTACT INFORMATION</h4>
    
      <div style="width:20%;height:3px;background:dodgerblue;"></div>
        <div style="width:100%;height:1px;background:gainsboro;"></div>
     <br>
        <h5><span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp;&nbsp;&nbsp;ADDRESSS</h5>
        <p>Main Office: NO.22-23 Street Name- City,Country Customer Center: NO.130-45 Streen Name- City, Country</p>
       
       <br>
        <h5><span class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;&nbsp;&nbsp;PHONE NUMBERS</h5>
        <p>Main Office: +880 123 456 789 <br>Customer Supprort: +880 123 456 789</p>
       
        <br>
        <h5><span class="glyphicon glyphicon-send"></span>&nbsp;&nbsp;&nbsp;&nbsp;EMAIL ADDRESS</h5>
        <p>Customer Support: info©mail.com <br>Technical Support: support©mail.com</p>
       
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-sm-12">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.5917264969444!2d79.0322443146489!3d21.04901598598744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4be3b68fc7049%3A0x77cb5872dcd20c33!2sInfoCepts+W+Building!5e0!3m2!1sen!2sin!4v1526635359599" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</div>
<?php
include('footer.php');
?>
     
    
</body>
</html>