video8/
└── index.php MultiDimensional Array

<?php

$blogs = [
    ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'views' => 30],
    ['title' => 'mario kart', 'author' => 'luigi', 'content' => 'lorem', 'views' => 25],
    ['title' => 'mario odyssey', 'author' => 'yoshi', 'content' => 'lorem', 'views' => 50]
];

//print_r($blogs[1][1]); //it will print the entire array
//echo $blogs[2]['author']; //it will print the value of the key 'author' in the array
//echo count($blogs); //it will print the number of elements in the array

$blogs[] = ['title' => 'castle party', 'author' => 'peach', 'content' => 'lorem', 'views' => 100];

//print_r($blogs); //it will print the entire array
$popped = array_pop($blogs); //it will remove the last element from the array
//print_r($popped); //it will print the removed element

?>

<!DOCTYPE html>
<html>

<head>
    <title>My PHP Tutorial</title>
</head>

<body>
    <h1>MultiDimensional Array Example</h1>
</body>

</html>