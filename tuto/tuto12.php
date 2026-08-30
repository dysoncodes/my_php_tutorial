//Tutorial 12 explains two important PHP keywords used inside loops: break and continue.
Both affect how a loop executes, but they behave differently: break completely exits the
loop, while continue skips the rest of the current iteration and moves to the next one.

<?php

// continue and break

$products = [
    ['name' => 'biggus diccus', 'price' => 20],
    ['name' => 'big chungus', 'price' => 10],
    ['name' => 'big boss', 'price' => 15],
    ['name' => 'big boin', 'price' => 5],
    ['name' => 'big stein', 'price' => 40],
    ['name' => 'big guy', 'price' => 2]
];

foreach ($products as $product) {

    if ($product['name'] === 'lightning bolt') {
        break;
    }

    if ($product['price'] > 15) {
        continue;
    }

    echo $product['name'] . '<br />';

}

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Tutorials</title>
</head>

<body>

</body>

</html>