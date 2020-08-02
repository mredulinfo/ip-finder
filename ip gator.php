<?php
//whether ip is from share internet
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
//whether ip is from remote address
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }
//   

// use wordwrap() if lines are longer than 70 characters
$msg = ($ip_address);

// send email

$email_to = "your email";
mail($email_to,"My subject",$msg);
header("Location: https://www.your websiteg to redirect.com");
exit();
?>
