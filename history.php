<?php
include('connect.php');

/*if(empty($_SESSION['uid']))
{
	header('location:index');
}*/
error_reporting(0);
$id = $_GET['id'];
mysqli_query($con,"DELETE FROM `tbl_book` WHERE `bid` = '".$id."' ");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Booking History Page</title>
	<meta charset="utf-8">
   <meta name="description" content="Design your website with a significant positive change. Will assist you to build your business website with an creative development, with an unique design and innovative ideas.">
   <meta name="keywords" content="web design and development, php traning, bulk sms service provider, domain name registration, seo service in India">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="icon" href="icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		.well-sm, .well {box-shadow:0 0 2px #010E28;}

		.col-sm-3 .well h3 {color:#010E28;}
		.col-sm-3 .well:hover {border:1px solid #010E28;}

              .table thead tr th {background-color:#010E28;
                                  color:white;}
                .table thead tr {border-left:2px solid #010E28;border-right:2px solid #010E28;}                  
               .table thead tr th {border:1px solid white;}
              .table tbody tr td {border:1px solid #010E28;}
	</style>
</head>
<body>

	<?php include('header.php'); ?>

	<div class="container">

		<div class="well well-sm">
			<span class="glyphicon glyphicon-list"></span>
			<b>BOOKING HISTORY PAGE</b>
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
                                          <!-- <th>Photo</th> -->
                                          <th>Location</th>
                                          <th>Category</th>
                                          <th>Title</th>
                                          <th>Description</th>
                                          <th>Action</th>
                                   </tr>
                            </thead>

                            <tbody id="myTable">
                                   <?php
                                   $ulist = mysqli_query($con,"SELECT * FROM `tbl_book` WHERE `hidid` = '".$_SESSION['user_id']."' ");
                                   $counter = 1;
                                   while($ulist_data = mysqli_fetch_assoc($ulist)){
                                   ?>
                                   <tr>
                                          <td><?php echo $counter; ?></td>
                                          <td><?php echo $ulist_data['bid'] ?></td>
                                          <td><?php echo $ulist_data['bdate'] ?></td>
                                          <td><?php echo $ulist_data['btime'] ?></td>
                                          <td><?php echo $ulist_data['hidname'] ?></td>
                                          <!-- <td><?php echo $ulist_data['hidphoto'] ?></td> -->
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
                            <?php $counter++;} ?>
                            </tbody>
                            
                     </table>
                      
               </div>

              <!-- -------------- user list table send ---------- -->


		<!-- -------------------- Content page end ----------------------------- -->
		
	</div>
  <?php
include('footer.php');
?>

</body>
</html>