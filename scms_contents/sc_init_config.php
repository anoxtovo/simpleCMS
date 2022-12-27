<?php
    // simpleCMS Configuration file
    // release version: 0.1
    
    $server_host = "localhost";          // change here..
    $server_user = "root";              // change here..
    $server_pass = "";                   // change here..
    $server_db = "pscmsv1_db_login";     // change here..
    $conn_status = FALSE;

    try {
        
        $scdbconn = new PDO("mysql:host=$server_host;dbname=$server_db", $server_user, $server_pass);
        // Setting PDO error mode to exeption
        $scdbconn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn_status = TRUE;
        echo("Connection established successfully<br> Connection Status: ".$conn_status);

    } catch (PDOException $e) {
        
        $conn_status = FALSE;
        echo("Connection Failed: ". $e->get_Message()."<br>Connection Status: ".$conn_status);
    
    }


?>