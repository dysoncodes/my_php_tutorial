// Functions in PHP is a reusable blocks of code that perform a specific task.
Functions help avoid repeating the same code and can accept arguments, use parameters,
have default values, and return values for later use.

//What is a function?

//A function is a reusable block of code designed to perform a particular task.
//A function can be called/invoked as many times as needed.
//The main benefit is that you write the code once and reuse it.

<?php

// functions

function sayHello($name = 'shaun', $time = 'morning')
{
    echo "Good $time, $name";
}

//sayHello();
//sayHello('mario');
sayHello('yoshi', 'night');

function formatProduct($product)
{
    // echo "{$product['name']} costs £{$product['price']} to buy <br />";
    return "The {$product['name']} costs £{$product['price']} to buy <br />";
}

//formatProduct(['name' => 'gold star', 'price' => 20]);

// $formatted = formatProduct(['name' => 'gold star', 'price' => 20]);
// echo $formatted;

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials</title>
</head>

<body>

</body>

</html>