<?php
include('connect.php');

if(isset($_POST['btn_book']))
{
  $hidid = mysqli_real_escape_string($con,$_POST['hidid']);
  $hidname = mysqli_real_escape_string($con,$_POST['hidname']);
  $hidphoto = mysqli_real_escape_string($con,$_POST['hidphoto']);
  $hidarea = mysqli_real_escape_string($con,$_POST['hidarea']);
  $hidsubarea = mysqli_real_escape_string($con,$_POST['hidsubarea']);
  $hidtitle = mysqli_real_escape_string($con,$_POST['hidtitle']);
  $hiddesc = mysqli_real_escape_string($con,$_POST['hiddesc']);
  $bdate = mysqli_real_escape_string($con,$_POST['bdate']);
  $btime = mysqli_real_escape_string($con,$_POST['btime']);

  mysqli_query($con,"INSERT INTO `tbl_book` (`hidid`,`hidname`,`hidphoto`,`hidarea`,`hidsubarea`,`hidtitle`,`hiddesc`,`bdate`,`btime`) VALUES('".$hidid."','".$hidname."','".$hidphoto."','".$hidarea."','".$hidsubarea
    ."','".$hidtitle."','".$hiddesc."','".$bdate."','".$btime."') ");
  echo "<script>
    alert('Successfully booked your journey !..');
    window.location.href='find_destination';
    </script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Find Destination</title>
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
  .panel-default .panel-heading{background-color:steelblue;color:white;}
  </style>
</head>
<body>
  <?php
  include('header.php');
  ?>
 <br>
<?php
include('search-engine1.php');
?>
<br>
<div class="container">


<div class="row">
  <?php
  if(isset($_POST['search']))
  {
    $area = mysqli_real_escape_string($con,$_POST['area']);
  $floc = mysqli_query($con,"SELECT * FROM `add_locations` WHERE `area` = '".$area."' ");
  while($floc1 = mysqli_fetch_assoc($floc))
  {
  ?>
   
    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="row">
            <div class="col-sm-6">
              <?php echo $floc1['area'] ?> (<?php echo $floc1['subarea'] ?>)
            </div>
            <div class="col-sm-6">
              Upload Date: <?php echo $floc1['ldate'] ?>
            </div>
          </div>
        </div>
        <div class="panel-body">
           <div class="row">
            <div class="col-sm-4">
              <img src="<?php echo 'admin/photos/'.$floc1['photo'] ?>" width="100%" class="img-thumbnail">
            </div>
            <div class="col-sm-8">
              <p><b>Title: </b><?php echo $floc1['title'] ?></p>
              <p><b>Description: </b><?php echo $floc1['description'] ?></p>
              <a href="<?php echo $floc1['glink'] ?>" target="blank" class="btn btn-primary">Location</a>
            </div>
          </div>
        </div>
        <div class="panel-footer">
          <form method="post">
            <input type="hidden" name="hidid" value="<?php echo $_SESSION['user_id'] ?>">
            <input type="hidden" name="hidname" value="<?php echo $_SESSION['name'] ?>">
            <input type="hidden" name="hidphoto" value="<?php echo $_SESSION['photo'] ?>">
            <input type="hidden" name="hidarea" value="<?php echo $floc1['area'] ?>">
            <input type="hidden" name="hidsubarea" value="<?php echo $floc1['subarea'] ?>">
            <input type="hidden" name="hidtitle" value="<?php echo $floc1['title'] ?>">
            <input type="hidden" name="hiddesc" value="<?php echo $floc1['description'] ?>">
          <div class="row">
            <div class="col-sm-4">
              <input type="date" name="bdate" class="form-control" required="">
            </div>
            <div class="col-sm-4">
              <select name="btime" class="form-control" required="">
                <option value="">Select Time</option>
                <option>9 AM</option>
                <option>10 AM</option>
                <option>11 AM</option>
                <option>12 PM</option>
                <option>1 PM</option>
              </select>
            </div>
            <div  class="col-sm-4">
              <button type="submit" name="btn_book" class="btn btn-primary">Book</button>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>

<?php }} ?>

  </div>
</div>

<?php
include('footer.php');
?>
     
    
</body>
</html>