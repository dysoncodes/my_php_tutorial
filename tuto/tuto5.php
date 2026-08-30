video5/
└── index.php Strings
//A string is a sequence of characters, such as letters, numbers, and symbols.
//In PHP, strings are represented by enclosing the characters in either single quotes (' ') or double quotes (" ").
//Now this is a simple PHP code that will display a string on the web page.


<?php
$string1 = 'my email is';
$string2 = 'aimanazry12@gmail.com';

//echo $string1 . $string2;

$name = 'Aiman';

//echo "hey my name is" . $name

//echo "Hey my name is $name" 

//echo "aiman is a great man \"indeed\"";
echo 'aiman is a great man "indeed"';

//echo $name[1]; //it will print individual letters based on the $name

//echo strlen($name); //it will print the length of the string
//echo strtoupper($name); //It will print the name in uppercase letters
//echo strtolower($name); //It will print the name in lowercase letters
//echo str_replace("A", "O", $name); //it will replace any letter with another letter
?>

<!DOCTYPE html>
<html>

<head>
    <title>My PHP Tutorial</title>
</head>

<body>
    <h1>String Example</h1>
    <p>
        <?php echo $string1; ?>
    </p>
</body>

</html>