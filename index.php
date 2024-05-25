<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>STRANGER EXPLORER</title>
  <meta charset="utf-8">
   <meta name="description" content="Design your website with a significant positive change. Will assist you to build your business website with an creative development, with an unique design and innovative ideas.">
   <meta name="keywords" content="web design and development, php traning, bulk sms service provider, domain name registration, seo service in India">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="icon" href="icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script type="text/javascript">
    window.onload = function(){
        window.displayImgCount = 0;
        function cycleImage(){
            if (displayImgCount !== 0) {
                document.getElementById("img" + displayImgCount).style.display = "none";
            }
            displayImgCount = displayImgCount === 4 ? 1 : displayImgCount + 1;
            document.getElementById("img" + displayImgCount).style.display = "block";
            setTimeout(cycleImage, 1000);
        }
        cycleImage();
    }
</script>

<style>
body,h3,p {font-family:Geneva,Tahoma;}
#slidesrs {margin-top:-11px;}
.col-sm-3 {margin-top:10px;}
.col-sm-4 {margin-top:20px;}


.top-cat-content {border-radius:2px;background:white;padding:10px;}
.top-cat-content p {text-align:center;color:gray;}
.top-cat h4 {font-weight:bold;font-size:20px;}
.top-cat img {margin-top:-40px;}
.color-top-cat {padding:15px;background:#002E5A;color:gold;width:24%;margin-top:-35px;box-shadow:0 0 10px black;}
.color-top-cat span {font-size:20px;}
#top-cat-icon .col-sm-3 {margin-top:40px;}

#our-org {padding:20px;background:GhostWhite;}
#about-one p {line-height:25px;}
#about-one li {list-style-type:none;line-height:35px;}
#bottom-one h3 {text-align:left;}
#bottom-one p {color:gray;line-height:24px;margin-top:20px;}
#bottom-one #accordion {margin-top:20px;}
</style>
 

</head>
<body>
	<?php
  include('header.php');
  ?>
<div id="slidesrs">
 <div class="centered">We Find The Best People For You!!</div>
 <style>
  .centered {
  font-size:40px;
  font:Georgia, serif;
  color:#212529;
  text-shadow: 2px 2px 20px Black;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
    <img id="img1" style="margin-top:5px;display:none;" src="images/homeimg1.jpg" width="100%" >
   <img id="img2" style="margin-top:5px;display:none;" src="images/homeimg2.jpg" width="100%">
    <img id="img3" style="margin-top:5px;display:none;" src="images/homeimg4.jpg" width="100%">
    <img id="img4" style="margin-top:5px;display:none;" src="images/homeimg3.jpg" width="100%">
</div>

  <?php
 /* include('search-engine.php');*/
  ?>
  
   <div class="container">
     <br>
     <br>
<!-- 
     <div class="alert alert-info alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Notification!</strong> You are travelling with following details:-
<br>
   
             <br>
               <div class="table-responsive">

                     <table class="table table-hover table-bordered">

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
                                   $ulist= mysqli_query($con,"SELECT * FROM `tbl_book` WHERE `hidarea` IN ('Dharampeth')");
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
                            <?php $counter++;} ?>
                            </tbody>
                            
                     </table>
                      
               </div>

             


</div>

     <br> -->
<!-- ////////////////////// Top Category Start ////////////////////////////////////////// -->
 <center>
        <h3 style="font-weight:bold;color:#002E5A;">POPULAR DESTINATIONS</h3>
        <br>
        <div id="top-cat-icon" class="row">
      <div class="col-sm-3">
        <img src="images/futala.png" class="img-thumbnail" width="100%">
        <h3>Futala Lake</h3>
      <p>The lake covers 60 acres Built by the Bhosle kings of Nagpur, 
        the lake is known for its coloured fountains.</p>
      </div>
      <div id="top-cat-icon" class="row">
      <div class="col-sm-3">
        <img style="max-width=100%; height=150px" src="images/zero mile marker.jpg" class="img-thumbnail" width="100%" height=100%>
        <h3>Zero Mile Stone</h3>
      <p>Zero Mile Stone is a monument built by the British during the Great Trigonometrical Survey of
        India in 1907 in Nagpur, Maharashtra.</p>
      </div>
      <div id="top-cat-icon" class="row">
      <div class="col-sm-3">
        <img src="images/koraditemple.jpg" class="img-thumbnail" width="100%" height=100%>
        <h3>Koradi Mandir</h3>
      <p>Koradi Shree Mahalaxmi Jagdamba Mata Mandir popularly known as Koradi Devi Temple
        Located in Koradi City near Nagpur. </p>
      </div>
      <div id="top-cat-icon" class="row">
      <div class="col-sm-3">
        <img src="images/vidya.jpeg" class="img-thumbnail" width="100%" height=100%>
        <h3>Bharatiya Vidya Bhawan</h3>
      <p>A ‘Sanskritik Kendra’ at Koradi, with an aim of enriching the future generations of India.</p>
      </div>

    </center>
    <br>
    <div id="top-cat-icon" class="row">
      <div class="col-sm-3">
        <div class="well well-sm">

          <div class="top-cat">
         <center> 
          <div class="color-top-cat">
            <span class="glyphicon glyphicon-user"></span>
          </div>
          <h4>Community</h4>
          </center>
         </div>

         <div class="top-cat-content">
          <p>Announcements</p>
          <p>Local Meetups</p>
          <p>Resource Sharing</p>
          <p>Member Profiles</p>
         </div>

        </div>

      </div>

     <div class="col-sm-3">
        <div class="well well-sm">

          <div class="top-cat">
         <center> 
          <div class="color-top-cat">
            <span class="glyphicon glyphicon-blackboard"></span>
          </div>
          <h4>Safety Tips</h4>
          </center>
         </div>

         <div class="top-cat-content">
          <p>Research Your Destination</p>
          <p>Avoid Risky Behaviors</p>
          <p>Secure Your Accommodations</p>
          <p>Share Your Itinerary</p>
         </div>

        </div>

      </div>


     <div class="col-sm-3">
        <div class="well well-sm">

          <div class="top-cat">
         <center> 
          <div class="color-top-cat">
            <span class="glyphicon glyphicon-cog"></span>
          </div>
          <h4>Services</h4>
          </center>
         </div>

         <div class="top-cat-content">
           <p>Continuous Updates and Improvements</p>
          <p>Personalized Recommendations</p>
          <p>User-Friendly Chat Interface</p>
          <p>Secure Authentication</p>
         </div>

        </div>

      </div>


     <div class="col-sm-3">
        <div class="well well-sm">

          <div class="top-cat">
         <center> 
          <div class="color-top-cat">
            <span class="glyphicon glyphicon-shopping-cart"></span>
          </div>
          <h4>Blog</h4>
          </center>
         </div>

         <div class="top-cat-content">
           <p>Cultural Experiences</p>
          <p>Adventure Activities</p>
          <p>Travel Stories</p>
          <p>Local Perspectives</p>
         </div>

        </div>

      </div>

    </div>
   <!--  <hr> -->
<!-- ////////////////////// Top Category End ////////////////////////////////////////// -->
<br>
    <center>
        <h3 style="font-weight:bold;color:#002E5A;">OUR SERVICES</h3>
        <br>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt
     eius magni provident, <br>doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..
</p>
    </center>

<br>
    <div class="row">
      <div class="col-sm-4">
        <img style="float:left;width:80px;" src="images/service1.jpg">
        <div style="float:right;width:75%;padding-left:10px;">
          <h4 style="color:#002E5A;font-weight:bold;font-size:21px;">Consulting</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
        </div>
        <div style="clear:both;"></div>
      </div>

       <div class="col-sm-4">
        <img style="float:left;width:80px;" src="images/service2.jpg">
        <div style="float:right;width:75%;padding-left:10px;">
          <h4 style="color:#002E5A;font-weight:bold;font-size:21px;">Strategy</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
        </div>
        <div style="clear:both;"></div>
      </div>

       <div class="col-sm-4">
        <img style="float:left;width:80px;" src="images/service3.jpg">
        <div style="float:right;width:75%;padding-left:10px;">
          <h4 style="color:#002E5A;font-weight:bold;font-size:21px;">Analysis</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
        </div>
        <div style="clear:both;"></div>
      </div>
    </div>
<!-- <br><br> -->
    <div class="row">
      <div class="col-sm-4">
        <img style="float:left;width:80px;" src="images/service4.jpg">
        <div style="float:right;width:75%;padding-left:10px;">
          <h4 style="color:#002E5A;font-weight:bold;font-size:21px;">Investment</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
        </div>
        <div style="clear:both;"></div>
      </div>

       <div class="col-sm-4">
        <img style="float:left;width:80px;" src="images/service5.jpg">
        <div style="float:right;width:75%;padding-left:10px;">
          <h4 style="color:#002E5A;font-weight:bold;font-size:21px;">Creative</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
        </div>
        <div style="clear:both;"></div>
      </div>

       <div class="col-sm-4">
        <img style="float:left;width:80px;" src="images/service6.jpg">
        <div style="float:right;width:75%;padding-left:10px;">
          <h4 style="color:#002E5A;font-weight:bold;font-size:21px;">24/7 Support</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt</p>
        </div>
        <div style="clear:both;"></div>
      </div>
    </div>
   
   </div>

   <br>
   <div id="our-org">
    <center>
        <h3 style="font-weight:bold;color:#002E5A;">OUR ORGANIZATION</h3>
        <br>
    <p>Welcome to Stranger Explorer, your ultimate companion for solo travelers!,<br>Join a vibrant community of 
    solo travelers and unlock a world of unforgettable experiences. From hidden gems to iconic landmarks,
    embark on your next great adventure with confidence.
</p>
    </center>
<br>
    <div id="about-one" class="row">
      <div class="col-sm-6">
<style>
.image-container {
    position: relative;
    width: 100%; /* Adjust width as needed */
}

.image-container img {
    width: 100%; /* Ensure the image fills the container */
    vertical-align: middle;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5); /* Adjust opacity as needed */
    color: #fff; /* Text color */
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 0; /* Initially hidden */
    transition: opacity 0.3s ease; /* Add fade transition */
}

