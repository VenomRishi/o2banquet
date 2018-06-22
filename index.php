<?php
include  'dbconnect.php';
include 'controller.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>O2 BANQUET</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- boostratp cdn -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- fontawesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- custome CSS -->
  <link rel="stylesheet" href="custom.css">
  <!-- font montesserat -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  
</head>
<body class="bkgrnd">
<div class="container-fluid"> 
 <div class="row">
 	<div class="col-sm-12 col-md-12 ">
 	<!--------------------------------------------------------- navigation bar start ---------------------------------------------->	
		<nav class="navbar navbar-fixed-top">
		  <div class="container">
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>                        
		      </button>
		      <a class="navbar-brand" href="#"><img class="mainlogo" src="images/logo.png"></a>
		    </div>
		    <div>
		      <div class="collapse navbar-collapse" id="myNavbar">
		        <ul class="nav navbar-nav navbar-right">
		          <li><a href="#home"><i class="fa fa-home"></i></a></li>
		          <li><a href="#packages">Packages</a></li>
		          <li><a href="#services">Services</a></li>
		          <li><a href="#contact-us">Contact Us</a></li>
		          <li><a href="#gallary">Gallary</a></li>
		          <li><a href=""><i class="fa fa-phone"> 02227844411</i></a></li>
		        </ul>
		      </div>
		    </div>
		  </div>
		</nav>    
	<!-- navigation bar End -->	
<div id="home" class="container-fluid">
<hr>
<div class="row">
     <div class="col-sm-4 col-md-4 col-md-offset-4 col-sm-offset-4">
        <center> <img class="" src="images/banner-logo1.png" style="height: auto;width: 100%;"></center>
              
      </div>
</div>
<hr class="hrstyle">
    <div class="row slider">
      <div class="col-sm-8 col-md-8">
         <!---------------------------------------------- Carousel start -------------------------------------------------->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>  
                
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <?php
                  while ($row = mysqli_fetch_array($result1)) {
                  echo '<div class="item active">';
                  echo '<img src="images/' . $row['path'] . '" style="width:100%;" >';
                  echo '</div>';
                  }?>
                  <?php
                  while ($row = mysqli_fetch_array($result2)) {
                      echo "<div class='item'>";
                      echo "<img src='images/" . $row['path'] . "' style='width:100%;' >";
                      echo "</div>";
                  }
                  ?>
                  <?php
                  while ($row = mysqli_fetch_array($result3)) {
                      echo "<div class='item'>";
                      echo "<img src='images/" . $row['path'] . "' style='width:100%;'>";
                      echo "</div>";
                  }
                  ?>
                  <?php
                  while ($row = mysqli_fetch_array($result4)) {
                      echo "<div class='item'>";
                      echo "<img src='images/" . $row['path'] . "' style='width:100%;'>";
                      echo "</div>";
                  }
                  ?>
                  <?php
                  while ($row = mysqli_fetch_array($result5)) {
                      echo "<div class='item'>";
                      echo "<img src='images/" . $row['path'] . "' style='width:100%;'>";
                      echo "</div>";
                  }
                  ?>
              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <!-- Carousel End -->
      </div>
     
    </div>
    <div class="col-sm-4 col-md-4 mainbox">
         <!---------------------------------------------- availability start -------------------------------------------------->
                
                  <div class="panel panel-default availability">
                      <div class="panel-heading"><h4>CHECK AVAILABILITY</h4></div>
                      <div class="panel-body">
                          <form action="" method="post">
                        <h5>Select Date :</h5><input type="date"  name="date" class="availtxt"><br>
                        <br>
                        <!--<h5>Time Period :</h5>
                        <center>FROM :<select class="form-control availtxt2" id="From" name ="timefrom" placeholder="FROM">
                                <option value="09:00:00">9am</option>
                                <option value="10:00:00">10am</option>
                                <option value="11:00:00">11am</option>
                                <option value="12:00:00">12pm</option>
                                <option value="13:00:00">1pm</option>
                                <option value="14:00:00">2pm</option>
                                <option value="15:00:00">3pm</option>
                                <option value="16:00:00">4pm</option>
                                <option value="17:00:00">5pm</option>
                                <option value="18:00:00">6pm</option>
                                <option value="19:00:00">7pm</option>
                                <option value="20:00:00">8pm</option>
                                <option value="21:00:00">9pm</option>
                                <option value="22:00:00">10pm</option>
                                <option value="23:00:00">11pm</option>
                                <option value="24:00:00">12pm</option>
                          </select>
                         TO:  <select class="form-control availtxt2" id="To" name="timeto" placeholder="TO">
                                <option value="09:00:00">9am</option>
                                <option value="10:00:00">10am</option>
                                <option value="11:00:00">11am</option>
                                <option value="12:00:00">12pm</option>
                                <option value="13:00:00">1pm</option>
                                <option value="14:00:00">2pm</option>
                                <option value="15:00:00">3pm</option>
                                <option value="16:00:00">4pm</option>
                                <option value="17:00:00">5pm</option>
                                <option value="18:00:00">6pm</option>
                                <option value="19:00:00">7pm</option>
                                <option value="20:00:00">8pm</option>
                                <option value="21:00:00">9pm</option>
                                <option value="22:00:00">10pm</option>
                                <option value="23:00:00">11pm</option>
                                <option value="24:00:00">12pm</option>
                          </select></center>-->
                          <br>
                          <button class="chkbtn" name="chkbtn">CHECK</button>
                          </form>
                          <?php
                          if(isset($_POST['chkbtn'])){
                              $date=$_POST['date'];
                              //$timefrom=$_POST['timefrom'];
                              //$timeto=$_POST['timeto'];
                              $chkresult=mysqli_query($db,"SELECT * FROM tblavailability WHERE date='$date'");
                              $row=mysqli_fetch_array($chkresult);
                              $dbdate=$row['date'];
                              $dbtimefrom=$row['timefrom'];
                              $dbtimeto=$row['timeto'];
                              if($date==$dbdate)
                              {

                                  echo "On this date from ".$dbtimefrom." to ".$dbtimeto." slot is booked<br>";
                                  echo "If you want to book after that slot on same day: ";
                                  echo "<button name='clickbtn'>Click on</button>";
                              }
                              else
                              {
                                  echo "There's no booking what so ever<br>";
                                  echo "For booking: <button name='clickbtn2'>Click</button>";
                              }
                          }
                          ?>
                      </div>
                    </div>

                        </div>
