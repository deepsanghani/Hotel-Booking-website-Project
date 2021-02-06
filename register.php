<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Signup</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="login.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../lib/w3.css">
</head>
<body class="container">
  <div class="header">
  	<h2>Register</h2>
  </div>

  <form method="post" action="register.php" onsubmit="return validateContactForm()">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
<span id="userName-info" class="info"></span>
  	  <label>Username</label>
  	  <input type="text" id="username" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
	<span id="email-info" class="info" style="color:red"></span>
  	  <input type="email" id="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already have an account? <a href="login.php">Sign in</a>
  	</p>
  </form>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#username").val();
            var userEmail = $("#email").val();
            
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

            
            return valid;
        }
</script>
</body>
</html>