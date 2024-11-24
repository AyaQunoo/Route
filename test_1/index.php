<?php
//Q3 Write a PHP program to sort this array to  ASC and also sort it as  DESC . 
// (without using  built in functions)
$array = [2, 4, 3, 1, 6, 7, 5, 8, 0, 9];

$temp = 0;
//ascending order
for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] > $array[$j]) {
            $temp =  $array[$j];
            $array[$j] = $array[$i];
            $array[$i] = $temp;
        }
    }
}
print_r($array);
// desc
for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] < $array[$j]) {
            $temp =  $array[$j];
            $array[$j] = $array[$i];
            $array[$i] = $temp;
        }
    }
}

print_r($array);
//Q4 - write a program to calculate the avg of numbers array. 

function avg($array)
{
    $sum = 0;
    foreach ($array as  $number) {
        $sum += $number;
    }
    return $sum / count($array);
}
$numbers = [1, 2, 6, 7, 8, 9, 10, 22];
$result = avg($numbers);
echo $result;

//Q5 - write a program to filter even numbers from an array, delete all even numbers.

function filter_even($array)
{
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] % 2 == 0) {
            unset($array[$i]);
        }
    }
    return $array;
}
print_r(filter_even($numbers));
//Q6 - write a program to find the max number of numbers group [10,30,20], using if. 

function max_num($array)
{
    $max = $array[0];
    for ($i = 1; $i < count($array); $i++) {
        if ($array[$i] > $max) {
            $max = $array[$i];
        }
    }
    return $max;
}
echo max_num([10, 20, 30]);
// Q7 7-Write a PHP script to increment date by one month 
// Sample date : 2012-12-21 
// Expected Output : 2013-01-21.
function inc($date)
{
    $date = strtotime("+1 month", strtotime($date));
    return date("Y-m-d", $date);
}
echo inc("2012-12-21");

//Q8 8- Write a PHP script to get the number of the month before the current month. 
function prev_month($date)
{
    $date = strtotime("-1 month", strtotime($date));
    return date("m", $date);
}
echo prev_month("2012-1-21");
//Q9 -Write a PHP script that checks if a string contains another string.(using regularexpression). 
function contains($substring, $string)
{
    if (preg_match("/$substring/", $string)) {
        return "substring is found";
    } else {
        return "not found";
    }
}
echo contains("aya", "ayaqunoo");
//Q10 10- Write a function to check whether a number is prime or not. 
// Note: A prime number (or a prime) is a natural number greater than 1 that has no 
// positive divisors other than 1 and itself. 
function isPrimary($number)
{
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {

            echo "its not prime number";
            return false;
        }
    }
    echo "its prime";
    return true;
}

isPrimary(2);
