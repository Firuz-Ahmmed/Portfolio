<?php
//if "email" variable is filled out, send email
  if (isset($_REQUEST['email']))  {
  
  //Email information
  $admin_email = "iamfiruz70@gmail.com";
  $email = $_REQUEST['Email'];
  $subject = $_REQUEST['Name'];
  $comment = $_REQUEST['Message'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Thank you for contacting us!";
  }
?>
