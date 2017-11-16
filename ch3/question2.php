<?php
/*
Write a PHP program that computes the total cost of this restaurant meal: two hamburgers at $ 4.95 each, one chocolate milkshake at $ 1.95, 
and one cola at 85 cents. The sales tax rate is 7.5%, and you left a pre-tax tip of 16%.
Sklar, David. Learning PHP: A Gentle Introduction to the Web's Most Popular Language (Kindle Locations 952-954). O'Reilly Media. Kindle Edition. 
*/
$hamburger_cost = 4.95;
$milkshake_cost = 1.95;
$cola_cost = 0.85;
$tip = 0.16;
$tax = 0.075;

$cost = 2 * $hamburger_cost + $milkshake_cost + $cola_cost;
$tip *= $cost;
$tax *= $cost;

print "Total cost = $cost";
?>