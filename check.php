<?php

    $serverName = "GIL189";
    $connectionInfo = array( "Database"=>"lucky");
    $con =sqlsrv_connect( $serverName, $connectionInfo);

    if( !$con ) {
        echo "Connection is not established....<br />";
   }
  
?>