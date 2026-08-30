video9/
└── index.php Loops

//A loop is a programming construct that allows you to repeat a block of code multiple times.
//When you've been given 5 blogs, you can use a loop to execute the same code in one go, instead of writing the same
code 5 times.
//Loops have 7 types in PHP, but the most commonly used loops are for loop, while loop, and foreach loop.

//for loop
for($i = 0; $i < 5; $i++){ echo 'Hello World! <br>' ; } //for loop is used when you know how many times you want to
    repeat a block of code. It has three parts: the initialization, the condition, and the increment/decrement.
    //foreach loop $blogs=[blog1, blog2, blog3, blog4, blog5]; foreach($blogs as $blog){ echo $blog . '<br>' ; }
    //foreach loop is used to iterate over an array. It has two parts: the array and the variable that will hold the
    current value of the array. <?php
    // loops
    
    $ninja = ['Aiman', 'Azry', 'Zairy'];
    //for($i = 0; $i < count($ninja); $i++){
//    echo $ninja[][$i] . '<br />';
//}
    
    //foreach($ninja as $nin){
    // echo $nin . '<br />';
    //}
    
    $products = [
        ['name' => 'shoes', 'price' => 20],
        ['name' => 'pants', 'price' => 30],
        ['name' => 'shirts', 'price' => 40]
    ];

    //foreach($products as $product){
    //echo $product['name'] . ' - ' . $product['price'] . '<br />';
    // echo <br />; //it will print the name and price of each product in the array
// }
    
    $i = 0;

    while ($i < count($products)) {
        echo $products[$i]['name'];
        echo '<br />';
        $i++;
    }

    ?>

    <!DOCTYPE html>
        <html>

        <head>
            <title>My PHP Tutorial</title>
        </head>

        <body>
            <h1>Products</h1>
            <ul>
                <?php foreach ($products as $product) { ?>

                    <h3>
                        <?php echo $product['name']; ?>
                    </h3>
                    <p>Price: $
                        <?php echo $product['price']; ?>
                    </p>
                <?php } ?>

            </ul>
        </body>

        </html>