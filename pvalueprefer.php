<?php
 $steps=400;
 function addbyvalue($value)
 {
  if($value==400)
 {
 echo "you have walked 1km";
  }
  return $value/$value;
 }
 function addbyreference(&$value)
 {
  $steps=$value/$value;
  if($value==400)
  {
  echo "you have walked 1km";
  }
  //return $value/$value;
 }
echo "you have reached ". addbyvalue($steps)."km"."<br>";
//echo "you have reached ". addbyreference($steps)."km"."<br>";
echo "you have reached ". $steps;
?>
