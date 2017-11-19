<?php
/*
Write a PHP program that uses the increment operator (+ +) and the combined multiplication operator (* =) to print out the numbers from 1 to 5 and powers of 
2 from 2 (21) to 32 (25).
Sklar, David. Learning PHP: A Gentle Introduction to the Web's Most Popular Language (Kindle Locations 958-959). O'Reilly Media. Kindle Edition.  
*/
header("Content-Type: text/plain");

$j=1;
for ($i=1;$i<=5;$i++)
{
    $j *= 2;
    print "$i\t $j \n";
}
?>