.image-container:hover .overlay {
    opacity: 1; /* Show overlay on hover */
}

.overlay-text {
    text-align: center;
    padding: 20px; /* Adjust padding as needed */
    font-size: 50px;
    font-family:font-style: oblique 40deg;;
}
</style>
<div class="image-container">
    <img src= "images/group.jpg" alt="Image">
    <div class="overlay">
        <div class="overlay-text">Discover. Connect. Explore.</div>
    </div>
</div>
        <!-- <img src="images/group.jpg" class="img-thumbnail" width="100%"> -->
      </div>

       <div class="col-sm-6">
        <p>Embark on a journey of discovery with Stranger Explorer, your trusted companion for solo travel
          adventures! Whether you're craving the thrill of untamed wilderness, the allure of vibrant cityscapes,
          or the serenity of secluded getaways, our platform is your gateway to unforgettable experiences..</p>
   <br>
          <ul>
            <li><span style="font-size:8px;border:1px solid #002E5A;border-radius:10px;padding:5px;" class="glyphicon glyphicon-menu-right"></span>&nbsp;&nbsp;&nbsp;&nbsp;Explore confidently, independently</li>
            <li><span style="font-size:8px;border:1px solid #002E5A;border-radius:10px;padding:5px;" class="glyphicon glyphicon-menu-right"></span>&nbsp;&nbsp;&nbsp;&nbsp;Discover hidden gems, be inspired</li>
            <li><span style="font-size:8px;border:1px solid #002E5A;border-radius:10px;padding:5px;" class="glyphicon glyphicon-menu-right"></span>&nbsp;&nbsp;&nbsp;&nbsp;Travel at your own pace, on your terms</li>
            <li><span style="font-size:8px;border:1px solid #002E5A;border-radius:10px;padding:5px;" class="glyphicon glyphicon-menu-right"></span>&nbsp;&nbsp;&nbsp;&nbsp;Create lasting memories, forge connections</li>
          </ul>
     <br>
          <a href="about-us"><button style="background:gold;color:black;" class="btn btn-default">Learn More</button></a>
          <br><br>
      </div>

    </div>
