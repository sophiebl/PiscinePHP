#!/usr/bin/php
<?php

if ($argc > 1)
{
   array_shift($argv);
   $str = implode(" ", $argv);
   trim($str);
   $arg = preg_split("/\s+/", $str);

   $alpha = array();
   $num = array();
   $other = array();
   $result = array();

   foreach($arg as $new){
      if (is_numeric($new)) {
         array_push($num, $new);
      } else if (ctype_alpha($new)) {
         array_push($alpha, $new);
      } else {
         array_push($other, $new);
      }
   }
   sort($alpha, SORT_STRING | SORT_FLAG_CASE);
   rsort($num, SORT_NUMERIC);
   sort($other);
   foreach($alpha as $e) {
      print($e."\n");
   }
   foreach($num as $e) {
      print($e."\n");
   }
   foreach($other as $e) {
      print($e."\n");
   }
}


?>