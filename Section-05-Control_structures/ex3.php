<!-- 
Control structures and comparison operators

Here is an empty array, followed by a for  loop that will run its code block ten times.

Inside this block, add a control structure that will add an element to the array each time around the loop. Each element must be a string containing a single letter, based on the value of the loop index:

The letter "a" if $i  is less than 4

The letter "b" if $i  is between 4 and 7 (inclusive)

The letter "c" if $i  is greater than or equal to 8.

To add an element to the array, you can either use the array index directly, like this:

$array[1] = "a";

or use an empty index, which appends the value to the end of the array, automatically assigning the index:

$array[] = "a";

You can use an if / elseif / else structure, or a switch statement, whichever you prefer.

After the loop has executed, the array should have ten elements.
-->

<?php

$array = [];

for ($i = 1; $i <= 10; $i++) {

    // Put your code here
    if($i < 4)
        $array[] = "a";
    elseif($i < 8)
        $array[] = "b";
    else
        $array[] = "c";

}