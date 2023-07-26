<?php
 $to= "nosystemissafe419@gmail.com";
 $subject="test email";
 $message="just Lorem ipsum dolor sit amet, qui minim labore adipisicing minim sint cillum sint consectetur cupidatat.Lorem ipsum dolor sit amet, qui minim labore adipisicing minim sint cillum sint consectetur cupidatat.testing the php for sending emails ";
 $headers="From:alihanfi04@gmail.com";

 mail($to,$subject,$message,$headers);

 echo "mail sent";
?>
