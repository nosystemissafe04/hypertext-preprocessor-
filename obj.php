<?php
 class name
 {
   public $firstname;
   public $lastname;
 }
 $student=new $name();
 $student->$firstname="alihanfi";
 $student->$lastname="hanfi";
 echo $student->$firstname;
?>
