// video4/
// └── index.php variables

//A variable is a container that holds a value. In PHP, variables are represented by a dollar sign ($) followed by the
variable name.
//Variable names can contain letters, numbers, and underscores, but they must start with a letter.
//Now this is a simple PHP code that will display the value of a variable on the web page.

<?php

define('NAME', 'Aiman');
//$name = "Aiman";
$age = 20;

// $name = 'Azry';
?>

<!DOCTYPE html>
<html>

<head>
    <title>My PHP Tutorial</title>
</head>

<body>
    <h1>User Profile Page</h1>

    <div>
        <?php echo NAME; ?>
    </div>
    <div>
        <?php echo $age; ?>
    </div>
</body>

</html>


//That is how we create variables and we store data in them,
and that is also how we can create constants as well we don't want
them to be overridden.