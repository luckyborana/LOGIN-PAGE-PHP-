<?php

if (isset($_POST['submit']) && $_POST['g-recaptcha-response'] != "") {
  include 'check.php';
  $secret = '6LfNACwdAAAAAJORgosTHUOqvvSAxqg_ovVtndB-';
  $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
  $responseData = json_decode($verifyResponse);

}
    ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Guljag - Login</title>
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <link rel="icon" href="https://www.google.com/imgres?imgurl=https%3A%2F%2F3.imimg.com%2Fdata3%2FCJ%2FMO%2FMY-1358%2Fguljag-industries-limited-120x120.jpg&imgrefurl=https%3A%2F%2Fwww.indiamart.com%2Fguljag-inds-ltd%2Faboutus.html&tbnid=9F1xf0U48AIxGM&vet=12ahUKEwiL0OSx-pT0AhU4sksFHWfrAcUQMyghegUIARCzAQ..i&docid=jzNlbqZ4R4MKpM&w=120&h=109&q=guljag%20industries%20limited&ved=2ahUKEwiL0OSx-pT0AhU4sksFHWfrAcUQMyghegUIARCzAQ">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<style type="text/css">
  * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body {
    margin: 125px auto;
    text-align: center;
    width: 800px;
    border-radius: 80%;
}
h1 {
    font-family: 'Passion One';
    font-size: 2rem;
    text-transform: uppercase;
}
label {
    width: 150px;
    display: inline-block;
    text-align: left;
    font-size: 1.5rem;
    font-family: 'Lato';
}
input {
    border: 2px solid #ccc;
    font-size: 1.5rem;
    font-weight: 50;
    font-family: 'Lato';
    padding: 0px;
}
form {
    margin: 25px auto;
    padding: 20px;
    border: 5px solid #ccc;
    width: 500px;
    background: #eee;
        border-radius: 5%;
}
div.form-element {
    margin: 15px 0;
}
button {
    padding: 10px;
    font-size: 1.5rem;
    font-family: 'Lato';
    font-weight: 100;
    background: yellowgreen;
    color: white;
    border: none;
}
p.success,
p.error {
    color: white;
    font-family: lato;
    background: yellowgreen;
    display: inline-block;
    padding: 2px 10px;
}
p.error {
    background: orangered;
}

</style>

<body class="" >

<form method="post" action="." name="signin-form">
    <h1> Login </h1>
    <br />
  <div class="form-element">
    <label>User-ID<sup style="color:red;">*</sup></label>
    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
  </div>
  <div class="form-element">
    <label>Mobile<sup style="color:red;">*</sup></label>
    <input type="text" name="text" id="email" required  />
    <input type="button" name="otp" value="Get OTP" class="btn-primary" style="border-radius:40%;" onclick="send_otp()">
  </div>
  <div class="form-element">
    <label>OTP<sup style="color:red;">*</sup></label>
      <input type="text" name="text" required />
  </div>

<div class="g-recaptcha" data-sitekey="6LfNACwdAAAAAIz78A4ofkB5sXKr8cGlmvG97nPe" required></div>

  <br />
  <button type="LOGIN" name="Login" value="Login" class="btn btn-primary btn-user btn-block" > Verify OTP </button>

</form>


  <!-- Bootstrap core JavaScript-->
    <script src="./vendor/jquery/jquery.min.js"></script>
    <script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="./vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="./js/sb-admin-2.min.js"></script>

</body>
</html>