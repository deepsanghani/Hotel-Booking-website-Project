<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            About DNA Hotel
       </title>
       <link rel="stylesheet" type="text/css" href="aboutus1.css">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="../lib/w3.css">

    </head>

    <body>
        <header>
            <div class="main" >
              <div class="container">
                <div class="toppane">
                
    
                <div class="logo">
                    <img src="logo.jpg">&nbsp; &nbsp; <b style="font-size: 50px; color: crimson;">DNA Hotel</b>
                </div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutus.php">About us</a></li>
                    <li><a href="rooms.php">Rooms</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                    
                
             <div class="fa">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.instagram.com/dna_hotels/" class="fa fa-instagram"></a>
                    <a href="https://www.facebook.com/dnahotels" class="fa fa-facebook"></a>
<?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
{
?>
      <li><a href="logout.php" style="border-radius: 25px; padding: 5px 20px;">Logout</a></li>
<?php }else{ ?>
    <li><a href="login.php" style="border-radius: 25px; padding: 5px 20px;">Login</a></li>
    <li><a href="register.php" style="border-radius: 25px; padding: 5px 20px;">Register</a></li>
<?php } ?>
                    
                </ul>
                </div>
                
                </div>
                
              </div>
            </div>
            
        </header>
        <br><br>
        <img src="about1.jpg" style="height: 500px; width: 100%;">
        <br><br><br><br>
        <div class="firstpara">
        <p><h2 style="font-size: 50px;">Welcome to DNA Hotel</h2>
        <p style="font-size: 20px;">A passion for making moments</p>
        <br><br>DNA hotels is a modern, upscale hotels that is passionate about ‘making moments’, recognising that small gestures make a 
        big difference to our guests, our owners and our people. We do ordinary things in an
         extraordinary way – a philosophy that has defined our brand’s success from the very start.</p>
         <br>
         <p>A global firm with Swiss roots and a restaurant and hotel heritage that dates back to the 1940s, our approach to service 
             has remained consistent; warm, intuitive, personal and uniquely ‘Mövenpick’. We also embrace innovation to meet ever-changing
              guest needs and continue to celebrate our rich culinary legacy, setting trends but never compromising on quality and authenticity. 
              An international company with a growing footprint, we take a sustainable and responsible approach, 
             caring for local communities and protecting the environment in the destinations where we operate.<br><br><br></p>
        <img src="facts.jpg"/>&nbsp;&nbsp;&nbsp;Regardless of the reason for your visit in Goa, Mumbai, Jaipur, Banglore , &nbsp;&nbsp;&nbsp;Main Hotel and Suites caters 
            to your preferred lifestyle – lifestyle that &nbsp;&nbsp;&nbsp;demands high-tech in hotel accommodations, or lifestyle that seeks &nbsp;&nbsp;&nbsp;simplicity. 
            To our business or leisure guests, hotel rooms and suites are &nbsp;&nbsp;&nbsp;furnished in stylish manners and fitted with telephone, 
            air-conditioning &nbsp;&nbsp;&nbsp;and modern amenities including complimentary WiFi and flat screen &nbsp;&nbsp;&nbsp;television with cable.  Some hotel rooms and suites may also have honesty 
            &nbsp;&nbsp;&nbsp;bars for guest convenience. Main Hotel and Suites provides luxury &nbsp;&nbsp;&nbsp;amenities with
            above-average Guest services attended to by 24-hour &nbsp;&nbsp;&nbsp;hotel staff.</p>
        <br>
        <p>&nbsp;&nbsp;&nbsp;Our mission as a company is to provide peace of mind, consistency and &nbsp;&nbsp;&nbsp;build loyalty based on our value of our relationships with the guests. 
            We &nbsp;&nbsp;&nbsp;strive to be unique and the place you would want to go back to on your &nbsp;&nbsp;&nbsp;next visit to Cebu.  Our vision is to stay ahead with the competition 
            by &nbsp;&nbsp;&nbsp;evolving to and meeting the changing preference of our guests through &nbsp;&nbsp;&nbsp;continued innovation. With this in mind, 
            we constantly gather and &nbsp;&nbsp;&nbsp;appreciate guest and employee feedback and test new concepts and &nbsp;&nbsp;&nbsp;ideas.<br><br><br><br></p>

        <div style="float: right;"><IMG SRC="ourstory.jpg"></div> <p>A key element to our success is our effort to engage our staff in &nbsp;&nbsp;&nbsp; becoming
            a real team member with the same goals. We also value and mold them to be vibrant, welcoming, passionate and respectful of hotel guests. Inspired service 
            is what we expect and hope for from our staff.&nbsp;&nbsp;&nbsp;  They are prepared to know our guests and their preference that allows them, the staff,
             to create a personalized service that can bring the hotel closer to the mission of building guest loyalty.<br><br></p>
             <p>Main Hotel and Suites is located in a prime location at J. Panis Street, Old Banilad Road, Cebu City. You will never go wrong if convenience is a &nbsp;factor 
             since the hotel is within walking distance to fast foods or fine dining including Ginza Japanese Restaurant. The hotel is also just minutes away from the 
             exciting Ayala Land IT Park, and from the shopping, theatres and restaurants of Ayala and SM Mall. For hotel guest convenience, Main Hotel and Suites also 
             have on-site dining facility, Caffe Alba, that is also open to the general public.
              An intimate gift shop, Looking Around Shop, is also found on-site at the hotel lobby for novelty or miscellaneous items.</p>
        </div>
    </div>

        <br>
