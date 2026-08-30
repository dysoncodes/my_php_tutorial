video7/
└── index.php Array

//An array is a data structure that can hold multiple values.
//In PHP, arrays are represented by enclosing the values in square brackets ([ ]) and separating them with commas (,).

<?php

//indexed array
$people1 = ['Aiman', 'Azry', 'Zairy'];
//echo $people1[1];

//associative array
$people2 = array('Walter White', 'Epstein');
echo $people2[1];

$ages = [20, 30, 40, 50];
//print_r($ages);

$ages[1] = 25;
//print_r($ages);

$ages[] = 60;
//print_r($ages);

array_push($ages, 70);
//print_r($ages);

//echo count($ages); //it will print the number of elements in the array

$people3 = array_merge($people1, $people2);
//print_r($people3); //it will merge two arrays into one array

// associative arrays (key & value pairs)

$ninja1 = ['Aiman' => 'purple', 'Azry' => 'pink', 'Zairy' => 'red'];
//echo $ninja1['Iman']; //it will print the value of the key 'Iman' in the array
//print_r($ninja1); //it will print the entire array

$ninja2 = array('izati' => 'blue', 'icati' => 'red');
//print_r($ninja2);

$ninja2['aqeil'] = 'orange';
//print_r($ninja2);

echo count($ninja1); //it will print the number of elements in the array

$ninja3 = array_merge($ninja1, $ninja2);
//print_r($ninja3); //it will merge two arrays into one array

?>

<!DOCTYPE html>
<html>

<head>
    <title>My PHP Tutorial</title>
</head>

<body>
    <h1>Array Example</h1>
</body>

</html>