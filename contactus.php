<?php session_start(); ?>
<?php include('insert.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Contact Us-DNA Hotel
       </title>
       <link rel="stylesheet" type="text/css" href="contactus1.css">
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
        <div class="box-wrapper"> 
            <div id="box1"> 
                <div class="row">
                 <div class="row1">
                   <div class="card1">
                     <p>
                         <img src="hotelimages1.jpg" height="200px" width="400px">
                         <img src="hotelimages2.jpg" height="200px" width="400px"><br>
                         <img src="hotelimages3.jpg" height="200px" width="400px">
                         <img src="hotelimages4.jpg" height="200px" width="400px"><br>
                     </p>
                               
 
                   </div>
                 </div>
                <div class="row2">
                     
                         <div class="card2">
                             <p style="font-size: xx-large; color: whitesmoke; text-align: center; padding-top: 22%; padding-bottom: 13.7%;">Book Your Hotel Now<br>For Any Queries<br>Contact Here
                             <br><br></p>
                             </div>
                                 </div>        
                 
                 
               </div>
         </div> 
        <div id="box2"> 
            <div class="row">
                <div class="row3">
                  <div class="card3">
                    <h3 style="color: darkblue; font-size: xx-large;">Contact With Us</h3>
                    <div>
                    <form name="frmContact" method="POST"  onsubmit="return validateContactForm()">
                        <span id="userName-info" class="info"></span>
                        <label for="name"></label>
                        <input type="text" id="name" name="name" placeholder="Name *">

                          <span id="email-info" class="info"></span>
                          <label for="email"></label>
                          <input type="text" id="email" name="email" placeholder="Email *">

                          <span id="subject-info" class="info"></span>
                        <label for="subject"></label>
                          <input type="text" id="subject" name="subject" placeholder="Subject *">

                          <span id="phoneno-info" class="info"></span>
                          <label for="phoneno"></label>
                          <input type="text" id="phoneno" name="phoneno" placeholder="Phone *">
                          </select>

                          <span id="message-info" class="info"></span>
                            <label for="message"></label>
                            <input type="textarea" id="message" name="message" placeholder="Messgae *" style="height:200px"></textarea>
                          
                            <input type="submit" name="send" class="btn-submit"
                    value="Send" />

                
                        </form>
                              

                  </div>
                </div>
                </div>
              
                <div class="row4">
                    <div class="card4">
                            <h3 style="color: darkblue; font-size: xx-large;">Information</h3>
                                <p style="border: 1px solid #ccc; padding: 12px 20px; width: 100%; height: 35%; margin: 8px 5px; border-radius: 4px; 
                                font-size: large; color: darkblue;"><i class="fa fa-map-marker" 
                                    style="font-size: xx-large;"></i> &emsp;&emsp;Near to Marine Lines, <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    Mumbai, Maharashtra, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;India</p></p>
                                    <br>
                                    <br>
                 
                                    <p style="border: 1px solid #ccc; padding: 12px 20px; width: 100%; height: 35%; margin: 8px 5px; border-radius: 4px; 
                                    font-size: large; color: darkblue;"><i class="fa fa-envelope" 
                                        style="font-size: xx-large;"></i> &emsp;&emsp;DNAhotels@gmail.com</p>
                                        <br>

                                        <p style="border: 1px solid #ccc; padding: 12px 20px; width: 100%; height: 35%; margin: 8px 5px; border-radius: 4px; 
                                        font-size: large; color: darkblue;"><i class="fa fa-phone" 
                                            style="font-size: xx-large;"></i> &emsp;&emsp;022  1111 3333</p>
                                            <br>
                                
                            </div>
                                </div> 
            
        </div> 
        </div>
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
                            
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#name").val();
            var userEmail = $("#email").val();
            var subject = $("#subject").val();
            var phoneno = $("#phoneno").val();
            var message = $("#message").val()
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#name").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#email-info").html("Required.");
                $("#email").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#email-info").html("Invalid Email Address.");
                $("#email").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (phoneno == "") {
                $("#phoneno-info").html("Required.");
                $("#phoneno").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!phoneno.match(/^\d{10}$/)) {
                $("#phoneno-info").html("Invalid Mobile Number.");
                $("#phoneno").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (message == "") {
                $("#message-info").html("Required.");
                $("#message").css('border', '#e66262 1px solid');
                valid = false;
            }
            
            return valid;
        }
</script>
                            </body>
                            </html>