</div>

<!-- <div class="container">
  <div id="bottom-one" class="row">
    <div class="col-sm-4">
     <h3 style="font-weight:bold;color:#002E5A;">Programes</h3> 
     <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
      rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
      Nemo enim ipsam voluptatem quia voluptas sit aspernatur. </p>

      <p>Sed ut perspiciaatis iste natus error sit voluptatem probably haven't heard of them accusamus.</p>
    </div>

    <div class="col-sm-4">
     <h3 style="font-weight:bold;color:#002E5A;">Latest News</h3> 
    <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a style="font-weight:bold;font-size:14px;text-decoration:none;" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        <span style="font-size:12px;" class="glyphicon glyphicon-menu-right"></span>&nbsp;&nbsp;&nbsp;&nbsp;Collapsible Group 1</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam.</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a style="font-weight:bold;font-size:14px;text-decoration:none;" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        <span style="font-size:12px;" class="glyphicon glyphicon-menu-right"></span>&nbsp;&nbsp;&nbsp;&nbsp;Collapsible Group 2</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a style="font-weight:bold;font-size:14px;text-decoration:none;" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        <span style="font-size:12px;" class="glyphicon glyphicon-menu-right"></span>&nbsp;&nbsp;&nbsp;&nbsp;Collapsible Group 3</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.</div>
    </div>
  </div> -->