</div>

    <hr class="hrstyle">
<div class="row tagline">
  <div class="col-md-12 col-sm-12">
    <center><p>We are providing a well furnished and modern designed banquet hall that is designed precisely and is good enough for all functions & events !</p></center>
    <hr class="hrstyle">
  </div>
</div>
</div>


  <!---------------------------------------------- packages start -------------------------------------------------->
<div id="packages" class=" container-fluid">
 <div class="row">
   <div class="col-md-4 col-sm-5">
      <center><h3>PACKAGES<br><small>In Your Budget !</small></h3>
  <button type="button" class="pbtn" data-toggle="collapse" data-target="#p1">pack 1</button> 
  <div id="p1" class="collapse">
    <?php while($row = mysqli_fetch_array($packageresult1)){
              echo "packageName: ".$row['packagename'];
              echo " packageDescription: ".$row['packagedesc'];
              echo " packageCost: Rs.".$row['cost'];
          } ?>
  </div>
  <br><br>

  <button type="button" class="pbtn" data-toggle="collapse" data-target="#p2">pack 2</button> 
  <div id="p2" class="collapse">
                <?php while($row = mysqli_fetch_array($packageresult2)){
                echo "packageName: ".$row['packagename'];
                echo " packageDescription: ".$row['packagedesc'];
                echo " packageCost: Rs.".$row['cost'];
            } ?>
  </div>
  <br><br>
  <button type="button" class="pbtn" data-toggle="collapse" data-target="#p3">pack 3</button> 
  <div id="p3" class="collapse">
              <?php while($row = mysqli_fetch_array($packageresult3)){
              echo "packageName: ".$row['packagename'];
              echo " packageDescription: ".$row['packagedesc'];
              echo " packageCost: Rs.".$row['cost'];
          } ?>
  </div>
  <br><br> </center> 
   </div>
   <div class="col-md-8 col-sm-7">
     
   </div>
 </div>
</div>


  <!---------------------------------------------- services start -------------------------------------------------->
<div id="services" class=" container-fluid">
  <h2><center>SERVICES</center><small>small things matters !</small></h2><hr class="hrstyle">
  <div class="row">
    <div class="col-sm-3 col-md-3"><i class="fa fa-wifi"></i><br>WiFi</div>
    <div class="col-sm-3 col-md-3"><i class="fa fa-car"></i><br>Parking</div>
    <div class="col-sm-3 col-md-3"><i class="fa fa-snowflake-o"></i><br>AC</div>
    <div class="col-sm-3 col-md-3"><i class="fa fa-glass"></i><br>Hygiene</div>
  </div>
</div>


  <!---------------------------------------------- contact-us start -------------------------------------------------->
<div id="contact-us" class=" container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <section id="contact" style="">
            <div class="container">
                <div class="row">
                    <div class="about_our_company">
                        <h1>CONTACT US</h1>
                        <hr class="hrstyle">
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form name="sentMessage" id="contactForm" novalidate="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group"><input type="text" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
                                    </div>
                                    <div class="form-group"><input type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                                    </div>
                                    <div class="form-group"><input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                    </div>
                                     <div class="form-group"><textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                    </div>
                                </div>
                              
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl get">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
          </div>
        </div>

</div>
<hr>
<div class="row address">
          <div class="col-sm-6 col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235.6602704336456!2d73.00623013165463!3d19.082883605741166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c13428f153c3%3A0xcedc32f30e4d80ed!2sSatra+Plaza!5e0!3m2!1sen!2sin!4v1529499973659" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

          </div>
          <div class="col-sm-6 col-md-6 ">
                        <p><br><br>
                            <strong><i class="fa fa-map-marker"></i> Address</strong><br>
                            Satra Plaza, Palm Beach Rd, Phase 2, <br>Sector 19D, Vashi, Navi Mumbai, <br>Maharashtra 400703
                        </p><br>
                        <p><strong><i class="fa fa-phone"></i> Phone Number</strong><br>
                            02227844411 / 09820054280 / 7972297443</p>
                        <p><br>
                            <strong><i class="fa fa-envelope"></i>  Email Address</strong><br>
                            prernajhawar123@gmail.com</p>
                        <p></p>
                    </div>
        </div>
