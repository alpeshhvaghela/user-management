<?php
 $server = 'localhost';
 $username = 'root';
 $password = 'root';
 $db ='Trip';
 
 
 $con = mysqli_connect( $server, $username, $password,$db );
 if ( !$con ) {
     die( 'connection to this database failed due to'.mysqli_connect_error() );
 
 } 
 
?>