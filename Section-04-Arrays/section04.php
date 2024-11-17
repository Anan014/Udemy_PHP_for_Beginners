<!--
Arrays

Create a variable called array that contains an array with three simple values. These values can be whatever you like.

Explicitly assign the string index of "third" to the third element.

Write a foreach  loop that contains the following statement to print out each element of the array, along with its index:

echo "$index = $value.";

-->

<?php

$array = ["one" => "one", "second" => "two", "third" => "three"];

foreach ($array as $index => $value) {
    echo $index . " = " . $value . ".<br>";
}