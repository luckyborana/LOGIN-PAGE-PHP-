<?php

    $serverName = "GIL189";
    $connectionInfo = array( "Database"=>"lucky");
    $conn =sqlsrv_connect( $serverName, $connectionInfo);

      if ( $conn) {
        echo "connection establish <br />";
        // code...
    }
    else
    {
        echo "connection not done<br />";
        die( print_r(sqlsrv_errors(), true));
    }
?>
 <?php
session_start();
// Include script to make a database connection
include("config.php");
// Check if input fileds are empty
if(empty($_POST['username']) && empty($_POST['email']) && empty($_POST['password'])){
    // If the fields are empty, display a message to the user
    echo "Please fill in the fields";
// Process the form data if the input fields are not empty
}else{
    $name= $_POST['username'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    echo ('Your username is:     '. $username. '<br/>');
    echo ('Your Email is:'   . $email. '<br/>');
    echo ('Your password is:'   . $password. '<br/>');
    
    # Insert into the database
    $query = "INSERT INTO users(username,email,password) VALUES ('$username','$email','$password')";
    if (sqlsrv_query($conn, $query)) {
        echo "New record created successfully !";
    } else {
         echo "Error inserting record: " . $conn->error;
    }
}
?>

<?php
include 'check.php';
    if (isset($_POST['login']))
        {
            $userid = $_POST['userid'];
            $password = $_POST['password'];
            
            $query      = sqlsrv_query($con, "SELECT * FROM credentials WHERE  password='$password' and userid='$userid'");
            $row        = sqlsrv_fetch_array($query);
            $num_row    = sqlsrv_num_rows($query);
        
            if ($num_row > 0) 
                {           
                    echo "LOGGED INs";
                    
                }
            else
                {
                    echo "LOGGED IN Not";
                }
        }
  ?>