<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search Result</title>
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


  </style>
</head>
<body>
  <?php
  include('header.php');
  ?>
  <!-- <div id="top-s1">
    <h2>Search Your Matching Interest</h2>
  </div> -->
  
<?php
include('search-engine.php');
?>
<div class="container">
  <div class="row">
    <div id="first-result" class="col-sm-12">
     
     <div class="well well-sm">
      <span class="glyphicon glyphicon-list"></span>
      <b>BOOKING INTEREST SEARCH PAGE</b>
    </div>
    

    <!-- -------------------- Content page start ----------------------------- -->

              <div class="row">

                     <div class="col-sm-3">

                      <input style="border:1px solid #010E28;" class="form-control" id="myInput" type="text" placeholder="Filter Here..">

                     <script>
                     $(document).ready(function(){
                       $("#myInput").on("keyup", function() {
                         var value = $(this).val().toLowerCase();
                         $("#myTable tr").filter(function() {
                           $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                         });
                       });
                     });
                     </script>
                            
                     </div>

                     <div class="col-sm-7">
                            
                     </div>

                     
              </div>


              <!-- -------------- user list table start ---------- -->
             <br>
               <div class="table-responsive">

                     <table class="table table-hover table-striped table-bordered">

                            <thead>
                                   <tr>
                                          <th>Sr No</th>
                                          <th>Booking Id</th>
                                          <th>Booking Date</th>
                                          <th>Booking Time</th>
                                          <th>Traveller Name</th>
                                          <th>Photo</th>
                                          <th>Location</th>
                                          <th>Category</th>
                                          <th>Title</th>
                                          <th>Description</th>
                                          <th>Action</th>
                                   </tr>
                            </thead>

                            <tbody id="myTable">
                                   <?php
                                   if(isset($_POST['search']))
                                   {
                                    $area = mysqli_real_escape_string($con,$_POST['area']);
                                    $bdate = mysqli_real_escape_string($con,$_POST['bdate']);
                                    $btime = mysqli_real_escape_string($con,$_POST['btime']);
                                   $ulist = mysqli_query($con,"SELECT * FROM `tbl_book` WHERE `hidarea` = '".$area."' AND `bdate`='".$bdate."' AND `btime`='".$btime."' ");
                                   $counter = 1;
                                   while($ulist_data = mysqli_fetch_assoc($ulist)){
                                   ?>
                                   <tr>
                                          <td><?php echo $counter; ?></td>
                                          <td><?php echo $ulist_data['bid'] ?></td>
                                          <td><?php echo $ulist_data['bdate'] ?></td>
                                          <td><?php echo $ulist_data['btime'] ?></td>
                                          <td><?php echo $ulist_data['hidname'] ?></td>
                                          <td>
                                           <img src="<?php echo 'photos/'.$ulist_data['hidphoto'] ?>" width="60px">
                                          </td>
                                          <td><?php echo $ulist_data['hidarea'] ?></td>
                                          <td><?php echo $ulist_data['hidsubarea'] ?></td>
                                          <td><?php echo $ulist_data['hidtitle'] ?></td>
                                          <td><?php echo $ulist_data['hiddesc'] ?></td>
                                          <td>
                                              <a onclick="return confirm('Are you sure?')" href="history?id=<?php echo $ulist_data['bid'] ?>">
                                              <span class="glyphicon glyphicon-trash"></span>
                                              Delete
                                              </a>   
                                          </td>
                                   </tr>
                            <?php $counter++;}} ?>
                            </tbody>
                            
                     </table>
                      
               </div>

              <!-- -------------- user list table send ---------- -->


    <!-- -------------------- Content page end ----------------------------- -->
    

    </div>
    <!-- <div id="second-result" class="col-sm-3">
      <?php
      include('add-block.php');
      ?>
    </div> -->
  </div>
 </div>

<?php
include('footer.php');
?>
     
    
</body>
</html>