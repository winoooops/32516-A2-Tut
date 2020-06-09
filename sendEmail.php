<?php
  // get the thing from sessionStorage to PHP and sent it as part of the email  
  if(isset($_POST['submit']) && isset($_POST['emailAddress']) ) {
    $cars = $_POST['carInfo'];
    // echo $cars;
    $msg = "a email has been sent to you".$cars;
    echo $msg;
    $email = $_POST['emailAddress'];
    if( mail($email, 'an order', $msg)) {
      echo "email success"; 
    }  
  }
  
    
  
  
?>
