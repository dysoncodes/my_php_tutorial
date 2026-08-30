video3/
└── index.php Creating a file/folder

// create a new folder in your htdocs folder and name it "my_php_tutorial".
// then create a new file in the "my_php_tutorial" folder and name it "index.php".

// this is a simple PHP code that will display "Hello World!" on the web page.

<?php
echo "Hello World!";
?>

// then run the file in the browser by going to http://localhost/my_php_tutorial/index.php
// you don't need write index.php in the url,
because it will automatically look for index.php or index.html file in the folder and run it. (if it exists)

// If you dont't have a semicolon at the end of your line, it will give an error message
when you run it in the browser.

<!DOCTYPE html>
<html>

<head>
    <title>My PHP Tutorial</title>
</head>

<body>
    <h1>
        <?php echo "Hello World!"; ?>
    </h1>

</body>

</html>

//The h1 tag is an HTML tag that is used to define a heading in a web page.
//The text inside the h1 tag will be displayed in a larger font size and bolded by default.
//Running that php resulting in that text being embedded between the h1 tags,
and then taking the resulting HTML and sending it to the client's browser,
which will then render the text as a heading on the web page.