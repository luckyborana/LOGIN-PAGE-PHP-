<?php

if (isset($_POST['submit']) && $_POST['g-recaptcha-response'] != "") {
    include "check.php";
    $secret = '6LfNACwdAAAAAJORgosTHUOqvvSAxqg_ovVtndB-';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
  
}