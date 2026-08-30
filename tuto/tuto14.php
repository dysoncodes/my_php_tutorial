//Variable scope

//Scope determines where a variable can be accessed in your PHP code.
// The two main types discussed are:
//Local scope
//Global scope


//Local variables

//A variable created inside a function has local scope.
It can only be accessed within that function.


//Function parameters are local
A parameter passed into a function is also treated as a local variable.

//Changing a global variable inside a function
When a global variable is accessed using global, changing it inside the function also changes
the original variable.

//Passing values as function arguments
When you pass a variable into a function normally, the function receives its own local parameter.
Changing that parameter does not change the original variable.

//Passing by reference with &
You can make a function parameter refer directly to the original variable.

<?php

// variable scope

// local vars

function myFunc()
{
    $price = 10;
    echo $price;
}

// myFunc();
// echo $price;

function myFuncTwo($age)
{
    echo $age;
}

// myFuncTwo(25);
// echo $age;

// global variables

$name = 'mario';

// function sayHello(){
// 	global $name;
// 	$name = 'yoshi';
// 	echo "hello $name ";
// }

// sayHello();
// echo $name;

function sayBye(&$name)
{
    $name = 'wario';
    echo "bye $name ";
}

sayBye($name);
echo $name;


?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials</title>
</head>

<body>

</body>

</html>