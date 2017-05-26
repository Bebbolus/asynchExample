<?php

$numbers = [7, 4];
foreach($numbers as $number)
{ 
   if (isPrime($number)) 
   { 
     echo “$number is a prime number!\n”; 
   }else { 
     echo “$number is a not prime number…\n”; 
   } 
}
