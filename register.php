<!DOCTYPE HTML>
<html>
<head>
<title>Register</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Custom CSS -->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!----webfonts--->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel="stylesheet" type="text/css">
<!---//webfonts--->  
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</head>
<body id="login">
  <div class="login-logo">
    <a href="index.html"><img src="images/logo.png" alt=""/></a>
  </div>
  <h2 class="form-heading">Register</h2>
  <form class="form-signin app-cam" action="register_data.php" method="post">
      <p>Enter your personal details below</p>
      <input type="text" class="form-control1" name="fulname" placeholder="Full Name" autofocus>
      <input type="text" class="form-control1" name="address" placeholder="Address" autofocus>
      <input type="text" class="form-control1" name="email" placeholder="Email" autofocus>
      <input type="text" class="form-control1" name="town" placeholder="City/Town" autofocus>
      <div class="radios">
        <label for="radio-01" class="label_radio">
            <input type="radio" name="gender" value="male" checked=""> Male
        </label>
        <label for="radio-02" class="label_radio">
            <input type="radio" name="gender" value="female"> Female
        </label>
	  </div>
	  <p> Enter your account details below</p>
      <input type="text" class="form-control1" name="uname" placeholder="User Name" autofocus>
      <input type="password" class="form-control1" name="Password" placeholder="Password">
      <input type="password" class="form-control1" name="Re-type-password" placeholder="Re-type Password">
      <label class="checkbox-custom check-success">
          <input type="checkbox" value="agree this condition" id="checkbox1"> <label for="checkbox1">I agree to the Terms of Service and Privacy Policy</label>
      </label>
      <button class="btn btn-lg btn-success1 btn-block" type="submit" name="submit">Submit</button>
      <div class="registration">
          Already Registered.
          <a class="" href="login.html">
              Login
          </a>
      </div>
  </form>
   <div class="copy_layout login register">
      <p>Copyright &copy; 2015 Modern. All Rights Reserved | Design by <a href="" target="_blank">W3layouts</a> </p>
   </div>
</body>
</html>