<!-- </div>
    </div>

     <div class="col-sm-4">
     <h3 style="font-weight:bold;color:#002E5A;">Testimonials</h3> 
    <img style="margin-top:15px;" src="images/test.jpg" class="img-responsive">
    </div>
  </div>
</div> -->

<div class="scroll-container">
  <img src="images/dragonpalace2.jpg" alt="Cinque Terre" >
  <img src="images/ambazari-lake-garden.jpg" alt="Forest">
  <img src="images/swaminarayan.jpg" alt="Northern Lights">
  <img src="images/sakkardara-lake-garden.jpg" alt="Mountains">
</div>
<style>
div.scroll-container {
  background-color: white;
  overflow: auto;
  white-space: nowrap;
  padding: 10px;
}

div.scroll-container img {
  padding: 10px;
}
</style>

<h2 style="color:#002E5A; text-align:center">
        FAQ's
    </h2>
    <div class="layout">
        <div class="accordion">
            <div class="accordion__question">
                <p>Q: Is solo travel safe?</p>
 
            </div>
            <div class="accordion__answer">
                <p>A: Solo travel can be safe with proper planning and precautions. 
                Research your destination, stay aware of your surroundings, and trust your instincts. 
                Avoid risky areas and behaviors, and always prioritize your personal safety.</p>
            </div>
        </div>
 
        <div class="accordion">
            <div class="accordion__question">
                <p>Q: How do I meet other solo travelers while traveling alone?</p>
            </div>
 
            <div class="accordion__answer">
                <p>
                A: Meeting other solo travelers is easy! Stay in hostels, join group tours or activities,
                 attend local events, or use social networking apps specifically for travelers. 
                 Engaging with fellow travelers can lead to new friendships and memorable experiences.
                </p>
            </div>
        </div>
        <div class="accordion">
            <div class="accordion__question">
                <p>Q: What are some essential items to pack for solo travel?</p>
 
            </div>
            <div class="accordion__answer">
                <p>A: Essentials include travel documents (passport, ID, insurance), medication, 
                comfortable clothing, appropriate footwear, a first-aid kit, a portable charger, a travel adapter,
                and a small lock for securing your belongings.</p>
            </div>
        </div>
        <div class="accordion">
            <div class="accordion__question">
                <p>Q: How can I save money while traveling solo?</p>
 
            </div>
            <div class="accordion__answer">
                <p>A: Budget-friendly tips for solo travelers include staying in hostels or guesthouses,
                  cooking your own meals, using public transportation, booking flights and 
                  accommodations in advance, and taking advantage of free or discounted attractions and
                  activities.</p>
            </div>
        </div>
        <div class="accordion">
            <div class="accordion__question">
                <p>Q: What should I do in case of an emergency while traveling solo?</p>
 
            </div>
            <div class="accordion__answer">
                <p>A: In case of an emergency, remain calm and assess the situation. 
                Contact local emergency services if needed, notify your embassy or consulate,
                and reach out to trusted contacts for assistance. Carry a copy of important documents and 
                emergency contacts with you at all times.</p>
            </div>
        </div>
    </div>
<style>
  body {
	/* background-color: rgb(153, 218, 196); */
}

.layout {
	width: 600px;
	margin: auto;
}

.accordion {
	padding: 10px;
	margin-top: 10px;
	margin-bottom: 10px;
	background: #002E5A;
  color: white;
	border-radius: 10px;
}

.accordion__question p {
	margin: 5px;
	padding: 0;
	font-family: Verdana;
	font-size: 20px;
}

.accordion__answer p {
	margin: 5px;
	padding: 10px;
	font-size: large;
	font-family: Verdana, Geneva, Tahoma, sans-serif;
	color: white;
	background: #002E5A;
	border-radius: 10px;
}

.accordion:hover {
	cursor: pointer;
}

.accordion__answer {
	display: none;
}

.accordion.active .accordion__answer {
	display: block;
}
</style>

<script>
  let answers = document.querySelectorAll(".accordion");
answers.forEach((event) => {
	event.addEventListener("click", () => {
		if (event.classList.contains("active")) {
			event.classList.remove("active");
		} else {
			event.classList.add("active");
		}
	});
});
</script>
<?php
include('footer.php');
?>
     
    
</body>
</html>
