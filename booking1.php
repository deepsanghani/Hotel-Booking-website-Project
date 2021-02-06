<?php session_start(); ?>

<?php include('inserttobooking.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Hotel Booking
       </title>
       <link rel="stylesheet" type="text/css" href="booking1.css">
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
        <div class="box-wrapper"> 
          <div id="box2"> 
            <div class="row">
                <div class="row3">
                  <div class="card3">
                    <h3 style="color: darkblue; font-size: xx-large;">Rooms Booking<br></h3>
                    <p><u>Step 1:</u> Please fill all the information given below.<br><br>
                       <u>Step 2:</u> Press book button for confirm your booking after<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;that your booking is done payment is pending.<br><br>
                       <u>Step 3:</u> (i) If you want to pay online then press pay online<br>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(ii) If you don't want to pay online you can pay <br>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;through PAYTM ,Google Pay, UPI, Amazon Pay <br>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or You can pay at hotel also.</p>
                    <div>
                        <form name="frmContact" method="POST"  enctype="multipart/form-data" onsubmit="return validateContactForm()">
                        <span id="userName-info" class="info"></span>
                        <br><label for="name"></label>
                          <input type="text" id="name" name="name" placeholder="Name *">
                      
                          <label for="email"></label>
                          <input type="text" id="email" name="email" placeholder="Email *">

                          <label for="mobileno"></label>
                          <input type="text" id="mobileno" name="mobileno" placeholder="Mobile Number*">

                          <select id="location" name="location" style="width: 40%;">
                            <option value="">Select your Location</option>
                            <option value="mumbai">Mumbai</option>
                            <option value="goa">Goa</option>
                            <option value="rajasthan">Rajasthan</option>
                            <option value="bangalore">Bangalore</option>
                        </select>
                          
                          
                            <label for="address"></label>
                            <input type="textarea" id="address" name="address" placeholder="Write Your Address *" style="height:200px"></textarea>
                            <p>
                            <select id="roomtype" name="roomtype"style="width: 40%;">
                              <option value="" >Select your Room type</option>
                              <option value="LuxuryRooms">Luxury Rooms</option>
                              <option value="LuxuryGrandeRoomSeaView">Luxury Grande Room Sea View</option>
                              <option value="ExecutiveBedroomCityView">Executive Bedroom City View</option>
                              <option value="StandardBedroomCityView">Standard Bedroom City View</option>
                          </select>
                          &emsp;<label for="quantity">Number of People&nbsp;</label>
                            <input type="number" id="numberofpeople" name="numberofpeople" min="1" max="20" style="padding: 4px 4px 4px 4px;"><br>
                          

                          <br>
                          Upload PDF file of Your ID-proof:&nbsp;&nbsp;&nbsp;
                          <input type="file" name="pdf_file" id="pdf_file" accept="application/pdf" />
          
                          
                         <br><br>
                         <button input type="submit" name="send" style="width: 20%;
                background-color: darkblue;
                color: white;
                padding: 14px 20px;
                margin: 4px 4px;
                border: 3px solid darkblue;
                border-radius: 4px;
                cursor: pointer;">Book</button>
                <a href="https://pmny.in/5I3lewNgEAvf" class="btn btn-primary" style="width: 20%;
                background-color: darkblue;
                color: white;
                padding: 14px 20px;
                margin: 4px 4px;
                border: 3px solid darkblue;
                border-radius: 4px;
                cursor: pointer;
                text-decoration: none;">Pay Online</a>
                                       
<script>
function myFunction() {
  if (confirm('Do you want to pay online?\n  If you want to pay online press OK. \n  If you want to book but do not want to pay online press cancel')) {
  // Save it!
  alert("Your room is booked and payment is remaining.");
} else {
  // Do nothing!
  window.alert("Your room is booked and payment is remaining. You can pay your bill at hotel or with Paytm, Google Pay, UPI, Amazon Pay");
}
}
</script>
                        
                              

                  </div>
                </div>
                </div>
                
                <div class="row2">
                     
                  <div class="card2">
                      <p style="font-size: xx-large; color: whitesmoke; text-align: center; padding-top: 22%; padding-bottom: 13.7%;">
                        If you want to book your room then you can pay by Google Pay / Amazon Pay / UPI / Paytm to 123456789 or you can pay at hotel reception.<br>
                        <a href="https://paytm.com/"><img src="https://img.icons8.com/color/96/000000/paytm.png"/></a>&emsp;
                        <a href="https://pay.google.com/"><img src="googlepay.png" style="height: 100px; width: 100px;"/></a>&emsp;
                        <a href="https://www.bhimupi.org.in/"><img src="upi.png" style="height: 100px; width: 100px;"/></a>&emsp;
                        <a href="https://www.amazon.in/gp/sva/dashboard"><img src="amazonpay.jpg" style="height: 100px; width: 100px;"/></a>&emsp;
                      <br><br></p>
                      
                      </div>
                          </div>        
          
                </div>
            </div>
          </div>
</div>
</form></div>
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
            var mobileno = $("#mobileno").val();
            var location = $("#location").val();
            var numberofpeople = $("#numberofpeople").val();
            var address = $("#address").val();
            var roomtype = $("#roomtype").val();
            if (userName == "") {
                $("#userName-info").html("All Field are required in proper format.");
                $("#name").css('border', '#e66262 2px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#email").css('border', '#e66262 2px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#email").css('border', '#e66262 2px solid');
                valid = false;
            }

            if (mobileno == "") {
                $("#mobileno").css('border', '#e66262 2px solid');
                valid = false;
            }
            if (!mobileno.match(/^\d{10}$/)) {
                $("#mobileno").css('border', '#e66262 2px solid');
                valid = false;
            }
            if (location == "") {
                $("#location").css('border', '#e66262 2px solid');
                valid = false;
            }
            if (address == "") {
                $("#address").css('border', '#e66262 2px solid');
                valid = false;
            }
            if (roomtype == "") {
                $("#roomtype").css('border', '#e66262 2px solid');
                valid = false;
            }
            if (numberofpeople == 0) {
                $("#numberofpeople").css('border', '#e66262 2px solid');
                valid = false;
            }
            if (document.frmContact.elements["pdf_file"].value == "")
          {
             $(document.frmContact.elements["pdf_file"]).css('border', '#e66262 2px solid');
             valid = false;  
         }
            return valid;
        }
        </script>
  </body>
</html>          