<hr>
  <!---------------------------------------------- gallary start -------------------------------------------------->
<div id="gallary" class=" container-fluid">
    <center><h2>Gallary</h2></center>

      <div class="container">
          <div class="col-xs-6 col-sm-3">
              <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                  <?php
                    while ($row = mysqli_fetch_array($gallaryresult1)){
                        echo "<div id='img_div'>";
                        echo "<img src='images/gimg/" . $row['imgpath'] . "'  style='width:100%;'>";
                        echo "</div>";
                    }
                    ?>
              </a>
          </div>
          <div class="col-xs-6 col-sm-3">
              <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                  <?php
                    while ($row = mysqli_fetch_array($gallaryresult2)){
                        echo "<div id='img_div'>";
                        echo "<img src='images/gimg/" . $row['imgpath'] . "'  style='width:100%;'>";
                        echo "</div>";
                    }
                    ?>
              </a>
          </div>
          <div class="col-xs-6 col-sm-3">
              <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                  <?php
                    while ($row = mysqli_fetch_array($gallaryresult3)){
                        echo "<div id='img_div'>";
                        echo "<img src='images/gimg/" . $row['imgpath'] . "'  style='width:100%;'>";
                        echo "</div>";
                    }
                    ?>
              </a>
          </div>
          <div class="col-xs-6 col-sm-3">
              <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                  <?php
                    while ($row = mysqli_fetch_array($gallaryresult4)){
                        echo "<div id='img_div'>";
                        echo "<img src='images/gimg/" . $row['imgpath'] . "'  style='width:100%;'>";
                        echo "</div>";
                    }
                    ?>
              </a>
          </div>
          <div class="col-xs-6 col-sm-3">
              <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                  <?php
                    while ($row = mysqli_fetch_array($gallaryresult5)){
                        echo "<div id='img_div'>";
                        echo "<img src='images/gimg/" . $row['imgpath'] . "'  style='width:100%;'>";
                        echo "</div>";
                    }
                    ?>
              </a>
          </div>
          <div class="col-xs-6 col-sm-3">
              <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                  <?php
                    while ($row = mysqli_fetch_array($gallaryresult6)){
                        echo "<div id='img_div'>";
                        echo "<img src='images/gimg/" . $row['imgpath'] . "'  style='width:100%;'>";
                        echo "</div>";
                    }
                    ?>
              </a>
          </div>
          <div class="col-xs-6 col-sm-3">
              <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                  <?php
                    while ($row = mysqli_fetch_array($gallaryresult7)){
                        echo "<div id='img_div'>";
                        echo "<img src='images/gimg/" . $row['imgpath'] . "'  style='width:100%;'>";
                        echo "</div>";
                    }
                    ?>
              </a>
          </div>
          <div class="col-xs-6 col-sm-3">
              <a href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox"> 
                  <?php
                    while ($row = mysqli_fetch_array($gallaryresult8)){
                        echo "<div id='img_div'>";
                        echo "<img src='images/gimg/" . $row['imgpath'] . "'  style='width:100%;'>";
                        echo "</div>";
                    }
                    ?>
              </a>
          </div>
      </div>

      <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog">
              <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
              <div class="modal-content">
                  <div class="modal-body">
                      <img src="" alt="" />
                  </div>
              </div>
          </div>
      </div>




</div>
<!------------------------------------------------ footer Start  -------------------------------------------------->
<div id="social" class=" container-fluid">
 <div class="col-md-12">
  <!-- footer social icons -->
                    <center><br><br><ul class="social-network social-circle">
                        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <hr>
                    </ul>      </center> 
        </div>
  <center><p>O2 Banquete © 2018. All Rights Reserved.</p></center>
</div>
<!-- footer End -->
 	</div>
 </div>
</div>


<!-- image gallary modal script -->
<script type="text/javascript">$(document).ready(function() {
    var $lightbox = $('#lightbox');
    
    $('[data-target="#lightbox"]').on('click', function(event) {
        var $img = $(this).find('img'), 
            src = $img.attr('src'),
            alt = $img.attr('alt'),
            css = {
                'maxWidth': $(window).width() - 100,
                'maxHeight': $(window).height() - 100
            };
    
        $lightbox.find('.close').addClass('hidden');
        $lightbox.find('img').attr('src', src);
        $lightbox.find('img').attr('alt', alt);
        $lightbox.find('img').css(css);
    });
    
    $lightbox.on('shown.bs.modal', function (e) {
        var $img = $lightbox.find('img');
            
        $lightbox.find('.modal-dialog').css({'width': $img.width()});
        $lightbox.find('.close').removeClass('hidden');
    });
});</script>
<!-- scrollspy smooth scrolling script -->
<script>
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});
</script>

</body>
</html>
