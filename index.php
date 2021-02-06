<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            DNA Hotel
       </title>
       <link rel="stylesheet" type="text/css" href="index.css">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <link rel="stylesheet" href="../lib/w3.css">

    </head>

    <body>
        <header>
            <div class="content">
                
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
                </div>
                
                </div>
                
              </div>
            </div>
            
        </header>
        <br><br>
        <img src="hotel.jpg" style="height: 500px; width: 100%;">
        <div class="box-wrapper"> 
            <div id="box1"> 
                <br><br>&nbsp;&nbsp;
                <h2 style="color:darkblue">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Popular Destinations
                </h2>
                <br>
                   <div class="row">
                    <div class="column">
                      <div class="card">
                        <img src="mumbai.jpg" height="400px" width="100%">
                        <br>
                        <hr>
                        <br>
                        <h3>&nbsp;Mumbai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="booking1.html" target="_blank" style="   background-color: goldenrod;
                            color: white;
                            padding: 10px 10px;
                            text-align: center;
                            text-decoration: none;
                            display: inline-block;">Book Now</a></h3>

                    </div>
                    </div>
                  
                    <div class="column">
                      <div class="card">
                        <img src="goa.jpg" height="400px" width="100%">
                        <br>
                        <hr>
                        <br>
                        <h3>&nbsp;Goa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <a href="booking1.html" target="_blank" style="   background-color: goldenrod;
                                color: white;
                                padding: 10px 10px;
                                text-align: center;
                                text-decoration: none;
                                display: inline-block;">Book Now</a></h3>
                      </div>
                    </div>
                    
                    <div class="column">
                      <div class="card">
                        <img src="jaipur.jpg" height="400px" width="100%">
                        <br>
                        <hr>
                        <br>
                        <h3>&nbsp;Jaipur&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;
                            <a href="booking1.html" target="_blank" style="   background-color: goldenrod;
                                color: white;
                                padding: 10px 10px;
                                text-align: center;
                                text-decoration: none;
                                display: inline-block;">Book Now</a></h3>
                      </div>
                    </div>

                    <div class="column">
                        <div class="card">
                          <img src="banglore.jpg" height="400px" width="100%">
                          <br>
                          <hr>
                          <br>
                          <h3>&nbsp;Bangalore&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="booking1.html" target="_blank" style="   background-color: goldenrod;
                            color: white;
                            padding: 10px 10px;
                            text-align: center;
                            text-decoration: none;
                            display: inline-block;">Book Now</a></h3>
                        </div>
                      </div>
                      </div>
                      <div id="box2"> 
                        <br>
                        <br><br>
            <h2 style="color:darkblue; text-align: left;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What Our Customer Says </h2>
            
            <br>
            <div class="row">
                <div class="row1">
            <div class="card">
                <p style="width: 500px;">
                    <div class="profimage">
                        <h5 style="text-align: left; font-size:xx-large; font-weight: 100; color: darkblue;">David Fahim</h5>
                    <img src="person1.jpg" height="100px" width="100px" style="float: right; border-radius: 50%; bottom: 2px;">
                </div>
                <br>
                <br>
                <br>
                    <p style="font-size:medium; font-weight: 100; color: darkblue; text-align: left; padding-left: 10%;">I enjoyed my stay at your hotel. The breakfast was excellent. 
                      I must comment on your director of rooms -Romana. I had a small problem and she handled it with grace, charm and professionalism.. 
                      She is a credit to your organization.excellent stay, except WIFI is a bit slow in our room, probably due to its position. Otherwise, a good hotel, with good position </p>
                </p>
                <br>
                
                <hr>
                <br>
                <span class="fa fa-star checked" style="font-size:24px;padding-left: 30%;"></span>
                                <span class="fa fa-star checked" style="font-size:24px;"></span>
                                <span class="fa fa-star checked" style="font-size:24px;"></span>
                                <span class="fa fa-star checked" style="font-size:24px;"></span>
                                <span class="fa fa-star checked" style="font-size:24px;"></span>
            </div>
        </div>
                   

                        <div class="row2">
                    <div class="card">
                        <p style="width: 500px;">
                            <div class="profimage">
                                <h5 style="text-align: left; font-size:xx-large; font-weight: 100; color: darkblue;">Tony Walker</h5>
                            <img src="person2.jpg" height="100px" width="100px" style="float: right; border-radius: 50%; bottom: 2px;">
                        </div>
                        <br>
                        <br>
                        <br>
                            <p style="font-size:medium; font-weight: 100; color: darkblue; text-align: left; padding-left: 10%;">The staff were very approachable and helpful. 
                              The breakfast was good. They arranged for a taxi to pick us up from the airport 
                              and then back again at the end of our stay. The suite was very good with comfortable furniture and the bed was comfortable too. 
                              We would definitely stay here again.
                                and engagging.<br><br><br></p>
                        </p>
                        <br>
                
                        <hr>
                        <br>
                        <span class="fa fa-star checked" style="font-size:24px;padding-left: 30%;"></span>
                                <span class="fa fa-star checked" style="font-size:24px;"></span>
                                <span class="fa fa-star checked" style="font-size:24px;"></span>
                                <span class="fa fa-star checked" style="font-size:24px;"></span>
                                <span class="fa fa-star checked" style="font-size:24px;"></span>
                            </div>
                            </div>

                            <div class="row2">
                              <div class="card">
                                  <p style="width: 500px;">
                                      <div class="profimage">
                                          <h5 style="text-align: left; font-size:xx-large; font-weight: 100; color: darkblue;">Richard Cohen</h5>
                                      <img src="person3.jpg" height="100px" width="100px" style="float: right; border-radius: 50%; bottom: 2px;">
                                  </div>
                                  <br>
                                  <br>
                                  <br>
                                      <p style="font-size:medium; font-weight: 100; color: darkblue; text-align: left; padding-left: 10%;">It was a good stay! The food was excellent
                                         and the staff superb! There was a staff member who was particularly helpful, accommodating 
                                        and shared his knowledge about Prague with us. Unfortunately I did not get his name but it 
                                        appeared he assisted the front desk and also carried our luggage to our room..<br><br><br></p>
                                  </p>
                                  <br>
                          
                                  <hr>
                                  <br>
                                  <span class="fa fa-star checked" style="font-size:24px;padding-left: 30%;"></span>
                                          <span class="fa fa-star checked" style="font-size:24px;"></span>
                                          <span class="fa fa-star checked" style="font-size:24px;"></span>
                                          <span class="fa fa-star checked" style="font-size:24px;"></span>
                                          <span class="fa fa-star checked" style="font-size:24px;"></span>
                                      </div>
                                      </div>


                                      <div class="row2">
                                        <div class="card">
                                            <p style="width: 500px;">
                                                <div class="profimage">
                                                    <h5 style="text-align: left; font-size:xx-large; font-weight: 100; color: darkblue;">Hans Mal</h5>
                                                <img src="person4.jpg" height="100px" width="100px" style="float: right; border-radius: 50%; bottom: 2px;">
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            
                                                <p style="font-size:medium; font-weight: 100; color: darkblue; text-align: left; padding-left: 10%;">The front desk staff all were professional and pleasant. 
                                                  Dining room for breakfast were nice and pleasant. The piano was nice but too loud. We do not know when will be 
                                                  our next visit to Prague but sure we shall return to this lovely place. Already recommended your hotel to a few of our friends.<br><br><br></p>
                                            </p>
                                            <br>
                                            <br>
                                            <hr>
                                            <br>
                                            <span class="fa fa-star checked" style="font-size:24px;padding-left: 30%;"></span>
                                                    <span class="fa fa-star checked" style="font-size:24px;"></span>
                                                    <span class="fa fa-star checked" style="font-size:24px;"></span>
                                                    <span class="fa fa-star checked" style="font-size:24px;"></span>
                                                    <span class="fa fa-star checked" style="font-size:24px;"></span>
                                                </div>
                                                </div>
                                                </div>
<br>
<br>
<br>
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
                                                                                          <img src="hotel1.jpg" height="120px" width="120px">
                                                                                          <img src="hotel2.jpg" height="120px" width="120px">
                                                                                          <img src="hotel3.jpg" height="120px" width="120px"><br>
                                                                                          <img src="hotel4.jpg" height="120px" width="120px">
                                                                                          <img src="hotel5.jpg" height="120px" width="120px">
                                                                                          <img src="hotel6.jpg" height="120px" width="120px">
                                                                                          </p>
                                                                                     
                                                                                          </div>
                                                                                          </div>
                                      
                                                                  </div>                   
                                                      
                                                    </div>
                                              </div> 
                            </div> 
                      </div>
                      </div>
                      
        </body>
        </html>
        