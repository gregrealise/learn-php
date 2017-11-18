<?php
/*
Write a PHP program that computes the total cost of this restaurant meal: two hamburgers at $ 4.95 each, one chocolate milkshake at $ 1.95, 
and one cola at 85 cents. The sales tax rate is 7.5%, and you left a pre-tax tip of 16%.
Sklar, David. Learning PHP: A Gentle Introduction to the Web's Most Popular Language (Kindle Locations 952-954). O'Reilly Media. Kindle Edition. 
*/
header("Content-Type: text/plain");
$hamburger_cost = 4.95;
$milkshake_cost = 1.95;
$cola_cost = 0.85;
$tipRate = 0.16;
$taxRate = 0.075;

$cost = 2 * $hamburger_cost + $milkshake_cost + $cola_cost;
$tip = $cost * $tipRate;
$tax = $cost * $taxRate;


print "Food\n";
printf ("Hamburger \t 2 @ $hamburger_cost \t = $%.2f\n",$hamburger_cost * 2);
printf ("Milkshake \t 1 @ $milkshake_cost \t = $%.2f\n",$milkshake_cost);
printf ("Cola \t\t 1 @ $cola_cost \t = $%.2f\n\n",$cola_cost);
printf ("Tax \t\t @ %.1f%% \t = $%.2f\n",$taxRate*100, $tax);
printf ("Tip \t\t @ %.1f%% \t = $%.2f\n",$tipRate*100, $tip);

printf("***** Grand Total \t\t = $%.2f *****\n",$cost+$tax+$tip);
print "Thanks for your custom y'all";
?>