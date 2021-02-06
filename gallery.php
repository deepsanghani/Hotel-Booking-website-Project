<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Gallery DNA Hotel
       </title>
       <link rel="stylesheet" type="text/css" href="gallery.css">
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
        <img src="gallery.jpg" style="height: 500px; width: 100%;">
        <br><br><br><br>
        <div class="firstpara">
        <p><h2 style="font-size: 50px;">Welcome to DNA Hotel Gallery<br></h2></p>
        <img src="hotelimages1.jpg" style="height: 400px; width: 31%;padding-left: 1%;">
        <img src="hotelimages2.jpg" style="height: 400px; width: 31%;padding-left: 1%;">
        <img src="hotelimages3.jpg" style="height: 400px; width: 31%;padding-left: 1%;"><br>
        <img src="hotelimages4.jpg" style="height: 400px; width: 31%;padding-left: 1%;padding-top: 1%;">
        <img src="hotelimages5.jpg" style="height: 400px; width: 31%;padding-left: 1%;">
        <img src="hotelimages6.jpg" style="height: 400px; width: 31%;padding-left: 1%;"><br>
        <img src="hotelimages7.jpg" style="height: 400px; width: 31%;padding-left: 1%;padding-top: 1%;">
        <img src="hotelimages8.jpg" style="height: 400px; width: 31%;padding-left: 1%;">
        <img src="hotelimages9.jpg" style="height: 400px; width: 31%;padding-left: 1%;"><br>
        <img src="hotelimages10.jpg" style="height: 400px; width: 31%;padding-left: 1%;padding-top: 1%;">
        <img src="hotelimages11.jpg" style="height: 400px; width: 31%;padding-left: 1%;">
        <img src="hotelimages12.jpg" style="height: 400px; width: 31%;padding-left: 1%;"><br>
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
                                                      <img src="hotel1.jpg" height="120px" width="120px" style="padding-left: 1%;">  
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