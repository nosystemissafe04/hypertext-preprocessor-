<?php
 $str="mohammadalihanfi";
 echo strlen($str);
 echo "<br>";
 $str1="i love programming its like i am talking to the computer ";
 echo str_word_count($str1);
 echo "<br>";
 $email="alihanfi04@gmail.com";
 if( strpos($email,"@") && strpos($email,".com") )
 {
 echo "the following email ".$email." is valid ";
 }
 else 
 {
 echo "the email is not valid please try again";
 }
 echo "<br>";
 echo ucwords($str1);
 echo "<br>".strtoupper($str1);
 echo "<br>".strtolower($str1);
?>