<br>
<br>
<div class="box-wrapper">
                                                <div id="box3"> 
            
                                                  <div class="row">
                                                      <div class="row5">
                                                  <div class="card5">
                                                      <p style="width: 500px;">
                                                          <div class="profimage">
                                                              <img src="logo.jpg" height="50px" width="50px" style="float: left; border-radius: 50%; bottom: 2px;">
                                                              <h5 style="text-align: left; font-size:x-large; font-weight: 100; color: white;">&emsp;<b>DNA hotels</b>
                                                              
                                                      </div>
                                                      <br>
                                                      <br>
                                                          <p style="font-size:medium; font-weight: 100; color:white; text-align: left;line-height: 1.6;">DNA Hotels one of good hotels<br> in india and 
                                                          we have branch<br> in Mumbai, Goa, Jaipur, <br>Bangalore.</p>
                                                      </p>
                                                      <br>
                                                         &nbsp;&nbsp;
                                                          <a href="https://www.facebook.com/dnahotels" class="fa fa-facebook"></a>&nbsp;&nbsp;
                                                          <a href="https://www.instagram.com/dna_hotels/" class="fa fa-instagram"></a>
                                                  </div>
                                              </div>
                                                         
                                      
                                                              <div class="row6">
                                                          <div class="card6">
                                                              <p style="width: 500px;">
                                                                  <h5 style="text-align: left; font-size:x-large; font-weight: 100; color: white;">&emsp;<b>Featured Links</b><br><br>
                                                                      <p style="font-size:medium; font-weight: 100; color:white; text-align: left;line-height: 1.6;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="arrow right">
                                                                      </i>&emsp;<a href="index.php" style="font-size:medium; font-weight: 100; color:white; text-align: left;line-height: 1.6;
                                                                      text-decoration: none;">Home</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                      <i class="arrow right"></i>&emsp;<a href="aboutus.php" style="font-size:medium; font-weight: 100; color:white; text-align: left;line-height: 1.6;
                                                                      text-decoration: none;">About Us</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                      <i class="arrow right"></i>&emsp;<a href="rooms.php" style="font-size:medium; font-weight: 100; color:white; text-align: left;line-height: 1.6;
                                                                      text-decoration: none;">Rooms</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                      <i class="arrow right"></i>&emsp;<a href="gallery.php" style="font-size:medium; font-weight: 100; color:white; text-align: left;line-height: 1.6;
                                                                      text-decoration: none;">Gallery</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                      <i class="arrow right"></i>&emsp;<a href="contactus.php" style="font-size:medium; font-weight: 100; color:white; text-align: left;line-height: 1.6;
                                                                      text-decoration: none;">Contact Us</a><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                      
                                                                  </p>
                                                             
                                                                  </div>
                                                                  </div>
                                                                   
                                      
                                                                              <div class="row8">
                                                                                  <div class="card8">
                                                                                      <p style="width: 500px; color: white;" >
                                                                                          <h5 style="text-align: left; font-size:x-large; font-weight: 100; color: white;">&emsp;<b>Flickr Photos</b></h5>
                                                                                          <br>
                                                                                          <br>
                                                                                          <img src="hotel1.jpg" height="120px" width="120px" style="padding-left: 1%;">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                          <img src="hotel2.jpg" height="120px" width="120px" style="padding-left: 1%;">
                                                                                          <img src="hotel3.jpg" height="120px" width="120px" style="padding-left: 1%;"><br>
                                                                                          <img src="hotel4.jpg" height="120px" width="120px" style="padding-left: 1%; padding-top: 1%;">
                                                                                          <img src="hotel5.jpg" height="120px" width="120px" style="padding-left: 1%;padding-top: 1%;">
                                                                                          <img src="hotel6.jpg" height="120px" width="120px" style="padding-left: 1%; padding-top: 1%;">
                                                                                          </p>
                                                                                     </div>
                                                                                          </div>
                                                                                          </div>
                                      
                                                                  </div>         
                                                                  </div>
                                                                  </body>
                                                                  </html>