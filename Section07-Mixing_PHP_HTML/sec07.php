<!-- 
Mixing PHP and HTML
The following script has some PHP at the top, followed by some HTML.
An array variable is declared at the top that contains various elements.

Add some PHP code inside the HTML to display the items from the array.
They should be shown in an ordered list element (ol ). The resulting page in a browser should look like this:
--> 

<?php

$fruit = ['apple', 'banana', 'orange', 'mango'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Fruit</title>
    </head>
    <body>

    <h1>Fruit</h1>

    <!-- put your code below this line -->
    <ol>
    <?php
    foreach ($fruit as $value){
      echo "<li>$value</li>";
    }
    ?>
    </ol>
    </body>
</html>