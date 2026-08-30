//The video explains conditional statements in PHP, focusing on how if, else if,
and else allow a program to make decisions based on whether conditions are true or false.
It then demonstrates how to combine conditions with logical operators and use conditionals
inside loops and HTML templates.

<?php

// conditional statements

// $price = 20;

// if($price < 30){
// 	echo 'if condition met';
// } elseif($price === 20) {
// 	echo 'elseif condition met';
// } else {
// 	echo 'condition not met';
// }

$products = [
    ['name' => 'biggus diccus', 'price' => 20],
    ['name' => 'big chungus', 'price' => 10],
    ['name' => 'big boss', 'price' => 15],
    ['name' => 'big boin', 'price' => 5],
    ['name' => 'big stein', 'price' => 40],
    ['name' => 'big guy', 'price' => 2]
];

foreach ($products as $product) {

    // if($product['price'] < 15 && $product['price'] > 2){
    // 	echo $product['name'] . '<br />';
    // }

    // if($product['price'] > 20 || $product['price'] < 10){
    // 	echo $product['name'] . '<br />';
    // }

}

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials</title>
</head>

<body>

    <div>
        <ul>
            <?php foreach ($products as $product) { ?>
                <?php if ($product['price'] > 15) { ?>
                    <li>
                        <?php echo $product['name'] ?>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>

</body>

</html>