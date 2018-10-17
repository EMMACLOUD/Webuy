<?php
$host="localhost";
$usr="root";
$pwd="";
$dbname="webuy";
$conn=mysqli_connect($host,$usr,$pwd,$dbname);
    if (!$conn) {
        echo "Error Connecting to Database".mysqli_error_list($conn);
    }
      else {
          //echo "Connected Successfully";
      }
?>