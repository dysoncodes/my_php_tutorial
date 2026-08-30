//include and require

//Both are built-in PHP statements used to load another file into the current PHP file.
The included file is processed as part of the current script.
They are useful for separating code into multiple files.
include

//Loads and executes the specified file.
If the file cannot be found or loaded:
PHP generates an error.
The rest of the script continues executing.
require

//Also loads and executes another file.
If the required file cannot be found or loaded:
PHP produces a fatal error.
The rest of the script does not continue.
Main difference

//include → error occurs, but execution continues.
require → fatal error occurs, and execution stops.
Syntax

//Both can be written with parentheses or without them.
The file path is specified relative to the current file.
Code modularization

//include and require allow large programs to be divided into smaller, manageable files.
Different parts of a website can be stored separately.
This helps keep code organized and easier to understand.
Reducing code repetition

//Shared code doesn't need to be written repeatedly across multiple pages.
A reusable piece of code can be stored in one external file.
That file can then be included wherever it is needed.
Easier maintenance

//Updating a shared component only requires changing its external file.
All pages that load that file automatically receive the updated version.
This makes maintaining websites significantly easier.
Common uses

//Website navigation bars.
Footers.
Shared page content.
Template components.
Other reusable sections of a website.
Upcoming project

//The concepts will be used in the Ninja Pizza project.
The next stage will involve creating reusable navbar and footer templates.

<div>
    <h1>
        <?php echo 'some content' ?>
    </h1>
</div>

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

<?php

$ninjas = ['shaun', 'ryu', 'yoshi'];

echo $ninjas[1] . '<br />';

?>